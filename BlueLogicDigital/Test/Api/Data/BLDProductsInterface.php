<?php
declare(strict_types=1);

namespace BlueLogicDigital\Test\Api\Data;

interface BLDProductsInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    const VENDOR_NOTE = 'vendor_note';
    const UDPATED_AT = 'udpated_at';
    const CREATED_AT = 'created_at';
    const SKU = 'sku';
    const BLD_PRODUCTS_ID = 'bld_products_id';
    const VENDOR_NUMBER = 'vendor_number';

    /**
     * Get bld_products_id
     * @return string|null
     */
    public function getBldProductsId();

    /**
     * Set bld_products_id
     * @param string $bldProductsId
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsInterface
     */
    public function setBldProductsId($bldProductsId);

    /**
     * Get sku
     * @return string|null
     */
    public function getSku();

    /**
     * Set sku
     * @param string $sku
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsInterface
     */
    public function setSku($sku);

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     * @param \BlueLogicDigital\Test\Api\Data\BLDProductsExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \BlueLogicDigital\Test\Api\Data\BLDProductsExtensionInterface $extensionAttributes
    );

    /**
     * Get vendor_number
     * @return string|null
     */
    public function getVendorNumber();

    /**
     * Set vendor_number
     * @param string $vendorNumber
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsInterface
     */
    public function setVendorNumber($vendorNumber);

    /**
     * Get vendor_note
     * @return string|null
     */
    public function getVendorNote();

    /**
     * Set vendor_note
     * @param string $vendorNote
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsInterface
     */
    public function setVendorNote($vendorNote);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get udpated_at
     * @return string|null
     */
    public function getUdpatedAt();

    /**
     * Set udpated_at
     * @param string $udpatedAt
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsInterface
     */
    public function setUdpatedAt($udpatedAt);
}

