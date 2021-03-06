<?php

/*
 * (c) Studio107 <mail@studio107.ru> http://studio107.ru
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Orion\Component\Client;

use Psr\Http\Message\ResponseInterface;

class Result
{
    /**
     * @var ResponseInterface
     */
    protected $response;

    /**
     * Result constructor.
     *
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
        return $status >= 200 && $status < 300;
    }

    /**
     * @return bool
     */
    public function getError()
    {
        $jsonBody = $this->json();
        return $jsonBody['error'];
    }

    /**
     * @return ResponseInterface
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return array
     */
    public function json()
    {
        return json_decode($this->response->getBody(), true);
    }

    /**
     * @return int|string
     */
    public function getId()
    {
        $jsonBody = $this->json();
        if (isset($jsonBody['id'])) {
            return $jsonBody['id'];
        }

        throw new \LogicException('Id is null or missing');
    }
}
