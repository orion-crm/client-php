<?php

/*
 * (c) Studio107 <mail@studio107.ru> http://studio107.ru
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Orion\Component\Client;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use Orion\Component\Client\Entity\EntityInterface;

class ApiClient
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
     * @param array $headers
     * @return \GuzzleHttp\Client
     */
    public function getGuzzleClient(array $headers = ['content-type' => 'application/json'])
    {
        return new \GuzzleHttp\Client([
            'headers' => array_merge($headers, [
                $this->headerKey => sprintf("Bearer %s", $this->token),
            ])
        ]);
    }

    /**
     * @param EntityInterface|string $entity
     * @param null $id
     * @return string
     */
    public function getAbsoluteUrl($entity, $id = null)
    {
        $endpoint = $entity instanceof EntityInterface ? $entity->getEndpoint() : $entity;

        $url = sprintf(
            "%s/%s/%s",
            rtrim($this->host, '/'),
            trim($this->version, '/'),
            ltrim($endpoint, '/')
        );

        return $id ? sprintf("%s/%s", $url, $id) : $url;
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

    /**
     * @param string $entity
     * @param array $data
     * @return Result
     */
    public function create($entity, array $data)
    {
        $client = $this->getGuzzleClient();

        try {
            $response = $client->post($this->getAbsoluteUrl($entity), [
                'body' => json_encode($data)
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

    public function delete($entity, $id)
    {
        $client = $this->getGuzzleClient();

        try {
            $response = $client->delete($this->getAbsoluteUrl($entity), [
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

    public function update($entity, $id, array $data)
    {
        $client = $this->getGuzzleClient();

        try {
            $response = $client->put($this->getAbsoluteUrl($entity, $id), [
                'body' => json_encode($data)
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

    public function get($entity, $id)
    {
        $client = $this->getGuzzleClient();

        try {
            $response = $client->get($this->getAbsoluteUrl($entity, $id));
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
