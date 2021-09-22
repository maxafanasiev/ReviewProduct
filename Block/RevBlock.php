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
}
