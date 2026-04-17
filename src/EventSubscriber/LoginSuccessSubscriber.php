<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;

class LoginSuccessSubscriber implements EventSubscriberInterface
{
    private UrlGeneratorInterface $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LoginSuccessEvent::class => 'onLoginSuccess',
        ];
    }

    public function onLoginSuccess(LoginSuccessEvent $event): void
    {
        // Don't interfere with API / JWT json_login
        $request = $event->getRequest();
        if ($request->getPathInfo() === '/api/login_check') {
            return;
        }

        $user = $event->getUser();
        $roles = $user->getRoles();

        if (in_array('SIEGE', $roles, true) || in_array('ROLE_ADMIN', $roles, true)) {
            $url = $this->urlGenerator->generate('app_siege_dashboard');
        } elseif (in_array('ROLE_ENTREPRISE', $roles, true) || in_array('ROLE_FRANCHISE', $roles, true)) {
            $url = $this->urlGenerator->generate('app_front_home');
        } else {
            // Default fallback
            $url = $this->urlGenerator->generate('app_front_home');
        }

        $event->setResponse(new RedirectResponse($url));
    }
}
