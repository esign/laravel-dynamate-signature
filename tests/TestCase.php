<?php

namespace Esign\DynamateSignature\Tests;

use Esign\DynamateSignature\DynamateSignatureServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [DynamateSignatureServiceProvider::class];
    }
} 