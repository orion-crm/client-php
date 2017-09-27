<?php

/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Orion\Component\Client\Entity;

class Lead extends AbstractApiEntity
{
    /**
     * @var int|string
     */
    protected $name;
    /**
     * @var int|string
     */
    protected $phone;
    /**
     * @var int|string
     */
    protected $email;
    /**
     * @var string
     */
    protected $contact;
    /**
     * @var int|string
     */
    protected $price;
    /**
     * @var int|bool
     */
    protected $isDone;
    /**
     * @var int|bool
     */
    protected $isClosed;
    /**
     * @var string
     */
    protected $source;
    /**
     * @var int|string
     */
    protected $managerId;
    /**
     * @var int|string
     */
    protected $requestId;
    /**
     * @var int|string
     */
    protected $pipelineStepId;

    /**
     * @return int|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int|string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int|string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param int|string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return int|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param int|string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getContact(): string
    {
        return $this->contact;
    }

    /**
     * @param string $contact
     */
    public function setContact(string $contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return int|string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int|string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
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
     * @return bool|int
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }

    /**
     * @param bool|int $isClosed
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource(string $source)
    {
        $this->source = $source;
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
     * @return int|string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param int|string $requestId
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }

    /**
     * @return int|string
     */
    public function getPipelineStepId()
    {
        return $this->pipelineStepId;
    }

    /**
     * @param int|string $pipelineStepId
     */
    public function setPipelineStepId($pipelineStepId)
    {
        $this->pipelineStepId = $pipelineStepId;
    }
}
