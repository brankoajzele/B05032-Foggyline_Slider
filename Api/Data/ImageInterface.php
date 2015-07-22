<?php

namespace Foggyline\Slider\Api\Data;

/**
 * Slide interface.
 */
interface ImageInterface
{
    const PROPERTY_ID = 'image_id';
    const PROPERTY_IMAGE_ID = 'image_id';
    const PROPERTY_SLIDE_ID = 'slide_id';
    const PROPERTY_PATH = 'path';

    /**
     * Get Image entity 'image_id' property value
     *
     * @api
     * @return int|null
     */
    public function getId();

    /**
     * Set Image entity 'image_id' property value
     *
     * @api
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Get Image entity 'image_id' property value
     *
     * @api
     * @return int|null
     */
    public function getImageId();

    /**
     * Set Image entity 'image_id' property value
     *
     * @api
     * @param int $imageId
     * @return $this
     */
    public function setImageId($imageId);

    /**
     * Get Image entity 'slide_id' property value
     *
     * @api
     * @return int|null
     */
    public function getSlideId();

    /**
     * Set Image entity 'slide_id' property value
     *
     * @api
     * @param int $slideId
     * @return $this
     */
    public function setSlideId($slideId);

    /**
     * Get Image entity 'path' property value
     *
     * @api
     * @return string|null
     */
    public function getPath();

    /**
     * Set Image entity 'path' property value
     *
     * @api
     * @param string $path
     * @return $this
     */
    public function setPath($path);
}
