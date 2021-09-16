<?php
declare(strict_types=1);

namespace BlueLogicDigital\Test\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface BLDProductsRepositoryInterface
{

    /**
     * Save BLD_products
     * @param \BlueLogicDigital\Test\Api\Data\BLDProductsInterface $bLDProducts
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \BlueLogicDigital\Test\Api\Data\BLDProductsInterface $bLDProducts
    );

    /**
     * Retrieve BLD_products
     * @param string $bldProductsId
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($bldProductsId);

    /**
     * Retrieve BLD_products matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete BLD_products
     * @param \BlueLogicDigital\Test\Api\Data\BLDProductsInterface $bLDProducts
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \BlueLogicDigital\Test\Api\Data\BLDProductsInterface $bLDProducts
    );

    /**
     * Delete BLD_products by ID
     * @param string $bldProductsId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($bldProductsId);
}

