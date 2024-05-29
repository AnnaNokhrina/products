<?php

use persister\ProductPersister;

/**
 * Команда добавления товара
 */
class AddProduct
{
    public function __construct(protected ProductCreateDTO $dto, protected ProductPersister $productPersister)
    {
    }

    public function execute(): ProductId
    {
        return $this->productPersister->add($this->dto);
    }
}