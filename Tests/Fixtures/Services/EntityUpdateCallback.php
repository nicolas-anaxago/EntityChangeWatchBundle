<?php


namespace Actiane\EntityChangeWatchBundle\Tests\Fixtures\Services;

use Actiane\EntityChangeWatchBundle\Tests\Fixtures\Entity\Entity;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class EntityUpdateCallback
 * @package Actiane\EntityChangeWatchBundle\Tests\Fixtures\Services
 */
class EntityUpdateCallback
{
    public $testUpdateAccess = false;

    public $testUpdateAfterAccess = false;

    public function testUpdate(Entity $entity, $changedProperties, EntityManagerInterface $entityManager)
    {
        $this->testUpdateAccess = true;
    }

    public function testUpdateAfter(Entity $entity, $changedProperties, EntityManagerInterface $entityManager)
    {
        $this->testUpdateAfterAccess = true;
    }

    public function reset(){
        $this->testUpdateAccess = false;
        $this->testUpdateAfterAccess = false;
    }
}
