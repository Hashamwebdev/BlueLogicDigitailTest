<?php
declare(strict_types=1);

namespace BlueLogicDigital\Test\Controller\Adminhtml\BLDproducts;

class Delete extends \BlueLogicDigital\Test\Controller\Adminhtml\BLDproducts
{

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        // check if we know what should be deleted
        $id = $this->getRequest()->getParam('bld_products_id');
        if ($id) {
            try {
                // init model and delete
                $model = $this->_objectManager->create(\BlueLogicDigital\Test\Model\BLDProducts::class);
                $model->load($id);
                $model->delete();
                // display success message
                $this->messageManager->addSuccessMessage(__('You deleted the Bld Products.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['bld_products_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addErrorMessage(__('We can\'t find a Bld Products to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    }
}

