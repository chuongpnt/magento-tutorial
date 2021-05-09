<?php

namespace Isobar\Grid\Controller\Adminhtml\Data;

use Isobar\Grid\Model\Hamburger;

class MassDelete extends MassAction
{
    /**
     * @param Hamburger $data
     * @return $this
     */
    protected function massAction(Hamburger $data)
    {
        $this->dataRepository->delete($data);
        return $this;
    }
}
