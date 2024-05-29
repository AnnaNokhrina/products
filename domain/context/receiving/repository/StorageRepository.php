<?php

use dto\StorageRDTO;

/**
 * Интерфейс репозитория товара
 */
interface StorageRepository
{
    public function get(StorageId $id): StorageRDTO;
}