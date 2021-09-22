<?php

namespace Perspective\ReviewProduct\Setup;
class InstallSchema implements
    \Magento\Framework\Setup\InstallSchemaInterface
{
    public function install
    (\Magento\Framework\Setup\SchemaSetupInterface   $setup,
     \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        if (!$installer->tableExists
        ('perspective_product_review')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable
                ('perspective_product_review')
            )
                ->addColumn(
                    'review_id',
                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'nullable' => false,
                        'primary' => true,
                        'unsigned' => true,
                    ],
                    'Review ID'
                )
                ->addColumn(
                    'category_id',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    255,
                    [],
                    'Category ID'
                )
                ->addColumn(
                    'product_id',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    255,
                    [],
                    'Product ID'
                )
                ->addColumn(
                    'text_review',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    '64k',
                    [],
                    'Review Content')
                ->addColumn(
                    'review_date',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false,
                        'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
                    'Created At'
                )
                ->addColumn(
                    'name',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    255,
                    [],
                    'Customer Name'
                )
                ->addColumn(
                    'email',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    255,
                    [],
                    'Customer Email'
                )
                ->setComment('Post Table');
            $installer->getConnection()->createTable
            ($table);
            $installer->getConnection()->addIndex(
                $installer->getTable
                ('perspective_product_review'),
                $setup->getIdxName(
                    $installer->getTable('perspective_product_review'),
                    ['text_review', 'name','email'],
                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
                ),
                ['text_review', 'name','email'],
                \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
            );
        }
        $installer->endSetup();
    }
}