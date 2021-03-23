<?php

namespace MagentoSM\SampleModule\Cron;

use MagentoSM\SampleModule\Model\ItemFactory;
use MagentoSM\SampleModule\Model\Config;

class AddItem
{
    private $itemFactory;

    public function __construct(ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
    }

    public function execute()
    {
        $this->itemFactory->create()
            ->setName('Scheduled item')
            ->setDescription('Created at ' . time())
            ->save();
    }
}