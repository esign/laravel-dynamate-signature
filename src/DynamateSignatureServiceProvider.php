<?php

namespace Esign\DynamateSignature;

use Illuminate\Support\ServiceProvider;

class DynamateSignatureServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([$this->configPath() => config_path('dynamate-signature.php')], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'dynamate-signature');

        $this->app->singleton('dynamate-signature', function () {
            return new DynamateSignature;
        });
    }

    protected function configPath(): string
    {
        return __DIR__ . '/../config/dynamate-signature.php';
    }
}
