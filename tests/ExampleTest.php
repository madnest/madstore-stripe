<?php

namespace Madnest\MadstoreStripe\Tests;

use Orchestra\Testbench\TestCase;
use Madnest\MadstoreStripe\MadstoreStripeServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [MadstoreStripeServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
