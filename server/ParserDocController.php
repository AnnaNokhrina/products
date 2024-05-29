<?php

/**
 * Контроллер загрузки документов
 */
class ParserDocController
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