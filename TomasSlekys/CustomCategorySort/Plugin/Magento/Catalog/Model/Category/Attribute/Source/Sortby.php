<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace TomasSlekys\CustomCategorySort\Plugin\Magento\Catalog\Model\Category\Attribute\Source;

use Magento\Catalog\Model\Category\Attribute\Source\Sortby as MagentoSortby;

/**
 * Sortby class
 */
class Sortby
{

    /**
     * @param MagentoSortby $subject
     * @param array $result
     * @return array
     */
    public function afterGetAllOptions(MagentoSortby $subject, array $result): array
    {
        unset($result);

        $result[] = [
            'label' => __('Lowest price'),
            'value' => 'price_lowest'
        ];

        $result[] = [
            'label' => __('Highest price'),
            'value' => 'price_highest'
        ];

        return $result;
    }
}

