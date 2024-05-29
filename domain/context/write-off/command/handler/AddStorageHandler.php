<?php

use vo\StorageId;


/**
 * Обработчик команды добавления операции хранения
 */
class AddStorageHandler
{
    public function __construct(protected StoragePersister $storagePersister)
    {
    }

    public function execute(): StorageId
    {
        return $this->storagePersister->add($dto);
    }
}