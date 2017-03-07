<?php

/*
 * (c) Studio107 <mail@studio107.ru> http://studio107.ru
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * Author: Maxim Falaleev <max@studio107.ru>
 */

namespace Orion\Component\Client\Crm;

use Orion\Component\Client\AbstractApiEntity;

class Task extends AbstractApiEntity
{
    /**
     * @var int|string
     */
    protected $leadId;
    /**
     * @var int|string
     */
    protected $contactId;
    /**
     * @var int|string
     */
    protected $companyId;
    /**
     * @var \DateTime|string
     */
    protected $deadlineAt;
    /**
     * @var string
     */
    protected $result;
    /**
     * @var int|string
     */
    protected $executorId;
    /**
     * @var string
     */
    protected $content;
    /**
     * @var int|string
     */
    protected $type;

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'crm/task';
    }

    /**
     * @return int|string
     */
    public function getLeadId()
    {
        return $this->leadId;
    }

    /**
     * @param int|string $leadId
     */
    public function setLeadId($leadId)
    {
        $this->leadId = $leadId;
    }

    /**
     * @return int|string
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * @param int|string $contactId
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
    }

    /**
     * @return int|string
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param int|string $companyId
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int|string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}
