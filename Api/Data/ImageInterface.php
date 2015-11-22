<?php

namespace Foggyline\Slider\Api\Data;

/**
 * @api
 */
interface ImageInterface
{
    const PROPERTY_ID = 'image_id';
    const PROPERTY_IMAGE_ID = 'image_id';
    const PROPERTY_SLIDE_ID = 'slide_id';
    const PROPERTY_PATH = 'path';

    /**
     * Get Image entity 'image_id' property value
     * @return int|null
     */
    public function getId();

    /**
     * Set Image entity 'image_id' property value
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Get Image entity 'image_id' property value
     * @return int|null
     */
    public function getImageId();

    /**
     * Set Image entity 'image_id' property value
     * @param int $imageId
     * @return $this
     */
    public function setImageId($imageId);

    /**
     * Get Image entity 'slide_id' property value
     * @return int|null
     */
    public function getSlideId();

    /**
     * Set Image entity 'slide_id' property value
     * @param int $slideId
     * @return $this
     */
    public function setSlideId($slideId);

    /**
     * Get Image entity 'path' property value
     * @return string|null
     */
    public function getPath();

    /**
     * Set Image entity 'path' property value
     * @param string $path
     * @return $this
     */
    public function setPath($path);
}
