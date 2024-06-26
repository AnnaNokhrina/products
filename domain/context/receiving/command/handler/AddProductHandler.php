<?php

use persister\ProductPersister;
use vo\ProductId;

/**
 * Обработчик команды добавления товара
 */
class AddProductHandler
{
    public function __construct(protected ProductPersister $productPersister)
    {
    }

    public function execute(): ProductId
    {
        return $this->productPersister->add($dto);
    }
}