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
            'type' => 'test',
            'data' => ['foo' => 'bar']
        ]);
        $this->assertSame('request', $request->getEndpoint());
        $this->assertSame([
            'type' => 'test',
            'data' => '{"foo":"bar"}',
        ], $request->toArray());
    }
}