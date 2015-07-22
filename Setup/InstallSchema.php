<?php

namespace Foggyline\Slider\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        /**
         * Create table 'foggyline_slider_slide'
         */
        $table = $installer->getConnection()
            ->newTable($installer->getTable('foggyline_slider_slide'))
            ->addColumn(
                'slide_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Slide Id'
            )
            ->addColumn(
                'title',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                200,
                [],
                'Title'
            )
            ->setComment('Foggyline Slider Slide');
        $installer->getConnection()->createTable($table);

        /**
         * Create table 'foggyline_slider_image'
         */
        $table = $installer->getConnection()
            ->newTable($installer->getTable('foggyline_slider_image'))
            ->addColumn(
                'image_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Slide Id'
            )
            ->addColumn(
                'slide_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable' => false],
                'Slide Id'
            )
            ->addColumn(
                'path',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                200,
                [],
                'Image path'
            )
            ->addForeignKey(
                $installer->getFkName('foggyline_slider_image', 'slide_id', 'foggyline_slider_slide', 'slide_id'),
                'slide_id',
                $installer->getTable('foggyline_slider_slide'),
                'slide_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )
            ->setComment('Foggyline Slider Image');
        $installer->getConnection()->createTable($table);

        $installer->endSetup();

    }
}
