<?php

/*
 * (c) Studio107 <mail@studio107.ru> http://studio107.ru
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Orion\Component\Client;

use ReflectionClass;
use ReflectionProperty;

abstract class AbstractApiEntity implements EntityInterface
{
    public function __construct(array $data = [])
    {
        foreach ($data as $key => $value) {
            $property = $this->toCamelCase($key);
            if (property_exists($this, $property)) {
                $method = sprintf("set%s", ucfirst($property));
                call_user_func([$this, $method], $value);
            }
        }
    }

    protected function toCamelCase($value)
    {
        return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $value))));
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $reflect = new ReflectionClass($this);
        $properties = $reflect->getProperties(ReflectionProperty::IS_PROTECTED);

        $array = [];
        foreach ($properties as $property) {
            $name = $property->getName();
            $value = $this->{$name};
            if ($value instanceof \DateTime) {
                $value = $value->format('Y-d-m h:m:s');
            }
            $array[$this->toSnakeCase($name)] = $value;
        }

        return $array;
    }

    private function toSnakeCase($name)
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $name));
    }
}
