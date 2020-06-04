<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use App\Traits\CaptchaTrait;
use Illuminate\Support\Facades\Validator;



class AppServiceProvider extends ServiceProvider
{
    use CaptchaTrait;
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
        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }
        Schema::defaultStringLength(191);
        Validator::extend('captcha', function($attribute, $value, $parameters, $validator) {
             if(!empty($value) && $this->captchaCheck($value) == true)
             {
                 return true;
             }
             return false;
        });
    }
}
