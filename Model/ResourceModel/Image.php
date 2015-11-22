<?php

namespace Foggyline\Slider\Model\ResourceModel;

/**
 * Foggyline Image resource
 */
class Image extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     *
     * @return void
     */
    protected function _construct()
    {
        /* _init($mainTable, $idFieldName) */
        $this->_init('foggyline_slider_image', 'image_id');
    }
}