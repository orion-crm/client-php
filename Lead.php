<?php

/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Orion\Component\Client;

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
     * @var int|string
     */
    protected $contact;
    /**
     * @var int|string
     */
    protected $contactId;
    /**
     * @var int|string
     */
    protected $price;
    /**
     * @var int|string
     */
    protected $isDone;
    /**
     * @var int|string
     */
    protected $clientId;
    /**
     * @var int|string
     */
    protected $requisiteId;
    /**
     * @var int|string
     */
    protected $pipelineStepId;
    /**
     * @var string
     */
    protected $source;

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'lead';
    }

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
     * @return int|string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param int|string $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
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
     * @return int|string
     */
    public function getIsDone()
    {
        return $this->isDone;
    }

    /**
     * @param int|string $isDone
     */
    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;
    }

    /**
     * @return int|string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param int|string $clientId
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * @return int|string
     */
    public function getRequisiteId()
    {
        return $this->requisiteId;
    }

    /**
     * @param int|string $requisiteId
     */
    public function setRequisiteId($requisiteId)
    {
        $this->requisiteId = $requisiteId;
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

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }
}
