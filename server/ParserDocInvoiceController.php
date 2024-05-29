<?php

/**
 * Контроллер загрузки документов
 */
class ParserDocInvoiceController
{
    public function add()
    {
        // get // post // validation
        $serverRequest->getParsedBody();

        new AddInvoiceDoc(
            new InvoiceDocCreateDTO()
        );
    }
}