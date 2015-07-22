<?php

namespace Foggyline\Slider\Api\Data;

/**
 * Slide interface.
 */
interface SlideInterface
{
    const PROPERTY_ID = 'slide_id';
    const PROPERTY_SLIDE_ID = 'slide_id';
    const PROPERTY_TITLE = 'title';

    /**
     * Get Slide entity 'slide_id' property value
     *
     * @api
     * @return int|null
     */
    public function getId();

    /**
     * Set Slide entity 'slide_id' property value
     *
     * @api
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Get Slide entity 'slide_id' property value
     *
     * @api
     * @return int|null
     */
    public function getSlideId();

    /**
     * Set Slide entity 'slide_id' property value
     *
     * @api
     * @param int $slideId
     * @return $this
     */
    public function setSlideId($slideId);

    /**
     * Get Slide entity 'title' property value
     *
     * @api
     * @return string|null
     */
    public function getTitle();

    /**
     * Set Slide entity 'title' property value
     *
     * @api
     * @param string $title
     * @return $this
     */
    public function setTitle($title);
}
