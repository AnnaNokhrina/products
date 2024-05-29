<?php

use dto\StorageRDTO;

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