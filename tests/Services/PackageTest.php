<?php

namespace TheBugSoftware\DataGovRo\Tests\Services;

use PHPUnit\Framework\TestCase;
use TheBugSoftware\DataGovRo\Services\Package;

class PackageTest extends TestCase
{
    protected Package $package;

    public function setUp(): void
    {
        $this->package = new Package();
    }

    /** @test */
    public function it_should_return_a_list_of_packages()
    {
        $response = $this->package->list();

        $this->assertTrue($response->success);
        $this->assertIsArray($response->data);
    }

    /** @test */
    public function it_should_return_a_list_with_recently_updated_packages()
    {
        $response = $this->package->updated();

        $this->assertTrue($response->success);
        $this->assertIsArray($response->data);
    }

    /** @test */
    public function it_should_return_package_details()
    {
        $packages  = $this->package->list();
        $packageID = $packages->data[0];

        $response  = $this->package->show($packageID);

        $this->assertTrue($response->success);
    }
}
