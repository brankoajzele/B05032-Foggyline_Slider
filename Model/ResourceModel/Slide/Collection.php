<?php

namespace Foggyline\Slider\Model\ResourceModel\Slide;

/**
 * Foggyline slides collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model and model
     *
     * @return void
     */
    protected function _construct()
    {
        /* _init($model, $resourceModel) */
        $this->_init('Foggyline\Slider\Model\Slide', 'Foggyline\Slider\Model\ResourceModel\Slide');
    }
}
