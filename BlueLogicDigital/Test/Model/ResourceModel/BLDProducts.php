<?php
declare(strict_types=1);

namespace BlueLogicDigital\Test\Model\ResourceModel;

class BLDProducts extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('bluelogicdigital_test_bld_products', 'bld_products_id');
    }
}

