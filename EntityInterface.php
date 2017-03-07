<?php

/*
 * (c) Studio107 <mail@studio107.ru> http://studio107.ru
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Orion\Component\Client;

interface EntityInterface
{
    /**
     * @return array
     */
    public function toArray();

    /**
     * @return string
     */
    public function getEndpoint();
}
