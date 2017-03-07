<?php

/*
 * (c) Studio107 <mail@studio107.ru> http://studio107.ru
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * Author: Maxim Falaleev <max@studio107.ru>
 */

namespace Orion\Component\Client\Tests;

use Orion\Component\Client\AbstractApiEntity;

class DummyEntity extends AbstractApiEntity
{
    protected $name;
    protected $price;

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'foo/bar';
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}

class EntityTest extends \Framework_TestCaseTest
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
