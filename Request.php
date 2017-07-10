<?php

/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Orion\Component\Client;

class Request extends AbstractApiEntity
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string|array
     */
    protected $data;

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'request';
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return array|string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array|string $data
     */
    public function setData($data)
    {
        if (is_array($data)) {
            $data = json_encode($data);
        } else if ($data instanceof AbstractApiEntity) {
            $data = $data->toArray();
        }
        $this->data = $data;
    }
}