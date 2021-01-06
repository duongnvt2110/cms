<?php

namespace Demo\CustomField\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Demo\CustomField\Providers\EventServiceProvider;
use Demo\CustomField\Models\GroupField;

class CustomFieldServiceProvider extends ServiceProvider{

    public function register(){
        // $this->app->make('Duong\NL\Controllers\GroupFieldController');
        $this->app->register(EventServiceProvider::class);
    }

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'custom_field');
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

        Blade::directive('test', function () {
            return "test";
        });
        Blade::if('custom_field', function () {
            $groupFields = GroupField::get()->first();
            if(!empty($groupFields)){
                return true;
            }
            return false;
        });
    }
}

