<?php

/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Orion\Component\Client\Tests;

use GuzzleHttp\Psr7\Response;
use Orion\Component\Client\ApiClient;
use Orion\Component\Client\Lead;
use Orion\Component\Client\Result;

class DummyResponse extends Response
{

}

class ApiClientTest extends \PHPUnit_Framework_TestCase
{
    public function testClient()
    {
        $client = $this
            ->getMockBuilder(ApiClient::class)
            ->getMock();

        $client
            ->method('send')
            ->willReturn(new Result(new DummyResponse()));

        /** @var $client ApiClient */
        $result = $client->send(new Lead(['name' => 'test']));
        $this->assertInstanceOf(Result::class, $result);
    }

    public function testUrl()
    {
        $client = new ApiClient();
        $this->assertSame('https://api.orion-crm.ru/v1/lead', $client->getAbsoluteUrl(new Lead));

        $client = new ApiClient(['version' => 'v2']);
        $this->assertSame('https://api.orion-crm.ru/v2/lead', $client->getAbsoluteUrl(new Lead));

        $client = new ApiClient(['version' => 'v2', 'host' => 'http://localhost:8000//']);
        $this->assertSame('http://localhost:8000/v2/lead', $client->getAbsoluteUrl(new Lead));
    }

    public function testAuthorization()
    {
        $client = new ApiClient([
            'token' => 'foobar'
        ]);
        $guzzle = $client->getGuzzleClient();
        $this->assertSame('Bearer foobar', $guzzle->getConfig('headers')['Authorization']);
    }
}
