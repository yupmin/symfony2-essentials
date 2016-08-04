<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Tag;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class LoadUserData
 * @package AppBundle\DataFixtures\ORM
 */
class LoadUserData implements FixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $tags = [
            'company',
            'home',
            'important',
        ];

        foreach ($tags as $tag) {
            $obj = new Tag();
            $obj->setName($tag);
            $manager->persist($obj);
        }

        $manager->flush();
    }
}
