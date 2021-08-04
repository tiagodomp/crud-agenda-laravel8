<?php

namespace App\Providers;

use App\Repositories\IEloquentRepository;
use App\Repositories\IAgendaRepository;
use App\Repositories\Eloquent\AgendaRepository;
use App\Repositories\Eloquent\BaseRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind(IEloquentRepository::class, BaseRepository::class);
       $this->app->bind(IAgendaRepository::class, AgendaRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
