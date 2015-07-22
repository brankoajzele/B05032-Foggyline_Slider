<?php

namespace Foggyline\Slider\Api;

/**
 * Image CRUD interface.
 */
interface ImageRepositoryInterface
{
    /**
     * Retrieve image entity.
     *
     * @api
     * @param int $imageId
     * @return \Foggyline\Slider\Api\Data\ImageInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If image with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($imageId);

    /**
     * Save image.
     *
     * @param \Foggyline\Slider\Api\Data\ImageInterface $image
     * @return \Foggyline\Slider\Api\Data\ImageInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\Foggyline\Slider\Api\Data\ImageInterface $image);

    /**
     * Retrieve images matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Framework\Api\SearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}
