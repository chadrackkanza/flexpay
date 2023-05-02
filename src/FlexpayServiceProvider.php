<?php

namespace chadrackkanza\Flexpay;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use chadrackkanza\Flexpay\Commands\FlexpayCommand;
use Illuminate\Support\ServiceProvider;

class FlexpayServiceProvider extends PackageServiceProvider
{

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('flexpay')
            ->hasConfigFile('flexpay');
        
    }
}
