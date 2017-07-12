<?php

/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Orion\Component\Client\Tests;

use Orion\Component\Client\Request;

class RequestTest extends \PHPUnit_Framework_TestCase
{
    public function testLead()
    {
        $request = new Request([
            'request_template_id' => 1,
            'name' => 'Тест',
            'source' => 'phpunit',
            'data' => ['foo' => 'bar']
        ]);
        $this->assertSame('request', $request->getEndpoint());
        $this->assertSame([
            'data' => '{"foo":"bar"}',
            'name' => 'Тест',
            'source' => 'phpunit',
            'request_template_id' => 1,
        ], $request->toArray());
    }
}
