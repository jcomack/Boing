<?php namespace jcomack\Boing\Client;


/**
 * Class Client
 * @package jcomack\Boing\Client
 */
class Client
{
    protected $baseUri;

    /** @var \GuzzleHttp\Client */
    protected $client;
    protected $options = [];

    private $defaultUri = 'http://localhost:9200';

    public function __construct($uri = '', $options = [])
    {
        $this->setUri($uri);
        $this->setOptions($options);
    }

    protected function setupClient()
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => $this->baseUri
        ]);
    }

    private function setUri($uri)
    {
        if (empty($uri)) {
            $this->baseUri = $this->defaultUri;
        }

        $this->baseUri = $uri;

        return $this->baseUri;
    }

    private function setOptions($options)
    {
        $this->options = $options;
    }

    public function send($uri, $method = 'GET')
    {
        $request = new Request($uri, $method);

        return new Response($this->client->send($request->build()));
    }
}
