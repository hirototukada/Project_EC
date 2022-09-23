<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // ひらがな
        Validator::extend('custom_tel', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^[ぁ-ん]+/u', $value);
        });
    }
}
