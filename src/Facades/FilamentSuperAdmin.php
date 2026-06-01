<?php

namespace codearachnid\FilamentSuperAdmin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \codearachnid\FilamentSuperAdmin\FilamentSuperAdmin
 */
class FilamentSuperAdmin extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \codearachnid\FilamentSuperAdmin\FilamentSuperAdmin::class;
    }
}
