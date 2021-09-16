<?php
declare(strict_types=1);

namespace BlueLogicDigital\Test\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class DisplayDisclaimer extends \Magento\Framework\View\Element\Template
{
    protected $scopeConfig;

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function showDisclaimer()
    {
        return $this->scopeConfig->getValue('test/general/show_disclaimer', ScopeInterface::SCOPE_STORE);
    }

    public function displayDisclaimer()
    {
        return $this->scopeConfig->getValue('test/general/product_disclaimer', ScopeInterface::SCOPE_STORE);
    }
}

