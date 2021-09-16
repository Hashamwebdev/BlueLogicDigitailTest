<?php
declare(strict_types=1);

namespace BlueLogicDigital\Test\Api\Data;

interface BLDProductsSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get BLD_products list.
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsInterface[]
     */
    public function getItems();

    /**
     * Set sku list.
     * @param \BlueLogicDigital\Test\Api\Data\BLDProductsInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

