<?php

/*
 * (c) Studio107 <mail@studio107.ru> http://studio107.ru
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * Author: Maxim Falaleev <max@studio107.ru>
 */

namespace Orion\Component\Client;

class Issue extends AbstractApiEntity
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'issue';
    }
}
