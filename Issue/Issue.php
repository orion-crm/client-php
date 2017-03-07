<?php

/*
 * (c) Studio107 <mail@studio107.ru> http://studio107.ru
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * Author: Maxim Falaleev <max@studio107.ru>
 */

namespace Orion\Component\Client\Issue;

use Orion\Component\Client\AbstractApiEntity;

class Issue extends AbstractApiEntity
{
    /**
     * @var int|string
     */
    protected $objectId;
    /**
     * @var string
     */
    protected $objectClass;
    /**
     * @var string
     */
    protected $content;
    /**
     * @var int|string
     */
    protected $executorId;
    /**
     * @var \DateTime|string
     */
    protected $deadlineAt;
    /**
     * @var int
     */
    protected $type;
    /**
     * @var string
     */
    protected $result;
    /**
     * @var int|string
     */
    protected $resultAuthorId;

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'issue/issue';
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return int|string
     */
    public function getExecutorId()
    {
        return $this->executorId;
    }

    /**
     * @param int|string $executorId
     */
    public function setExecutorId($executorId)
    {
        $this->executorId = $executorId;
    }

    /**
     * @return \DateTime|string
     */
    public function getDeadlineAt()
    {
        return $this->deadlineAt;
    }

    /**
     * @param \DateTime|string $deadlineAt
     */
    public function setDeadlineAt($deadlineAt)
    {
        $this->deadlineAt = $deadlineAt;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param string $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return int|string
     */
    public function getResultAuthorId()
    {
        return $this->resultAuthorId;
    }

    /**
     * @param int|string $resultAuthorId
     */
    public function setResultAuthorId($resultAuthorId)
    {
        $this->resultAuthorId = $resultAuthorId;
    }

    /**
     * @return string
     */
    public function getObjectClass()
    {
        return $this->objectClass;
    }

    /**
     * @param string $objectClass
     */
    public function setObjectClass($objectClass)
    {
        $this->objectClass = $objectClass;
    }

    /**
     * @return int|string
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * @param int|string $objectId
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
    }
}
