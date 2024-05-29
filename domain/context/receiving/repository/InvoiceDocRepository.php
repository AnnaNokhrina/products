<?php

use vo\InvoiceDocId;

/**
 * Интерфейс репозитория счета-фактуры
 */
interface InvoiceDocRepository
{
    public function get(InvoiceDocId $id): InvoiceDocRDTO;
}