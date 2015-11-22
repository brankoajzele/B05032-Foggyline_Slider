<?php

namespace Foggyline\Slider\Model;

class Image extends \Magento\Framework\Model\AbstractModel
    implements \Foggyline\Slider\Api\Data\ImageInterface
{
    /**
     * Initialize Foggyline Image Model
     *
     * @return void
     */
    protected function _construct()
    {
        /* _init($resourceModel) */
        $this->_init('Foggyline\Slider\Model\ResourceModel\Image');
    }

    /**
     * Get Image entity 'image_id' property value
     *
     * @api
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::PROPERTY_ID);
    }

    /**
     * Set Image entity 'image_id' property value
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
     * Get Image entity 'image_id' property value
     *
     * @api
     * @return int|null
     */
    public function getImageId()
    {
        return $this->getData(self::PROPERTY_IMAGE_ID);
    }

    /**
     * Set Image entity 'image_id' property value
     *
     * @api
     * @param int $imageId
     * @return $this
     */
    public function setImageId($imageId)
    {
        $this->setData(self::PROPERTY_IMAGE_ID, $imageId);
        return $this;
    }

    /**
     * Get Image entity 'slide_id' property value
     *
     * @api
     * @return int|null
     */
    public function getSlideId()
    {
        return $this->getData(self::PROPERTY_SLIDE_ID);
    }

    /**
     * Set Image entity 'slide_id' property value
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
     * Get Image entity 'path' property value
     *
     * @api
     * @return string|null
     */
    public function getPath()
    {
        return $this->getData(self::PROPERTY_PATH);
    }

    /**
     * Set Image entity 'path' property value
     *
     * @api
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->setData(self::PROPERTY_PATH, $path);
        return $this;
    }
}