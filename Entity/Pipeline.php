<?php

/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Orion\Component\Client\Entity;

class Pipeline extends AbstractApiEntity
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int|string
     */
    protected $position;

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
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int|string $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }
}
