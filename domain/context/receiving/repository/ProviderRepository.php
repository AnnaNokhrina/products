<?php

use vo\ProviderId;

/**
 * Интерфейс репозитория товара
 */
interface ProviderRepository
{
    public function get(ProviderId $id): ProviderRDTO;
}