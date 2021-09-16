<?php
declare(strict_types=1);

namespace BlueLogicDigital\Test\Model;

use BlueLogicDigital\Test\Api\Data\BLDProductsInterface;
use BlueLogicDigital\Test\Api\Data\BLDProductsInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;

class BLDProducts extends \Magento\Framework\Model\AbstractModel
{

    protected $_eventPrefix = 'bluelogicdigital_test_bld_products';
    protected $dataObjectHelper;

    protected $bld_productsDataFactory;


    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param BLDProductsInterfaceFactory $bld_productsDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \BlueLogicDigital\Test\Model\ResourceModel\BLDProducts $resource
     * @param \BlueLogicDigital\Test\Model\ResourceModel\BLDProducts\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        BLDProductsInterfaceFactory $bld_productsDataFactory,
        DataObjectHelper $dataObjectHelper,
        \BlueLogicDigital\Test\Model\ResourceModel\BLDProducts $resource,
        \BlueLogicDigital\Test\Model\ResourceModel\BLDProducts\Collection $resourceCollection,
        array $data = []
    ) {
        $this->bld_productsDataFactory = $bld_productsDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve bld_products model with bld_products data
     * @return BLDProductsInterface
     */
    public function getDataModel()
    {
        $bld_productsData = $this->getData();
        
        $bld_productsDataObject = $this->bld_productsDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $bld_productsDataObject,
            $bld_productsData,
            BLDProductsInterface::class
        );
        
        return $bld_productsDataObject;
    }
}

