<?php

use dto\StorageRDTO;
use vo\StorageId;

/**
 * Интерфейс репозитория товара
 */
interface StorageRepository
{
    public function get(StorageId $id): StorageRDTO;
}