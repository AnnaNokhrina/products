<?php

use vo\ProductId;

/**
 * Интерфейс репозитория товара
 */
interface ProductRepository
{
   public function get(ProductId $id): ?ProductRDTO;
}