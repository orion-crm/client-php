<?php

/*
 * (c) Studio107 <mail@studio107.ru> http://studio107.ru
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Orion\Component\Client\Crm;

use Orion\Component\Client\AbstractApiEntity;

/**
 * Author: Falaleev Maxim (max107)
 * Email: <max@studio107.ru>
 * Company: Studio107 <http://studio107.ru>
 * Date: 07/03/17 14:36
 */
class Lead extends AbstractApiEntity
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var float
     */
    protected $price;
    /**
     * @var int|string
     */
    protected $contactId;
    /**
     * @var int|string
     */
    protected $companyId;
    /**
     * @var int|string
     */
    protected $managerId;
    /**
     * @var int|string
     */
    protected $stepId;
    /**
     * @var int|string
     */
    protected $orderId;
    /**
     * @var string
     */
    protected $source;

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
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'crm/lead';
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
     * @return int|string
     */
    public function getStepId()
    {
        return $this->stepId;
    }

    /**
     * @param int|string $stepId
     */
    public function setStepId($stepId)
    {
        $this->stepId = $stepId;
    }

    /**
     * @return int|string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int|string $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }
}
