<?php

namespace Isobar\DemoServiceContract\Api;

interface HamburgerManagementInterface
{
    /**
     * @param string $name
     * @param int $age
     * @param string $location
     * @return \Isobar\DemoServiceContract\Api\Data\HamburgerInterface
     */
    public function createUser($name, $age, $location);

    /**
     * @param string $name
     * @param int $age
     * @param string $location
     * @return \Isobar\DemoServiceContract\Api\Data\HamburgerInterface
     */
    public function updateUser($id,$name, $age, $location);

    /**
     * @param string $name
     * @param int $age
     * @param string $location
     * @return \Isobar\DemoServiceContract\Api\Data\HamburgerInterface
     */
    public function deleteUser($id);

    /**
     * @param string $name
     * @param int $age
     * @param string $location
     * @return \Isobar\DemoServiceContract\Api\Data\HamburgerInterface
     */
    public function listUser($id);


    /**
     * @param string $name
     * @param int $age
     * @param string $location
     * @return \Isobar\DemoServiceContract\Api\Data\HamburgerInterface
     */
    public function listAllUser();
}
