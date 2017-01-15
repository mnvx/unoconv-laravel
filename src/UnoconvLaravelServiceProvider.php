<?php

namespace Mnvx\UnoconvLaravel;

use Illuminate\Support\ServiceProvider;
use Mnvx\Unoconv\Converter;
use Mnvx\Unoconv\ConverterInterface;

class UnoconvLaravelServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/unoconv.php' => config_path('unoconv.php'),
        ]);

        $this->mergeConfigFrom(
            __DIR__ . '/config/unoconv.php', 'unoconv'
        );
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app[ConverterInterface::class] = $this->app->share(function ($app) {
            return new Converter(
                $app['config']->get('unoconv.binary'),
                $app['config']->get('unoconv.timeout')
            );
        });
    }
}