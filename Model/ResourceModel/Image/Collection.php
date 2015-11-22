<?php

namespace Foggyline\Slider\Model\ResourceModel\Image;

/**
 * Foggyline images collection
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
        $this->_init('Foggyline\Slider\Model\Image', 'Foggyline\Slider\Model\ResourceModel\Image');
    }
}
