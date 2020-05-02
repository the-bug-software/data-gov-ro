<?php

namespace TheBugSoftware\DataGovRo\Providers;

use TheBugSoftware\DataGovRo\Http\Request;

class ServiceProvider
{
    protected Request $request;

    public function __construct()
    {
        $this->request = new Request();
    }
}
