<?php

namespace Isobar\Grid\Api;

interface HamburgerManagementInterface
{
    /**
     * @param string $staff
     * @param int $age
     * @param string $location
     * @return \Isobar\Grid\Api\Data\HamburgerInterface
     */
    public function createUser($staff, $age, $location);


    /**
     * @param int $id
     * @param string $staff
     * @param int $age
     * @param string $location
     * @return \Isobar\Grid\Api\Data\HamburgerInterface
     */
    public function updateUser($id,$staff, $age, $location);

    /**
     * @param string $name
     * @param int $age
     * @param string $location
     * @return \Isobar\Grid\Api\Data\HamburgerInterface
     */
    public function deleteUser($id);

    /**
     * @param string $name
     * @param int $age
     * @param string $location
     * @return \Isobar\Grid\Api\Data\HamburgerInterface
     */
    public function listUser($id);


    /**
     * @param string $name
     * @param int $age
     * @param string $location
     * @return \Isobar\Grid\Api\Data\HamburgerInterface
     */
    public function listAllUser();


}
