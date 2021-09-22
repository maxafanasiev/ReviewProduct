<?php
namespace Perspective\ReviewProduct\Model\ResourceModel\Review;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Perspective\ReviewProduct\Model\Review',
            'Perspective\ReviewProduct\Model\ResourceModel\Review');
    }
}