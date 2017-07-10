<?php

/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Orion\Component\Client\Tests;

use Orion\Component\Client\Project;

class ProjectTest extends \PHPUnit_Framework_TestCase
{
    public function testLead()
    {
        $project = new Project([
            'name' => 'test'
        ]);
        $this->assertSame('project', $project->getEndpoint());
        $this->assertSame([
            'name' => 'test',
            'manager_id' => null,
            'description' => null,
        ], $project->toArray());
    }
}