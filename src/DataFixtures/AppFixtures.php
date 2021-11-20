<?php

namespace App\DataFixtures;

use App\Entity\Client;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();


        $password = $this->encoder->encodePassword($user, 'pass_1234');
        $user->setPassword($password)
            ->setEmail("hrichi_kabil@yahoo.com")
            ->setRoles(["play"]);


        $manager->persist($user);

        for ($i = 0; $i < 10; $i++) {
            $client = new Client();
            $client->setNameClient("client nb : {$i}")
                ->setMailClient("Mail nb {$i}")
                ->setPhoneClient("{$i} 0000");
            $manager->persist($client);
        }


        $manager->flush();
    }
}
