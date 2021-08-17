<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace TomasSlekys\CustomCategorySort\Plugin\Magento\Catalog\Model;

use Magento\Catalog\Model\Config as MagentoConfig;

/**
 * Config class
 */
class Config
{
    /**
     * @param MagentoConfig $subject
     * @param array $result
     * @return array
     */
    public function afterGetAttributeUsedForSortByArray(MagentoConfig $subject, array $result): array
    {
        unset($result['price']);
        unset($result['position']);
        unset($result['name']);

        $result['price_lowest'] = __('Lowest price');
        $result['price_highest'] = __('Highest price');

        return $result;
    }
}

