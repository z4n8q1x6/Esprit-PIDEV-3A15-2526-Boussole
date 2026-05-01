<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Reclamations;
use App\Service\ReclamationsManager;

class ReclamationsManagerTest extends TestCase
{
    // ✅ Test 1: valid reclamation
    public function testValidReclamation()
    {
        $reclamation = new Reclamations();
        $reclamation->setSujet('Problème de livraison');
        $reclamation->setDescription('La livraison est en retard de 3 jours');

        $manager = new ReclamationsManager();
        $this->assertTrue($manager->validate($reclamation));
    }

    // ✅ Test 6: default status is EN_ATTENTE
    public function testDefaultStatut()
    {
        $reclamation = new Reclamations();
        $this->assertEquals('EN_ATTENTE', $reclamation->getStatut());
    }

    // ❌ Test 2: empty sujet
    public function testReclamationWithoutSujet()
    {
        $this->expectException(\InvalidArgumentException::class);

        $reclamation = new Reclamations();
        $reclamation->setSujet('');
        $reclamation->setDescription('La livraison est en retard de 3 jours');

        $manager = new ReclamationsManager();
        $manager->validate($reclamation);
    }

    // ❌ Test 3: sujet starts with a number
    public function testReclamationSujetStartsWithNumber()
    {
        $this->expectException(\InvalidArgumentException::class);

        $reclamation = new Reclamations();
        $reclamation->setSujet('1er problème de livraison');
        $reclamation->setDescription('La livraison est en retard de 3 jours');

        $manager = new ReclamationsManager();
        $manager->validate($reclamation);
    }

    // ❌ Test 4: empty description
    public function testReclamationWithoutDescription()
    {
        $this->expectException(\InvalidArgumentException::class);

        $reclamation = new Reclamations();
        $reclamation->setSujet('Problème de livraison');
        $reclamation->setDescription('');

        $manager = new ReclamationsManager();
        $manager->validate($reclamation);
    }


    // ❌ Test 3: description starts with a number
    public function testReclamationDescriptionStartsWithNumber()
    {
        $this->expectException(\InvalidArgumentException::class);

        $reclamation = new Reclamations();
        $reclamation->setSujet('Problème de livraison');
        $reclamation->setDescription('1er problème de livraison');

        $manager = new ReclamationsManager();
        $manager->validate($reclamation);
    }


    // ❌ Test 5: description length less then 5
    public function testReclamationDescriptionTooShort()
    {
        $this->expectException(\InvalidArgumentException::class);

        $reclamation = new Reclamations();
        $reclamation->setSujet('Problème de livraison');
        $reclamation->setDescription('Oui');

        $manager = new ReclamationsManager();
        $manager->validate($reclamation);
    }

}
