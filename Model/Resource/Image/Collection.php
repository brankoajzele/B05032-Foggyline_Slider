<?php

namespace Foggyline\Slider\Model\Resource\Image;

/**
 * Foggyline images collection
 */
class Collection extends \Magento\Framework\Model\Resource\Db\Collection\AbstractCollection
{
    /**
     * Define resource model and model
     *
     * @return void
     */
    protected function _construct()
    {
        /* _init($model, $resourceModel) */
        $this->_init('Foggyline\Slider\Model\Image', 'Foggyline\Slider\Model\Resource\Image');
    }
}
