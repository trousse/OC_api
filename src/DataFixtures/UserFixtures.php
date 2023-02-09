<?php

namespace App\DataFixtures;

use App\DataFixtures\ClientFixtures;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture implements DependentFixtureInterface
{
    private function getUsers()
    {
        return [["id" => 1, "firstName" => 'Mohammed', "lastName" => 'Ahmed', "client" => 'Endrosi'],
            ["id" => 2, "firstName" => 'Juan', "lastName" => 'Garcia', "client" => 'Carmel'],
            ["id" => 3, "firstName" => 'Sophia', "lastName" => 'Lee', "client" => 'SDL'],
            ["id" => 4, "firstName" => 'Fatimah', "lastName" => 'Khan', "client" => 'Carebout'],
            ["id" => 5, "firstName" => 'David', "lastName" => 'Williams', "client" => 'Alphios'],
            ["id" => 6, "firstName" => 'Amir', "lastName" => 'Raza', "client" => 'Endrosi'],
            ["id" => 7, "firstName" => 'Maria', "lastName" => 'Santos', "client" => 'Carmel'],
            ["id" => 8, "firstName" => 'Tariq', "lastName" => 'Abbas', "client" => 'SDL'],
            ["id" => 9, "firstName" => 'Ava', "lastName" => 'Johnson', "client" => 'Carebout'],
            ["id" => 10, "firstName" => 'Nina', "lastName" => 'Kamal', "client" => 'Alphios']
        ];
    }

    public function load(ObjectManager $manager): void
    {
        $users = $this->getUsers();
        foreach ($users as $user) {
            $newUser = new User();
            if (isset($user['client'])) $newUser->setClient($this->getReference(ClientFixtures::CLIENT_REF . $user['client']));
            $newUser->setFirstName($user['firstName']);
            $newUser->setLastName($user['lastName']);

            $manager->persist($newUser);
        }
        $manager->flush();
    }


    public function getDependencies()
    {
        return [
            ClientFixtures::class,
        ];
    }
}