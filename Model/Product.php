<?php
namespace Perspective\ReviewProduct\Model;
class Product extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Perspective\ReviewProduct\Model\ResourceModel\Product');
    }
}