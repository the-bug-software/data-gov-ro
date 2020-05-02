<?php

namespace TheBugSoftware\DataGovRo\Tests\Services;

use PHPUnit\Framework\TestCase;
use TheBugSoftware\DataGovRo\Services\Group;

class GroupTest extends TestCase
{
    protected Group $group;

    public function setUp(): void
    {
        $this->group = new Group();
    }

    /** @test */
    public function it_should_return_a_list_of_groups()
    {
        $response = $this->group->list();

        $this->assertTrue($response->success);
        $this->assertIsArray($response->data);
    }

    /** @test */
    public function it_should_return_group_details()
    {
        $groups  = $this->group->list();
        $groupID = $groups->data[0];

        $response  = $this->group->show($groupID);

        $this->assertTrue($response->success);
    }
}
