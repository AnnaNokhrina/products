<?php

namespace persister;

use ProviderCreateDTO;
use ProviderId;

/**
 * Персистер поставщика
 */
interface ProviderPersister
{
    public function add(ProviderCreateDTO $dto): ProviderId;
}