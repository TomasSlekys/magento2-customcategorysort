<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace TomasSlekys\CustomCategorySort\Plugin\Magento\Catalog\Model;

use Magento\Catalog\Block\Product\ProductList\Toolbar as MagentoToolbar;
use Magento\Catalog\Model\Layer as MagentoLayer;
use Magento\Catalog\Model\ResourceModel\Product\Collection as ProductCollection;
use Magento\Framework\Api\SortOrder;

/**
 * Layer class
 */
class Layer
{
    /** @var MagentoToolbar */
    private $toolbar;

    /**
     * Layer constructor.
     * @param MagentoToolbar $toolbar
     */
    public function __construct(
        MagentoToolbar $toolbar
    ) {
        $this->toolbar = $toolbar;
    }

    /**
     * @param MagentoLayer $subject
     * @param ProductCollection $collection
     * @return array
     */
    public function beforePrepareProductCollection(MagentoLayer $subject, ProductCollection $collection): array
    {
        $currentOrder = $this->toolbar->getCurrentOrder();

        switch ($currentOrder) {
            case 'price_lowest':
                $collection->setOrder('price', 'asc');
                break;
            case 'price_highest':
                $collection->setOrder('price', 'desc');
                break;
        }

        return [$collection];
    }
}

