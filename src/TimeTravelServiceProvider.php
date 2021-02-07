<?php namespace DieterCoopman\TimeTravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TimeTravelServiceProvider extends PackageServiceProvider{

    public function configurePackage(Package $package): void
    {
        $package->name('timetravel');
    }

}
