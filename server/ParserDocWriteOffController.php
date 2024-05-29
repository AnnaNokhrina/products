<?php

/**
 * Контроллер загрузки документов
 */
class ParserDocWriteOffController
{
    public function add()
    {
        // get // post // validation
        $serverRequest->getParsedBody();

        new AddWriteOffDoc(
            new InvoiceDocCreateDTO()
        );
    }
}