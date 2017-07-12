<?php

/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Orion\Component\Client\Tests;

use Orion\Component\Client\RequestTemplate;

class RequestTemplateTest extends \PHPUnit_Framework_TestCase
{
    public function testLead()
    {
        $requestTemplate = new RequestTemplate([
            'type' => 'test',
            'template' => '{{ foo }} bar',
            'email' => ['foo@bar.com']
        ]);
        $this->assertSame('request_template', $requestTemplate->getEndpoint());
        $this->assertSame([
            'template' => '{{ foo }} bar',
            'type' => 'test',
            'email' => ['foo@bar.com']
        ], $requestTemplate->toArray());
    }
}
