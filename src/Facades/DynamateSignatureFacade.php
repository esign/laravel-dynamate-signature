<?php

namespace Esign\DynamateSignature\Facades;

use Illuminate\Support\Facades\Facade;

class DynamateSignatureFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'dynamate-signature';
    }
}
