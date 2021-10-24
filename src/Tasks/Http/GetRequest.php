<?php

namespace Task\Tasks\Http;

use GuzzleHttp\Client;

class GetRequest
{
    private Client $client;
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function __construct($base_url)
    {
        $this->client = new Client(['base_uri' => $base_url]);

    }

    /**
     * @throws \JsonException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getResponse($url, $method = "GET")
    {
        return $this->client->request($method, $url);
    }
}