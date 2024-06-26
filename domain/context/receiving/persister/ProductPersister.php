<?php

namespace persister;

use ProductCreateDTO;
use vo\ProductId;

/**
 * Персистер товара
 */
interface ProductPersister
{
    /**
     * @param ProductCreateDTO $dto
     * @return ProductId
     */
    public function add(ProductCreateDTO $dto): ProductId;
}