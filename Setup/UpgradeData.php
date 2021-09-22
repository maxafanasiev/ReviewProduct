<?php

namespace Perspective\ReviewProduct\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
    protected $reviewFactory;

    public function __construct
    (\Perspective\ReviewProduct\Model\ReviewFactory $reviewFactory)
    {
        $this->reviewFactory = $reviewFactory;
    }

    public function upgrade(ModuleDataSetupInterface $setup,
                            ModuleContextInterface   $context)
    {
        if (version_compare($context->getVersion(), '1.3.1', '<')) {
            $data1 =
                [
                    'category_id' => "19",
                    'product_id' => "1025",
                    'text_review' => "1025Text REview 1",
                    'name' => "John",
                    'email' => "John@mail.com"
                ];

            $data2 =
                [
                    'category_id' => "19",
                    'product_id' => "1025",
                    'text_review' => "1025Text REview 2",
                    'name' => "James",
                    'email' => "James@mail.com"
                ];

            $data3 =
                [
                    'category_id' => "19",
                    'product_id' => "1012",
                    'text_review' => "1012Text REview 1",
                    'name' => "Dima",
                    'email' => "Dima228@mail.com"
                ];

            $data4 =
                [
                    'category_id' => "19",
                    'product_id' => "1012",
                    'text_review' => "1012Text REview 2",
                    'name' => "Ivan",
                    'email' => "Ivan2006@mail.com"
                ];

            $data5 =
                [
                    'category_id' => "23",
                    'product_id' => "1371",
                    'text_review' => "1371Text REview 1",
                    'name' => "Serhio",
                    'email' => "SerhioM@mail.com"
                ];

            $data6 =
                [
                    'category_id' => "23",
                    'product_id' => "1371",
                    'text_review' => "1371Text REview 2",
                    'name' => "Max",
                    'email' => "max2020@mail.com"
                ];
            $data7 =
                [
                    'category_id' => "25",
                    'product_id' => "1548",
                    'text_review' => "1548Text REview 1",
                    'name' => "Helen",
                    'email' => "HelenMehelen@mail.com"
                ];
            $data8 =
                [
                    'category_id' => "25",
                    'product_id' => "1548",
                    'text_review' => "1548Text REview 2",
                    'name' => "Joe",
                    'email' => "JoeJoe@mail.com"
                ];

            $review = $this->reviewFactory->create();
            $review->addData($data1)->save();

            $review = $this->reviewFactory->create();
            $review->addData($data2)->save();

            $review = $this->reviewFactory->create();
            $review->addData($data3)->save();

            $review = $this->reviewFactory->create();
            $review->addData($data4)->save();

            $review = $this->reviewFactory->create();
            $review->addData($data5)->save();

            $review = $this->reviewFactory->create();
            $review->addData($data6)->save();

            $review = $this->reviewFactory->create();
            $review->addData($data7)->save();

            $review = $this->reviewFactory->create();
            $review->addData($data8)->save();

        }
    }
}