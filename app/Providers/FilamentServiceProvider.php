<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
use Spatie\Permission\Contracts\Role;
use App\Filament\Resources\CarResource;
use Illuminate\Support\ServiceProvider;
use App\Filament\Resources\UserResource;
use Althinect\FilamentSpatieRolesPermissions\Resources\RoleResource;
use Althinect\FilamentSpatieRolesPermissions\Resources\PermissionResource;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void {
        Filament::serving(function() {
            if(auth()->user()){
                if(auth()->user()->is_admin === 1 && auth()->user()->hasAnyRole(['super-admin', 'admin', 'moderator'])) {
                    Filament::registerUserMenuItems([
                        UserMenuItem::make()
                            ->label('Manage Users')
                            ->url(UserResource::getUrl())
                            ->icon('heroicon-s-users'),
                        UserMenuItem::make()
                            ->label('Manage Cars')
                            ->url(CarResource::getUrl())
                            ->icon('heroicon-s-truck'),
                            UserMenuItem::make()
                            ->label('Manage Roles')
                            ->url(RoleResource::getUrl())
                            ->icon('heroicon-s-cog'),
                            UserMenuItem::make()
                            ->label('Manage Permissions')
                            ->url(PermissionResource::getUrl())
                            ->icon('heroicon-s-key'),
                    ]);
                }
            }
        });
    }
}
