<?php

namespace Bengr\FileSystem\BunnyCDN\Tests;

use Bengr\FileSystem\BunnyCDN\BunnyCDNServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            BunnyCDNServiceProvider::class,
        ];
    }
}
