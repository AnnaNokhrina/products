<?php

namespace persister;

use ProviderCreateDTO;
use vo\ProviderId;

/**
 * Персистер поставщика
 */
interface ProviderPersister
{
    public function add(ProviderCreateDTO $dto): ProviderId;
}