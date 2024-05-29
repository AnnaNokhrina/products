<?php

namespace persister;

use StorageCreateDTO;
use StorageId;

/**
 * Персистер поставщика
 */
interface StoragePersister
{
    /**
     * @param StorageCreateDTO $dto
     * @return StorageId
     */
    public function add(StorageCreateDTO $dto): StorageId;
}