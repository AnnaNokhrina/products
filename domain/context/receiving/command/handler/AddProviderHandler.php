<?php

use persister\ProviderPersister;
use vo\ProviderId;

/**
 * Обработчик команды добавления поставщика
 */
class AddProviderHandler
{
    public function __construct(protected ProviderPersister $providerPersister)
    {
    }

    public function execute(): ProviderId
    {
        return $this->providerPersister->add($dto);
    }
}