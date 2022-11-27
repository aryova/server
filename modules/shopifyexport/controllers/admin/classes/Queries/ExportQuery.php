<?php

namespace ShopifyExport\Queries;


interface ExportQuery
{
    /**
     * @param int $shopId
     * @param int $languageId
     * @return iterable
     * @throws QueryException
     */
    public function execute($shopId, $languageId);
}