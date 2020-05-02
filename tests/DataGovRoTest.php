<?php

namespace TheBugSoftware\DataGovRo\Tests;

use PHPUnit\Framework\TestCase;
use TheBugSoftware\DataGovRo\DataGovRo;
use TheBugSoftware\DataGovRo\Services\{Group, Package, Tag};

class DataGovRoTest extends TestCase
{

    /** @test */
    public function it_should_return_a_package_instance()
    {
        $this->assertInstanceOf(Package::class, DataGovRo::packages());
    }

    /** @test */
    public function it_should_return_a_group_instance()
    {
        $this->assertInstanceOf(Group::class, DataGovRo::groups());
    }

    /** @test */
    public function it_should_return_a_tag_instance()
    {
        $this->assertInstanceOf(Tag::class, DataGovRo::tags());
    }
}
