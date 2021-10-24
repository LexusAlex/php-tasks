<?php

namespace Test\Tasks\Http;

use PHPUnit\Framework\TestCase;
use Task\Tasks\Http\GetRequest;

class GetRequestTest extends TestCase
{
    /**
     * @throws \JsonException
     */
    public function testSuccess()
    {
        $client = new GetRequest('https://httpbin.org');
        $response = $client->getResponse('/get');

        self::assertEquals("200", $response->getStatusCode());
        self::assertEquals("OK", $response->getReasonPhrase());
    }

    public function testParams()
    {
        $client = new GetRequest('https://httpbin.org');
        $response = $client->getResponse('/get?param1=var1&param2=var2&param3=var3');
        $data = json_decode((string)$response->getBody(), true, 512, JSON_THROW_ON_ERROR);
        self::assertArrayHasKey('param3', $data['args']);
    }
}