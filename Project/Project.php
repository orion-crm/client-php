<?php

/*
 * (c) Studio107 <mail@studio107.ru> http://studio107.ru
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * Author: Maxim Falaleev <max@studio107.ru>
 */

namespace Orion\Component\Client\Project;

use Orion\Component\Client\AbstractApiEntity;

class Project extends AbstractApiEntity
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int|string
     */
    protected $managerId;
    /**
     * @var string
     */
    protected $description;

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'project/project';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int|string
     */
    public function getManagerId()
    {
        return $this->managerId;
    }

    /**
     * @param int|string $managerId
     */
    public function setManagerId($managerId)
    {
        $this->managerId = $managerId;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
