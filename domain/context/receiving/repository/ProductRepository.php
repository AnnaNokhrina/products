<?php

use dto\ProductRDTO;

interface ProductRepository
{
   public function get(ProductId $id): ?ProductRDTO;
   public function all();
}