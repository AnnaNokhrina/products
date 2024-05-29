<?php

use persister\ProviderPersister;
use vo\ProviderId;

/**
 * Команда добавления поставщика
 */
class AddProvider
{
    public function __construct(protected ProviderCreateDTO $createDTO, protected ProviderPersister $providerPersister)
    {
    }

    public function execute(): ProviderId
    {
        return $this->providerPersister->add($this->createDTO);
    }
}