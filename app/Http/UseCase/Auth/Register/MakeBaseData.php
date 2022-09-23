<?php

namespace App\Http\UseCase\Auth\Register;

use Illuminate\Http\Request;

class MakeBaseData
{
    /**
     * データ成形
     *
     * @param Request $request
     * @return array
     */
    private function __invoke(Request $request): array
    {
        $allRequest = $request->all();
        $baseData   = [
            'name' => $allRequest['name'],
            'email' => $allRequest['email'],
            'postal_code' => $allRequest['postal_code'],
            'pref_id' => $allRequest['pref_id'],
            'city' => $allRequest['city'],
            'building' => $allRequest['building'],
            'town' => $allRequest['town'],
            'phone_number' => $allRequest['phone_number'],
            'password' => $allRequest['password'],
        ];

        return $baseData;
    }

    /**
     * 郵便番号の成形
     *
     * @param int $postal_code
     * @return string
     */
    private function sanitaizePostal(int $postal_code)
    {
        return $postal_code;
    }
}
