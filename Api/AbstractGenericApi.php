<?php
/**
 * Created by IntelliJ IDEA.
 * User: maxim
 * Date: 21/11/2017
 * Time: 18:24
 */

namespace Orion\Component\Client\Api;

use GuzzleHttp\Psr7\Request;

abstract class AbstractGenericApi extends AbstractApi
{
    abstract public function getPrefix(): string;

    /**
     * @param array $data
     * @return array|object
     */
    public function create(array $data)
    {
        $uri = $this->buildUrl($this->getPrefix());
        return $this->sendJson(new Request('POST', $uri, [], \GuzzleHttp\json_encode($data)));
    }

    /**
     * @param $id
     * @return array|object
     */
    public function get($id)
    {
        $uri = $this->buildUrl($this->getPrefix(), $id);
        return $this->sendJson(new Request('GET', $uri));
    }

    /**
     * @return array|object
     */
    public function list()
    {
        $uri = $this->buildUrl($this->getPrefix());
        return $this->sendJson(new Request('GET', $uri));
    }

    /**
     * @param $id
     * @param array $data
     * @return array|object
     */
    public function update($id, array $data)
    {
        $uri = $this->buildUrl($this->getPrefix(), $id);
        return $this->sendJson(new Request('PUT', $uri, [], \GuzzleHttp\json_encode($data)));
    }

    /**
     * @param $id
     * @return array|object
     */
    public function delete($id)
    {
        $uri = $this->buildUrl($this->getPrefix(), $id);
        return $this->sendJson(new Request('DELETE', $uri));
    }
}
