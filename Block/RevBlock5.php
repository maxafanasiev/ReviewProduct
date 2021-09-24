<?php
namespace Perspective\ReviewProduct\Block;

class RevBlock5 extends \Magento\Framework\View\Element\Template
{
    protected $productCollectionFactory;
    protected $productImageHelper;
    protected $categoryFactory;
    protected $productRepository;
    protected $reviewCollectionFactory;

    public function __construct(
        \Magento\Catalog\Helper\Image                                           $productImageHelper,
        \Perspective\ReviewProduct\Model\ResourceModel\Review\CollectionFactory $reviewCollectionFactory,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory          $productCollectionFactory,
        \Magento\Catalog\Model\CategoryFactory                                  $categoryFactory,
        \Magento\Catalog\Model\ProductRepository                                $productRepository,
        \Magento\Backend\Block\Template\Context                                 $context,
        array                                                                   $data = []
    )
    {
        $this->productImageHelper = $productImageHelper;
        $this->reviewCollectionFactory = $reviewCollectionFactory;
        $this->categoryFactory = $categoryFactory;
        $this->productRepository = $productRepository;
        parent::__construct($context, $data);
    }

    public function getImageUrl($product, $imageId, $attributes = [])
    {
        return $this->productImageHelper->init($product, $imageId, $attributes)->getUrl();
    }

    public function getReviewCollectionFromCategory()
    {
        $category = $this->getCategoryId();
        $collection = $this->reviewCollectionFactory->create();
        $collection->addFieldToSelect('*')->addFieldToFilter('category_id', ['eq' => $category]);
        return $collection;
    }

    public function getProductById($id)
    {
        return $this->productRepository->getById($id);
    }

    private function getCategoryId()
    {
        return [19];
    }

}