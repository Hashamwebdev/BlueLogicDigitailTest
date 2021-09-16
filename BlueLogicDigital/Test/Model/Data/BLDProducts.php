<?php
declare(strict_types=1);

namespace BlueLogicDigital\Test\Model\Data;

use BlueLogicDigital\Test\Api\Data\BLDProductsInterface;

class BLDProducts extends \Magento\Framework\Api\AbstractExtensibleObject implements BLDProductsInterface
{

    /**
     * Get bld_products_id
     * @return string|null
     */
    public function getBldProductsId()
    {
        return $this->_get(self::BLD_PRODUCTS_ID);
    }

    /**
     * Set bld_products_id
     * @param string $bldProductsId
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsInterface
     */
    public function setBldProductsId($bldProductsId)
    {
        return $this->setData(self::BLD_PRODUCTS_ID, $bldProductsId);
    }

    /**
     * Get sku
     * @return string|null
     */
    public function getSku()
    {
        return $this->_get(self::SKU);
    }

    /**
     * Set sku
     * @param string $sku
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsInterface
     */
    public function setSku($sku)
    {
        return $this->setData(self::SKU, $sku);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param \BlueLogicDigital\Test\Api\Data\BLDProductsExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \BlueLogicDigital\Test\Api\Data\BLDProductsExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }

    /**
     * Get vendor_number
     * @return string|null
     */
    public function getVendorNumber()
    {
        return $this->_get(self::VENDOR_NUMBER);
    }

    /**
     * Set vendor_number
     * @param string $vendorNumber
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsInterface
     */
    public function setVendorNumber($vendorNumber)
    {
        return $this->setData(self::VENDOR_NUMBER, $vendorNumber);
    }

    /**
     * Get vendor_note
     * @return string|null
     */
    public function getVendorNote()
    {
        return $this->_get(self::VENDOR_NOTE);
    }

    /**
     * Set vendor_note
     * @param string $vendorNote
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsInterface
     */
    public function setVendorNote($vendorNote)
    {
        return $this->setData(self::VENDOR_NOTE, $vendorNote);
    }

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->_get(self::CREATED_AT);
    }

    /**
     * Set created_at
     * @param string $createdAt
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsInterface
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Get udpated_at
     * @return string|null
     */
    public function getUdpatedAt()
    {
        return $this->_get(self::UDPATED_AT);
    }

    /**
     * Set udpated_at
     * @param string $udpatedAt
     * @return \BlueLogicDigital\Test\Api\Data\BLDProductsInterface
     */
    public function setUdpatedAt($udpatedAt)
    {
        return $this->setData(self::UDPATED_AT, $udpatedAt);
    }
}

