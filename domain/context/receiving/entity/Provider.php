<?php

/**
 * Сущность поставщика
 */
class Provider
{
    /**
     * @var ProviderId
     */
    private ProviderId $id;

    /**
     * @var string Наименование поставщика
     */
    private string $name; // vo provider name

    /**
     * @var string Адрес поставщика
     */
    private string $address; // entity address

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $createdAt;
}