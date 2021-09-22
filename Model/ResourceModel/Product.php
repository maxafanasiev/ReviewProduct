<?php
namespace Perspective\ReviewProduct\Model\ResourceModel;
class Product extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context
        $context
    ) {
        parent::__construct($context);
    }
    protected function _construct()
    {
        $this->_init('perspective_product_review', 'product_id');
    }
}