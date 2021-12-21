<?php

declare(strict_types=1);

namespace UwaisCode\BladeBootstrapicons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeBootstrapiconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-bootstrapicons', []);

            $factory->add('bootstrapicons', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-bootstrapicons.php', 'blade-bootstrapicons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-bootstrapicons'),
            ], 'blade-bootstrapicons');

            $this->publishes([
                __DIR__.'/../config/blade-bootstrapicons.php' => $this->app->configPath('blade-bootstrapicons.php'),
            ], 'blade-bootstrapicons-config');
        }
    }
}
