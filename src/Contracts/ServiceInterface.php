<?php

namespace TheBugSoftware\DataGovRo\Contracts;

interface ServiceInterface
{
    public function list();

    public function show(string $id);
}