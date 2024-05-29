<?php

use dto\StorageRDTO;
use vo\StorageId;

/**
 * Персистер поставщика
 */
interface StoragePersister
{
    /**
     * @param StorageCreateDTO $dto
     * @return StorageId
     */
    public function add(StorageRDTO $dto): StorageId;
}