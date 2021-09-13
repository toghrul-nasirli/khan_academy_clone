<?php

namespace App\Providers;

use App\Repositories\Work\iWorkRepository;
use App\Repositories\Work\WorkRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(iWorkRepository::class, WorkRepository::class);
    }

    public function boot()
    {
        //
    }
}
