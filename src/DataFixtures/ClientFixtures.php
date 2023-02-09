<?php

namespace App\DataFixtures;

use App\Entity\Client;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ClientFixtures extends Fixture
{
    public const CLIENT_REF = 'client_';

    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    private function getClients()
    {
        return [
            [
                "name" => "Endrosi",
                "email" => "thomas@email.fr",
                "password" => "dev",
                "roles" => ["ROLE_ADMIN"]
            ],
            [
                "name" => "Carmel",
                "email" => "jerome@email.fr",
                "password" => "dev",
                "roles" => ["ROLE_ADMIN"]
            ],
            [
                "name" => "SDL",
                "email" => "ayoub@email.fr",
                "password" => "dev",
                "roles" => ["ROLE_USER"]
            ],
            [
                "name" => "Carebout",
                "email" => "mathilde@email.fr",
                "password" => "dev",
                "roles" => ["ROLE_USER"]
            ],
            [
                "name" => "Alphios",
                "email" => "david@email.fr",
                "password" => "dev",
                "roles" => ["ROLE_ADMIN"]
            ]
        ];
    }

    public function load(ObjectManager $manager): void
    {
        $Clients = $this->getClients();
        foreach ($Clients as $client){
            $newClient = new Client();
            $newClient->setEmail($client['email']);
            $newClient->setName($client['name']);

            $hashedPassword = $this->passwordHasher->hashPassword($newClient, $client['password']);

            $newClient->setPassword($hashedPassword);
            if(isset($user['roles'])) $newClient->setRoles($user['roles']);

            $this->addReference(self::CLIENT_REF. $newClient->getName(), $newClient);

            $manager->persist($newClient);
        }
        $manager->flush();
    }
}