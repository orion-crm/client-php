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

class Comment extends AbstractApiEntity
{
    /**
     * @var int|string
     */
    protected $leadId;
    /**
     * @var int|string
     */
    protected $companyId;
    /**
     * @var int|string
     */
    protected $contactId;
    /**
     * @var string
     */
    protected $comment;

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'crm/comment';
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
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
}
