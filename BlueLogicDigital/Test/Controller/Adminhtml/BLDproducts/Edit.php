<?php
declare(strict_types=1);

namespace BlueLogicDigital\Test\Controller\Adminhtml\BLDproducts;

class Edit extends \BlueLogicDigital\Test\Controller\Adminhtml\BLDproducts
{

    protected $resultPageFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context, $coreRegistry);
    }

    /**
     * Edit action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        // 1. Get ID and create model
        $id = $this->getRequest()->getParam('bld_products_id');
        $model = $this->_objectManager->create(\BlueLogicDigital\Test\Model\BLDProducts::class);
        
        // 2. Initial checking
        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addErrorMessage(__('This Bld Products no longer exists.'));
                /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }
        $this->_coreRegistry->register('bluelogicdigital_test_bld_products', $model);
        
        // 3. Build edit form
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $this->initPage($resultPage)->addBreadcrumb(
            $id ? __('Edit Bld Products') : __('New Bld Products'),
            $id ? __('Edit Bld Products') : __('New Bld Products')
        );
        $resultPage->getConfig()->getTitle()->prepend(__('Bld Productss'));
        $resultPage->getConfig()->getTitle()->prepend($model->getId() ? __('Edit Bld Products %1', $model->getId()) : __('New Bld Products'));
        return $resultPage;
    }
}

