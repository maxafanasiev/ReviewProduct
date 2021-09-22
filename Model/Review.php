<?php
namespace Perspective\ReviewProduct\Model;
class Review extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Perspective\ReviewProduct\Model\ResourceModel\Review');
    }
}