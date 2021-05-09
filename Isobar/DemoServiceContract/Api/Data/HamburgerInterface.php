<?php

namespace Isobar\DemoServiceContract\Api\Data;

interface HamburgerInterface
{
    /**
     * String constants for property names
     */
    const ID = "id";
    const STAFF = "staff";
    const AGE = "age";
    const LOCATION = "location";

    /**
     * @return mixed
     */
    public function getStaffId(): ?int;

    /**
     * Setter for setStaffId.
     *
     * @param int|null $id
     *
     * @return void
     */
    public function setStaffId(?int $id): void;

    /**
     * @return string
     */
    public function getStaff(): ?string;

    /**
     * @param string $staff
     * @return void
     */
    public function setStaff(?string $staff): void;

    /**
     * @return int
     */
    public function getAge(): ?int;

    /**
     * @param number $age
     * @return void
     */
    public function setAge(?int $age): void;
    /**
     * @return string
     */
    public function getLocation(): ?string;

    /**
     * @param string $location
     * @return void
     */
    public function setLocation(?string $location): void;


}
