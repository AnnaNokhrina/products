<?php

/**
 * Сущность операции хранения
 */
class Storage
{
    /**
     * @var StorageId
     */
    private StorageId $id;

    /**
     * @var StockId Склад
     */
    private StockId $stockId;

    /**
     * @var ProductId Продукт
     */
    private ProductId $productId;

    /**
     * @var int Кол-во товаров в операции
     */
    private int $count;

    /**
     * @var Actor Инициатор операции
     */
    private Actor $actor;

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $createdAt;
}