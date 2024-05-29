<?php

use vo\ProductId;

/**
 * Сущность документа товара
 */
class Product
{
    /**
     * @var ProductId
     */
    private ProductId $id;

    /**
     * @var string Наименование товара
     */
    private string $name; // vo product name

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $createdAt;
}
