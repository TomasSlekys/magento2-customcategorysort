<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace TomasSlekys\CustomCategorySort\Plugin\Magento\Elasticsearch\Model\ResourceModel\Fulltext\Collection;

/**
 * SearchCriteriaResolver class
 */
class SearchCriteriaResolver
{

    /**
     * @param \Magento\Elasticsearch\Model\ResourceModel\Fulltext\Collection\SearchCriteriaResolver $subject
     * @param $result
     * @return mixed
     */
    public function afterResolve(
        \Magento\Elasticsearch\Model\ResourceModel\Fulltext\Collection\SearchCriteriaResolver $subject,
        $result
    ) {
        $sortOrders = $result->getSortOrders();

        unset($sortOrders['price_lowest']);
        unset($sortOrders['price_highest']);

        $result->setSortOrders($sortOrders);

        return $result;
    }
}

