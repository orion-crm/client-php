<?php
/**
 * Created by IntelliJ IDEA.
 * User: maxim
 * Date: 14/11/2017
 * Time: 18:07
 */

namespace Orion\Component\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use Orion\Component\Client\Api\EstateApi;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Factory
 *
 * @property Api\EstateApi $estate
 */
class Factory
{
    /**
     * @var string
     */
    protected $token;
    /**
     * @var string
     */
    protected $version;
    /**
     * @var string
     */
    protected $endpoint;

    /**
     * Factory constructor.
     * @param string $token
     * @param string $version
     * @param string $endpoint
     */
    public function __construct($token, $version = 'v1', $endpoint = 'https://api.orion-crm.ru')
    {
        $this->token = $token;
        $this->version = $version;
        $this->endpoint = $endpoint;
    }

    /**
     * @param $name
     * @return object
     */
    public function __get($name)
    {
        $api = $this->getApiList();
        if (isset($api[$name])) {
            return (new \ReflectionClass($api[$name]))->newInstance($this);
        }

        throw new \RuntimeException('Incorrect api entity');
    }

    protected function getApiList()
    {
        return [
            'estate' => EstateApi::class
        ];
    }

    /**
     * @return Client
     */
    public function getGuzzleClient()
    {
        return new Client();
    }

    /**
     * @param RequestInterface $request
     * @return object|array
     */
    public function send(RequestInterface $request)
    {
        if (false === $request->hasHeader('Content-Type')) {
            $request = $request->withHeader('Content-Type', 'application/json');
        }

        try {
            $response = $this->getGuzzleClient()->send($this->signRequest($request));
        } catch (ServerException $e) {
            $response = $e->getResponse();
        } catch (RequestException $e) {
            $response = $e->getResponse();
        }

        return \GuzzleHttp\json_decode((string)$response->getBody(), true);
    }

    /**
     * @param RequestInterface $request
     * @return RequestInterface
     */
    public function signRequest(RequestInterface $request) : RequestInterface
    {
        return $request->withHeader('Authorization', sprintf("Bearer %s", $this->token));
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return sprintf("%s/%s", $this->endpoint, $this->version);
    }
}
