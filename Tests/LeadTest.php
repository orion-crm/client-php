<?php

/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Orion\Component\Client\Tests;

use Orion\Component\Client\Lead;

class LeadTest extends \PHPUnit_Framework_TestCase
{
    public function testLead()
    {
        $lead = new Lead([
            'name' => 'test',
            'request_id' => 11
        ]);
        $this->assertSame('lead', $lead->getEndpoint());
        $this->assertSame([
            'name' => 'test',
            'phone' => null,
            'email' => null,
            'contact' => null,
            'contact_id' => null,
            'price' => null,
            'is_done' => null,
            'client_id' => null,
            'requisite_id' => null,
            'pipeline_step_id' => null,
            'source' => null,
            'request_id' => 11,
        ], $lead->toArray());
    }
}
