<?php

use vo\InvoiceDocId;

/**
 * Сущность документа счет фактура
 */
class InvoiceDoc
{
    /**
     * @var InvoiceDocId
     */
    protected InvoiceDocId $id;

    /**
     * @var string Наименование документа
     */
    protected string $name; // vo doc name

    /**
     * @var DateTimeInterface Дата загрузки документа
     */
    protected DateTimeInterface $uploadDate;

    /**
     * @var DateTimeInterface
     */
    protected DateTimeInterface $createdAt;
}