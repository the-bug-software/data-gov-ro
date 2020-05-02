<?php

namespace TheBugSoftware\DataGovRo\Tests\Services;

use PHPUnit\Framework\TestCase;
use TheBugSoftware\DataGovRo\Services\Tag;

class TagTest extends TestCase
{
    protected Tag $tag;

    public function setUp(): void
    {
        $this->tag = new Tag();
    }

    /** @test */
    public function it_should_return_a_list_of_tags()
    {
        $response = $this->tag->list();

        $this->assertTrue($response->success);
        $this->assertIsArray($response->data);
    }

    /** @test */
    public function it_should_return_tag_details()
    {
        $tags  = $this->tag->list();
        $tagID = $tags->data[0];

        $response = $this->tag->show($tagID);

        $this->assertTrue($response->success);
    }
}
