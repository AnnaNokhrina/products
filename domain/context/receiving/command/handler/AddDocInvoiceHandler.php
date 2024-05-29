<?php

use event\InvoiceDocHasBeenCreated;
use persister\InvoiceDocPersister;

/**
 * Обработчик команды добавления счета-фактуры
 * Добавляет документ счет-фактуры
 * Добавляет новый продукт, если такого еще нет
 * Пушит событие о добавлении документа
 */
class AddDocInvoiceHandler
{
    public function __construct(
        InvoiceDocPersister $docPersister,
        ProductRepository   $productRepository,
        ProviderRepository  $providerRepository,
        EventDispatcher     $eventDispatcher,
    )
    {
        $docPersister->add($dto);

        if (!$providerRepository->existsProvider()) {
            new AddProvider($dtoProvider);
        }

        foreach ($products as $product) {
            if (!$productRepository->existsProduct()) {
                new AddProduct($dtoProduct);
            }
        }

        $eventDispatcher->dispatch(new InvoiceDocHasBeenCreated());
    }
}
