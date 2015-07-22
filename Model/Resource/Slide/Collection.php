<?php

namespace Foggyline\Slider\Model\Resource\Slide;

/**
 * Foggyline slides collection
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
        $this->_init('Foggyline\Slider\Model\Slide', 'Foggyline\Slider\Model\Resource\Slide');
    }
}
