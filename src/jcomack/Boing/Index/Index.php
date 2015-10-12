<?php namespace jcomack\Boing\Index;

use jcomack\Boing\Client\Client;
use jcomack\Boing\Client\Request;

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

    public function create()
    {
        $request = new Request('index', 'PUT');
        $request->body();

        $this->client->send($request);
    }
}
