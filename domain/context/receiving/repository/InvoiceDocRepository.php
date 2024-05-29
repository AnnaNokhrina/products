<?php

/**
 * Интерфейс репозитория счета-фактуры
 */
interface InvoiceDocRepository
{
    public function get(InvoiceDocId $id): InvoiceDocRDTO;
}