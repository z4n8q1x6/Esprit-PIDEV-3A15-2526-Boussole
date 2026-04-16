<?php

namespace App\Security;

use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

use App\Service\FacePlusPlusService;

class FaceAuthenticator extends AbstractAuthenticator
{
    use TargetPathTrait;

    public function __construct(
        private EntityManagerInterface $entityManager,
        private RouterInterface $router,
        private FacePlusPlusService $faceppService
    ) {}

    public function supports(Request $request): ?bool
    {
        return $request->attributes->get('_route') === 'app_login_face' && $request->isMethod('POST');
    }

    public function authenticate(Request $request): Passport
    {
        $data = json_decode($request->getContent(), true);
        $imageBase64 = $data['image'] ?? null;

        if (!$imageBase64) {
            throw new CustomUserMessageAuthenticationException('Données de visage manquantes.');
        }

        return new SelfValidatingPassport(
            new UserBadge('face_auth', function() use ($imageBase64) {
                // Search for the face in Face++ cloud
                $matchingToken = $this->faceppService->searchFace($imageBase64);
                
                if (!$matchingToken) {
                    throw new CustomUserMessageAuthenticationException('Visage non reconnu (Cloud).');
                }

                $user = $this->entityManager->getRepository(Utilisateur::class)->findOneBy(['face_token' => $matchingToken]);

                if (!$user) {
                    throw new CustomUserMessageAuthenticationException('Token reconnu mais aucun utilisateur associé.');
                }

                if (!$user->isActif()) {
                    throw new CustomUserMessageAuthenticationException('Compte désactivé.');
                }

                return $user;
            })
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        return new JsonResponse([
            'success' => true,
            'redirect' => $this->router->generate('app_home')
        ]);
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        return new JsonResponse([
            'success' => false,
            'error' => $exception->getMessageKey()
        ], Response::HTTP_UNAUTHORIZED);
    }
}
