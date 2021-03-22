<?php

namespace MagentoSM\SampleModule\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\MagentoSM\SampleModule\Model\ResourceModel\Item::class);
    }
}