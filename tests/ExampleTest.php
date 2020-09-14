<?php

namespace Maximof\Laravel8Calendar\Tests;

use Orchestra\Testbench\TestCase;
use Maximof\Laravel8Calendar\Laravel8CalendarServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [Laravel8CalendarServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
