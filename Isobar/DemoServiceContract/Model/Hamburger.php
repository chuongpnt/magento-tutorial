<?php

namespace Isobar\DemoServiceContract\Model;


use Isobar\DemoServiceContract\Api\Data\HamburgerInterface;
use Isobar\DemoServiceContract\Model\ResourceModel\HamburgerResource as ResourceModel;
use Magento\Framework\Model\AbstractModel;

class Hamburger extends AbstractModel implements HamburgerInterface
{

    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    public function getStaffId(): ?int
    {
        // TODO: Implement getStaffId() method.
        return $this->getData(self::ID) === null ? null
            : (int)$this->getData(self::ID);
    }

    public function setStaffId(?int $id): void
    {
        // TODO: Implement setStaffId() method.
        $this->setData(self::ID, $id);
    }

    public function getStaff(): ?string
    {
        // TODO: Implement getStaff() method.
        return $this->getData(self::STAFF);
    }

    public function setStaff(?string $staff): void
    {
        // TODO: Implement setStaff() method.
        $this->setData(self::STAFF, $staff);
    }

    public function getAge(): ?int
    {
        // TODO: Implement getAge() method.
        return $this->getData(self::AGE) === null ? null
            : (int)$this->getData(self::AGE);
    }

    public function setAge(?int $age): void
    {
        // TODO: Implement setAge() method.
        $this->setData(self::AGE, $age);
    }

    public function getLocation(): ?string
    {
        // TODO: Implement getLocation() method.
        return $this->getData(self::LOCATION);
    }

    public function setLocation(?string $location): void
    {
        // TODO: Implement setLocation() method.
        $this->setData(self::LOCATION, $location);
    }


}
