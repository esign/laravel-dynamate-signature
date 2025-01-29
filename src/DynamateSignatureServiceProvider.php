<?php

namespace Esign\DynamateSignature;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class DynamateSignatureServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom($this->viewPath(), 'dynamate-signature');

        if ($this->app->runningInConsole()) {
            $this->publishes([$this->viewPath() => resource_path('views/vendor/dynamate-signature')], 'views');
        }
    }

    protected function viewPath(): string
    {
        return __DIR__ . '/../resources/views';
    }
}
