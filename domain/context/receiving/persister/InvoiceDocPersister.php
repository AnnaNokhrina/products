<?php

namespace persister;

use InvoiceDocCreateDTO;
use vo\InvoiceDocId;

/**
 * Персистер документа счета-фактуры
 */
interface InvoiceDocPersister
{

    /**
     * @param InvoiceDocCreateDTO $dto
     * @return InvoiceDocId
     */
    public function add(InvoiceDocCreateDTO $dto): InvoiceDocId;
}