<?php

namespace codearachnid\FilamentSuperAdmin;

use codearachnid\FilamentSuperAdmin\Commands\FilamentSuperAdminCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentSuperAdminServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-super-admin')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament_super_admin_table')
            ->hasCommand(FilamentSuperAdminCommand::class);
    }
}
