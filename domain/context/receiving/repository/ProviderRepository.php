<?php

/**
 * Интерфейс репозитория товара
 */
interface ProviderRepository
{
    public function get(ProviderId $id): ProviderRDTO;
}