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

class EstateApi extends AbstractApi
{
    /**
     * @param array $data
     * @return array|object
     */
    public function create(array $data)
    {
        $uri = $this->buildUrl('estate');
        return $this->send(new Request('POST', $uri, [], \GuzzleHttp\json_encode($data)));
    }

    /**
     * @param $id
     * @return array|object
     */
    public function get($id)
    {
        $uri = $this->buildUrl('estate', $id);
        return $this->send(new Request('GET', $uri));
    }

    /**
     * @return array|object
     */
    public function list()
    {
        $uri = $this->buildUrl('estate');
        return $this->send(new Request('GET', $uri));
    }

    /**
     * @param $id
     * @param array $data
     * @return array|object
     */
    public function update($id, array $data)
    {
        $uri = $this->buildUrl('estate', $id);
        return $this->send(new Request('PUT', $uri, [], \GuzzleHttp\json_encode($data)));
    }

    /**
     * @param $id
     * @return array|object
     */
    public function delete($id)
    {
        $uri = $this->buildUrl('estate', $id);
        return $this->send(new Request('DELETE', $uri));
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

        return $this->send($request->withBody(new MultipartStream([
            [
                'name' => 'image',
                'contents' => $contents,
                'filename' => $fileName,
            ]
        ])));
    }

    /**
     * @param $id
     * @param $imageId
     * @return array|object
     */
    public function deleteImage($id, $imageId)
    {
        $uri = $this->buildUrl('estate_image', $id, $imageId);
        return $this->send(new Request('DELETE', $uri));
    }
}
