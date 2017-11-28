<?php
/**
 * Created by IntelliJ IDEA.
 * User: maxim
 * Date: 21/11/2017
 * Time: 18:23
 */

namespace Orion\Component\Client\Api;

class RequestApi extends AbstractGenericApi
{
    public function getPrefix(): string
    {
        return 'request';
    }
}
