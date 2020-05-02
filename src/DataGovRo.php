<?php

namespace TheBugSoftware\DataGovRo;

use TheBugSoftware\DataGovRo\Services\{Group, Package, Tag};

class DataGovRo
{
    public static function packages(): Package
    {
        return new Package();
    }

    public static function groups(): Group
    {
        return new Group();
    }

    public static function tags(): Tag
    {
        return new Tag();
    }
}
