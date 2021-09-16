<?php
declare(strict_types=1);

namespace BlueLogicDigital\Test\Model;

use BlueLogicDigital\Test\Api\BLDProductsRepositoryInterface;
use BlueLogicDigital\Test\Api\Data\BLDProductsInterfaceFactory;
use BlueLogicDigital\Test\Api\Data\BLDProductsSearchResultsInterfaceFactory;
use BlueLogicDigital\Test\Model\ResourceModel\BLDProducts as ResourceBLDProducts;
use BlueLogicDigital\Test\Model\ResourceModel\BLDProducts\CollectionFactory as BLDProductsCollectionFactory;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Api\ExtensibleDataObjectConverter;
use Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Reflection\DataObjectProcessor;
use Magento\Store\Model\StoreManagerInterface;

class BLDProductsRepository implements BLDProductsRepositoryInterface
{

    protected $resource;

    protected $extensibleDataObjectConverter;
    protected $searchResultsFactory;

    protected $bLDProductsFactory;

    protected $dataBLDProductsFactory;

    private $storeManager;

    protected $dataObjectHelper;

    protected $bLDProductsCollectionFactory;

    protected $dataObjectProcessor;

    protected $extensionAttributesJoinProcessor;

    private $collectionProcessor;


    /**
     * @param ResourceBLDProducts $resource
     * @param BLDProductsFactory $bLDProductsFactory
     * @param BLDProductsInterfaceFactory $dataBLDProductsFactory
     * @param BLDProductsCollectionFactory $bLDProductsCollectionFactory
     * @param BLDProductsSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     * @param CollectionProcessorInterface $collectionProcessor
     * @param JoinProcessorInterface $extensionAttributesJoinProcessor
     * @param ExtensibleDataObjectConverter $extensibleDataObjectConverter
     */
    public function __construct(
        ResourceBLDProducts $resource,
        BLDProductsFactory $bLDProductsFactory,
        BLDProductsInterfaceFactory $dataBLDProductsFactory,
        BLDProductsCollectionFactory $bLDProductsCollectionFactory,
        BLDProductsSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager,
        CollectionProcessorInterface $collectionProcessor,
        JoinProcessorInterface $extensionAttributesJoinProcessor,
        ExtensibleDataObjectConverter $extensibleDataObjectConverter
    ) {
        $this->resource = $resource;
        $this->bLDProductsFactory = $bLDProductsFactory;
        $this->bLDProductsCollectionFactory = $bLDProductsCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataBLDProductsFactory = $dataBLDProductsFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
        $this->collectionProcessor = $collectionProcessor;
        $this->extensionAttributesJoinProcessor = $extensionAttributesJoinProcessor;
        $this->extensibleDataObjectConverter = $extensibleDataObjectConverter;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        \BlueLogicDigital\Test\Api\Data\BLDProductsInterface $bLDProducts
    ) {
        /* if (empty($bLDProducts->getStoreId())) {
            $storeId = $this->storeManager->getStore()->getId();
            $bLDProducts->setStoreId($storeId);
        } */
        
        $bLDProductsData = $this->extensibleDataObjectConverter->toNestedArray(
            $bLDProducts,
            [],
            \BlueLogicDigital\Test\Api\Data\BLDProductsInterface::class
        );
        
        $bLDProductsModel = $this->bLDProductsFactory->create()->setData($bLDProductsData);
        
        try {
            $this->resource->save($bLDProductsModel);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the bLDProducts: %1',
                $exception->getMessage()
            ));
        }
        return $bLDProductsModel->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function get($bLDProductsId)
    {
        $bLDProducts = $this->bLDProductsFactory->create();
        $this->resource->load($bLDProducts, $bLDProductsId);
        if (!$bLDProducts->getId()) {
            throw new NoSuchEntityException(__('BLD_products with id "%1" does not exist.', $bLDProductsId));
        }
        return $bLDProducts->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->bLDProductsCollectionFactory->create();
        
        $this->extensionAttributesJoinProcessor->process(
            $collection,
            \BlueLogicDigital\Test\Api\Data\BLDProductsInterface::class
        );
        
        $this->collectionProcessor->process($criteria, $collection);
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $items = [];
        foreach ($collection as $model) {
            $items[] = $model->getDataModel();
        }
        
        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(
        \BlueLogicDigital\Test\Api\Data\BLDProductsInterface $bLDProducts
    ) {
        try {
            $bLDProductsModel = $this->bLDProductsFactory->create();
            $this->resource->load($bLDProductsModel, $bLDProducts->getBldProductsId());
            $this->resource->delete($bLDProductsModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the BLD_products: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($bLDProductsId)
    {
        return $this->delete($this->get($bLDProductsId));
    }
}

