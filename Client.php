<?php

/*
 * (c) Studio107 <mail@studio107.ru> http://studio107.ru
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Orion\Component\Client;

use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Request;

class Client
{
    /**
     * @var string
     */
    protected $host = 'https://orion-crm.ru';
    /**
     * @var string
     */
    protected $version = 'v1';
    /**
     * @var string
     */
    protected $token = '';
    /**
     * @var string
     */
    protected $headerKey = 'X-AUTH-TOKEN';

    /**
     * Client constructor.
     *
     * @param $parameters array
     */
    public function __construct(array $parameters = [])
    {
        foreach ($parameters as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    /**
     * @return \GuzzleHttp\Client
     */
    protected function getClient()
    {
        return new \GuzzleHttp\Client([
            'headers' => [
                'content-type' => 'application/json',
                $this->headerKey => $this->token,
            ]
        ]);
    }

    /**
     * @param EntityInterface $entity
     * @return string
     */
    protected function getAbsoluteUrl(EntityInterface $entity)
    {
        return sprintf("%s/api/%s/%s", $this->host, $this->version, $entity->getEndpoint());
    }

    /**
     * @param EntityInterface $entity
     *
     * @return Result
     */
    public function send(EntityInterface $entity)
    {
        $client = $this->getClient();

        try {
            $response = $client->post($this->getAbsoluteUrl($entity), [
                'body' => json_encode($entity->toArray())
            ]);
        } catch (ServerException $e) {
            $response = $e->getResponse();
        }

        return new Result($response);
    }
}
