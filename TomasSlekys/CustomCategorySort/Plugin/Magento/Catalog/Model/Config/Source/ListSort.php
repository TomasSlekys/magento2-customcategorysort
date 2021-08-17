<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace TomasSlekys\CustomCategorySort\Plugin\Magento\Catalog\Model\Config\Source;

use Magento\Catalog\Model\Config\Source\ListSort as MagentoListSort;

class ListSort
{

    /**
     * @param MagentoListSort $subject
     * @param array $result
     * @return array
     */
    public function afterToOptionArray(MagentoListSort $subject, array $result): array
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

