<?php
/**
 * Created by IntelliJ IDEA.
 * User: maxim
 * Date: 14/11/2017
 * Time: 18:08
 */

namespace Orion\Component\Client\Api;

use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;

class EstateApi extends AbstractApi
{
    /**
     * @param array $data
     * @return array|object
     */
    public function create(array $data)
    {
        $uri = $this->buildUrl('estate');
        return $this->sendJson(new Request('POST', $uri, [], \GuzzleHttp\json_encode($data)));
    }

    /**
     * @param $id
     * @return array|object
     */
    public function get($id)
    {
        $uri = $this->buildUrl('estate', $id);
        return $this->sendJson(new Request('GET', $uri));
    }

    /**
     * @return array|object
     */
    public function list()
    {
        $uri = $this->buildUrl('estate');
        return $this->sendJson(new Request('GET', $uri));
    }

    /**
     * @param $id
     * @param array $data
     * @return array|object
     */
    public function update($id, array $data)
    {
        $uri = $this->buildUrl('estate', $id);
        return $this->sendJson(new Request('PUT', $uri, [], \GuzzleHttp\json_encode($data)));
    }

    /**
     * @param $id
     * @return array|object
     */
    public function delete($id)
    {
        $uri = $this->buildUrl('estate', $id);
        return $this->sendJson(new Request('DELETE', $uri));
    }

    /**
     * @param $id
     * @param $fileName
     * @param $contents
     * @return array|object
     */
    public function uploadImage($id, $fileName, $contents)
    {
        $uri = $this->buildUrl('estate_image', $id);
        $request = new Request('POST', $uri);

        $multipart = new MultipartStream([
            [
                'name' => 'image',
                'contents' => $contents,
                'filename' => $fileName,
            ]
        ]);

        return $this->send($request->withBody($multipart));
    }

    /**
     * @param $id
     * @param $imageId
     * @return array|object
     */
    public function deleteImage($id, $imageId)
    {
        $uri = $this->buildUrl('estate_image', $id, $imageId);
        return $this->sendJson(new Request('DELETE', $uri));
    }
}
