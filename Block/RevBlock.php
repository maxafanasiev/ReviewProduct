<?php
namespace Perspective\ReviewProduct\Block;

use Perspective\ReviewProduct\Model\ResourceModel\Review\CollectionFactory;
use Magento\Framework\View\Element\Template\Context;


class RevBlock extends \Magento\Framework\View\Element\Template
{
    protected $reviewCollectionFactory;

    public function __construct(
        Context $context,
        CollectionFactory $reviewCollectionFactory,
        array $data = []
    ) {
        $this->reviewCollectionFactory = $reviewCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getReviewCollection() {
        $collection = $this->reviewCollectionFactory->create();
        $collection->addFieldToSelect('*');
        return $collection;
    }

    public function getReviewCollectionFromTwoCategory() {
        $categories = [19,25];
        $collection = $this->reviewCollectionFactory->create();
        $collection->addFieldToSelect('*')->addFieldToFilter('category_id',['in'=>$categories] );
        return $collection;
    }

    public function getReviewCollectionForSomeProduct() {
        $productId =  1371;
        $collection = $this->reviewCollectionFactory->create();
        $collection->addFieldToSelect('*')->addFieldToFilter('product_id',['eq'=>$productId] );
        return $collection;
    }
}
