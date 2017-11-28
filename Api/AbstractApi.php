<?php
/**
 * Created by IntelliJ IDEA.
 * User: maxim
 * Date: 14/11/2017
 * Time: 18:07
 */

namespace Orion\Component\Client\Api;

use Orion\Component\Client\Factory;
use Psr\Http\Message\RequestInterface;

abstract class AbstractApi
{
    /**
     * @var Factory
     */
    protected $factory;

    /**
     * AbstractApi constructor.
     * @param Factory $factory
     */
    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->factory->getEndpoint();
    }

    /**
     * @return string
     */
    public function buildUrl()
    {
        return sprintf('%s/%s', $this->getEndpoint(), implode('/', func_get_args()));
    }

    /**
     * @param RequestInterface $request
     * @return array|object
     */
    protected function send(RequestInterface $request)
    {
        return $this->factory->send($request);
    }

    /**
     * @param RequestInterface $request
     * @return array|object
     */
    protected function sendJson(RequestInterface $request)
    {
        return $this->send($request->withHeader('Content-Type', 'application/json'));
    }
}
