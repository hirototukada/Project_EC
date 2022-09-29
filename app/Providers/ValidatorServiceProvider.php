<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // 携帯電話の正規表現
        Validator::extend('custom_tel', function ($attribute, $value, $parameters, $validator) {
            $cellPhone = false;

            // 電話番号入力チェック
            if (preg_match('/^050|^070|^080^|090/', $value)) {
                if (preg_match('/^\d{11}/', $value)) {
                    return false;
                }

                $cellPhone = true;
            } else {
                if ( ! preg_match('/^\d{10}/', $value)) {
                    return false;
                }

            }
            // 全て0の時
            if (preg_match('/0{10}/', $value)) {
                return false;
            }
            // 同じ数字が5回以上続く時
            if (preg_match('/(\d)\1{4}/', $value)) {
                return false;
            }
            // 携帯電話の時に4桁目が0の時
            if ($cellPhone && preg_match('/^0/', substr($value, 3, 1))) {
                return false;
            }
            // 固定電話で0120で始まる数字の時
            if ( ! $cellPhone && preg_match('/^0120/', $value)) {
                return false;
            }

            return true;

        });
    }

}
