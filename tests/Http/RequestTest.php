<?php

namespace TheBugSoftware\DataGovRo\Tests;

use PHPUnit\Framework\TestCase;
use TheBugSoftware\DataGovRo\Exceptions\RequestException;
use TheBugSoftware\DataGovRo\Http\Request;

class RequestTest extends TestCase
{

    protected Request $request;

    public function setUp(): void
    {
        $this->request = new Request();
    }

    /** @test */
    public function it_should_throw_a_request_exception()
    {
        $this->expectException(RequestException::class);
        $this->request->get('nothing')->array();
    }

    /** @test */
    public function it_should_connect_to_api_and_return_api_version()
    {
        $response = $this->request->getApiVersion();

        $this->assertArrayHasKey('version', $response);
    }

    /** @test */
    public function it_should_return_the_http_status_code()
    {
        $response = $this->request->get()->statusCode();

        $this->assertIsInt($response);
    }

    /** @test */
    public function it_should_return_the_http_headers()
    {
        $response = $this->request->get()->headers();

        $this->assertIsArray($response);
        $this->assertArrayHasKey('Date', $response);
        $this->assertArrayHasKey('Content-Type', $response);
    }

}
