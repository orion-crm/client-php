<?php
/**
 * Created by IntelliJ IDEA.
 * User: maxim
 * Date: 14/11/2017
 * Time: 18:35
 */

namespace Orion\Component\Client;

use Psr\Http\Message\ResponseInterface;

class ApiResult
{
    /**
     * @var ResponseInterface
     */
    protected $response;

    /**
     * ApiResult constructor.
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        $status = $this->response->getStatusCode();
        return $status < 400 && $status > 200;
    }

    /**
     * @return string
     */
    public function json()
    {
        return \GuzzleHttp\json_decode((string)$this->response->getBody());
    }
}
