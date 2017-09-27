<?php

/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Orion\Component\Client\Entity;

class LeadLine extends AbstractApiEntity
{
    protected $leadId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string|int
     */
    protected $price;

    /**
     * @return mixed
     */
    public function getLeadId()
    {
        return $this->leadId;
    }

    /**
     * @param mixed $leadId
     */
    public function setLeadId($leadId)
    {
        $this->leadId = $leadId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
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
}
