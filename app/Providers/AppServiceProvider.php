<?php

namespace App\Providers;

use App\GroupField;
use App\ItemField;
use App\LoanApplication;
use Illuminate\Support\ServiceProvider;
use App\User;
use App\Observers\UserObserver;
use App\Observers\LoanApplicationObserver;
use Illuminate\Support\Facades\Blade;
use TorMorten\Eventy\Facades\Events as Eventy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        User::observe(UserObserver::class);
        LoanApplication::observe(LoanApplicationObserver::class);
        Eventy::addFilter('my.hook', function() {
            echo '1';
        }, 20, 1);
        Blade::directive('test', function () {
            return '<?php
                echo "<div>";
                echo "<input type=text>";
                echo "</div>";
            ?>';
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
