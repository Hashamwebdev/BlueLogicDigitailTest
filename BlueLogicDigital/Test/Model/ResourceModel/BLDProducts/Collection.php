<?php
declare(strict_types=1);

namespace BlueLogicDigital\Test\Model\ResourceModel\BLDProducts;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'bld_products_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \BlueLogicDigital\Test\Model\BLDProducts::class,
            \BlueLogicDigital\Test\Model\ResourceModel\BLDProducts::class
        );
    }
}

