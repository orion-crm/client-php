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

class Issue extends AbstractApiEntity
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int|string
     */
    protected $executorId;
    /**
     * @var int|bool
     */
    protected $isDone;
    /**
     * @var int|string
     */
    protected $projectId;
    /**
     * @var string
     */
    protected $content;
    /**
     * @var \DateTime|string
     */
    protected $deadlineAt;

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'project/issue';
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
     * @return bool|int
     */
    public function getIsDone()
    {
        return $this->isDone;
    }

    /**
     * @param bool|int $isDone
     */
    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;
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
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param int|string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
}
