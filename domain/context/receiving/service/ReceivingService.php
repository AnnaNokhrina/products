<?php

use event\InvoiceDocHasBeenCreated;

/**
 * Сервис приемки товаров
 */
class ReceivingService
{
    public function __construct(
        protected ProductRepository $productRepository,
    )
    {
    }

    /**
     * Слушает событие InvoiceDocHasBeenCreated
     */
    public function addStorage(InvoiceDocHasBeenCreated $event)
    {
        $operations =  из $event;
        foreach ($operations as $operation) {
            new AddStorage(new StorageCreateDTO());
         }

    }
}