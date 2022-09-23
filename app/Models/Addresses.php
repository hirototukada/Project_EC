<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Addresses extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'postal_code',
        'pref_id',
        'city',
        'town',
        'building',
        'phone_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     *  登録処理
     *
     * @param array $addressesData
     * @return int $id
     */
    public function registration(array $addressesData)
    {
        // dd($addressesData['postal_code']);
        try {
            DB::beginTransaction();

            Addresses::create([
                'user_id' => $addressesData['user_id'],
                'postal_code' => $addressesData['postal_code'],
                'pref_id' => $addressesData['pref_id'],
                'city' => $addressesData['city'],
                'town' => $addressesData['town'],
                'building' => $addressesData['building'],
                'phone_number' => $addressesData['phone_number'],
            ]);

            DB::commit();
        } catch (Exception $e) {
            Log::error($e);
            DB::rollBack();
        }

        $id = Addresses::select('id')->first();

        return $id;
    }
}
