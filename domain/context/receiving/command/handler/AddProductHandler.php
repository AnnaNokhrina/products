<?php

use persister\ProductPersister;

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