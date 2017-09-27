<?php

/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Orion\Component\Client\Entity;

class Client extends AbstractApiEntity
{
    /**
     * @var int|string
     */
    protected $name;
    /**
     * @var int|string
     */
    protected $email;
    /**
     * @var int|string
     */
    protected $phoneWork;
    /**
     * @var int|string
     */
    protected $phonePersonal;
    /**
     * @var int|string
     */
    protected $phoneOther;
    /**
     * @var string
     */
    protected $vkontakte;
    /**
     * @var string
     */
    protected $facebook;
    /**
     * @var string
     */
    protected $skype;
    /**
     * @var string
     */
    protected $icq;
    /**
     * @var string
     */
    protected $post;
    /**
     * @var string
     */
    protected $note;
    /**
     * @var int|bool
     */
    protected $type;
    /**
     * @var int|string
     */
    protected $managerId;
    /**
     * @var int|string
     */
    protected $parentId;

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
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string|int
     */
    public function getPhoneWork()
    {
        return $this->phoneWork;
    }

    /**
     * @param string|int $phoneWork
     */
    public function setPhoneWork($phoneWork)
    {
        $this->phoneWork = $phoneWork;
    }

    /**
     * @return string|int
     */
    public function getPhonePersonal()
    {
        return $this->phonePersonal;
    }

    /**
     * @param string|int $phonePersonal
     */
    public function setPhonePersonal($phonePersonal)
    {
        $this->phonePersonal = $phonePersonal;
    }

    /**
     * @return string|int
     */
    public function getPhoneOther()
    {
        return $this->phoneOther;
    }

    /**
     * @param string|int $phoneOther
     */
    public function setPhoneOther($phoneOther)
    {
        $this->phoneOther = $phoneOther;
    }

    /**
     * @return string
     */
    public function getVkontakte()
    {
        return $this->vkontakte;
    }

    /**
     * @param string $vkontakte
     */
    public function setVkontakte($vkontakte)
    {
        $this->vkontakte = $vkontakte;
    }

    /**
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param string $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @return string
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * @param string $skype
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;
    }

    /**
     * @return string|int
     */
    public function getIcq()
    {
        return $this->icq;
    }

    /**
     * @param string|int $icq
     */
    public function setIcq($icq)
    {
        $this->icq = $icq;
    }

    /**
     * @return string
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param string $post
     */
    public function setPost($post)
    {
        $this->post = $post;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return int|bool
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int|bool $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param int|string $parentId
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }
}
