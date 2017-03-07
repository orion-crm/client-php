<?php

/*
 * (c) Studio107 <mail@studio107.ru> http://studio107.ru
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * Author: Maxim Falaleev <max@studio107.ru>
 */

namespace Orion\Component\Client\Tests;

use PHPUnit\Framework\TestCase;

class EntityTest extends TestCase
{
    public function testToArray()
    {
        $entity = new DummyEntity();
        $entity->setName('foo');
        $entity->setPrice(321);

        $this->assertSame([
            'name' => 'foo',
            'price' => 321
        ], $entity->toArray());
    }
}
