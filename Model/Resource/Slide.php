<?php

namespace Foggyline\Slider\Model\Resource;

/**
 * Foggyline Slide resource
 */
class Slide extends \Magento\Framework\Model\Resource\Db\AbstractDb
{
    /**
     * Define main table
     *
     * @return void
     */
    protected function _construct()
    {
        /* _init($mainTable, $idFieldName) */
        $this->_init('foggyline_slider_slide', 'slide_id');
    }
}