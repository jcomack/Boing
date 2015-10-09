<?php namespace jcomack\Boing\Index;

use jcomack\Boing\Client\Client;

/**
 * Class Index
 * @package jcomack\Boing\Index
 */
class Index
{

    /**
     * @var Client
     */
    private $client;

    /** @var string */
    private $name;

    public function __construct(Client $client, $name)
    {
        $this->client = $client;
        $this->name = $name;
    }
}
