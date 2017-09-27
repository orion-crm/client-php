<?php

/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Orion\Component\Client\Tests;

use Orion\Component\Client\Entity\AbstractApiEntity;
use Orion\Component\Client\Entity\Client;
use Orion\Component\Client\Entity\Comment;
use Orion\Component\Client\Entity\Lead;
use Orion\Component\Client\Entity\LeadLine;
use Orion\Component\Client\Entity\PipelineStep;
use Orion\Component\Client\Entity\Project;
use Orion\Component\Client\Entity\Pipeline;
use Orion\Component\Client\Entity\Request;
use Orion\Component\Client\Entity\RequestTemplate;
use PHPUnit\Framework\TestCase;

class EntityTest extends TestCase
{
    public function entityProvider()
    {
        return [
            [new PipelineStep(), 'pipeline_step', 4],
            [new Pipeline(), 'pipeline', 2],
            [new Project(), 'project', 3],
            [new Comment(), 'comment', 2],
            [new Client(), 'client', 14],
            [new Lead(), 'lead', 11],
            [new LeadLine(), 'lead_line', 3],
            [new Request(), 'request', 4],
            [new RequestTemplate(), 'request_template', 3],
        ];
    }

    /**
     * @dataProvider entityProvider
     *
     * @param AbstractApiEntity $entity
     * @param $endpoint
     * @param $propertyCount
     */
    public function testEntities(AbstractApiEntity $entity, $endpoint, $propertyCount)
    {
        $this->assertSame($endpoint, $entity->getEndpoint());
        $this->assertSame($propertyCount, count($entity->toArray()));
    }
}
