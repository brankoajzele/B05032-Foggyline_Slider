<?php

namespace Foggyline\Slider\Model;

class Slide extends \Magento\Framework\Model\AbstractModel
    implements \Foggyline\Slider\Api\Data\SlideInterface
{
    /**
     * Initialize Foggyline Slide Model
     *
     * @return void
     */
    protected function _construct()
    {
        /* _init($resourceModel) */
        $this->_init('Foggyline\Slider\Model\ResourceModel\Slide');
    }

    /**
     * Get Slide entity 'slide_id' property value
     *
     * @api
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::PROPERTY_ID);
    }

    /**
     * Set Slide entity 'slide_id' property value
     *
     * @api
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->setData(self::PROPERTY_ID, $id);
        return $this;
    }

    /**
     * Get Slide entity 'slide_id' property value
     *
     * @api
     * @return int|null
     */
    public function getSlideId()
    {
        return $this->getData(self::PROPERTY_SLIDE_ID);
    }

    /**
     * Set Slide entity 'slide_id' property value
     *
     * @api
     * @param int $slideId
     * @return $this
     */
    public function setSlideId($slideId)
    {
        $this->setData(self::PROPERTY_SLIDE_ID, $slideId);
        return $this;
    }

    /**
     * Get Slide entity 'title' property value
     *
     * @api
     * @return string|null
     */
    public function getTitle()
    {
        return $this->getData(self::PROPERTY_TITLE);
    }

    /**
     * Set Slide entity 'title' property value
     *
     * @api
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->setData(self::PROPERTY_TITLE, $title);
    }
}