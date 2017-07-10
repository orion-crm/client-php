<?php

/*
 * (c) Studio107 <mail@studio107.ru> http://studio107.ru
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Orion\Component\Client;

use Exception;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;

class Client
{
    /**
     * @var string
     */
    protected $host = 'https://api.orion-crm.ru';
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
    protected $headerKey = 'Authorization';

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
    public function getGuzzleClient()
    {
        return new \GuzzleHttp\Client([
            'headers' => [
                'content-type' => 'application/json',
                $this->headerKey => sprintf("Bearer %s", $this->token),
            ]
        ]);
    }

    /**
     * @param EntityInterface $entity
     * @return string
     */
    public function getAbsoluteUrl(EntityInterface $entity)
    {
        return sprintf(
            "%s/%s/%s",
            rtrim($this->host, '/'),
            trim($this->version, '/'),
            ltrim($entity->getEndpoint(), '/')
        );
    }

    /**
     * @param EntityInterface $entity
     *
     * @return Result
     */
    public function send(EntityInterface $entity)
    {
        $client = $this->getGuzzleClient();

        try {
            $response = $client->post($this->getAbsoluteUrl($entity), [
                'body' => json_encode($entity->toArray())
            ]);
        } catch (ServerException $e) {
            $response = $e->getResponse();
        } catch (RequestException $e) {
            $response = $e->getResponse();
        }

        if (false === isset($response)) {
            $response = new Response(700);
        }

        return new Result($response);
    }
}
