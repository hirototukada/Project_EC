<?php

namespace App\Http\UseCase\Auth\Register;

use App\Models\Addresses;
use App\Models\User;
use Illuminate\Http\Request;

class UserRegister
{
    private $user;
    private $addresses;

    public function __construct(User $user, Addresses $addresses)
    {
        $this->user      = $user;
        $this->addresses = $addresses;
    }

    /**
     * データ登録
     *
     * @param Request $request
     * @return bool
     */
    private function __invoke(Request $request): bool
    {
        // user登録
        $userData = $this->separateUser($request);
        $userId   = $this->user->registration($userData);

        // address登録
        $addressesData = $this->separateAddresses($request, $userId);
        $isAddresses   = $this->addresses->registration($addressesData);

        if (empty($isAddresses)) {
            abort(500);
        }

        return true;
    }

    /**
     * user情報に必要な処理を分ける
     *
     * @param Request $request
     * @return array $userData
     */
    private function separateUser(
        Request $request
    ): array
    {
        $userData = ([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return $userData;
    }

    /**
     * addresses情報に必要な処理を分ける
     *
     * @param Request $request
     * @param int $userId
     * @return array $userData
     */
    private function separateAddresses(
        Request $request,
        int $userId
    ): array
    {
        $addressesData = ([
            'user_id' => $userId,
            'postal_code' => $request->postal_code,
            'pref_id' => $request->pref_id,
            'city' => $request->city,
            'town' => $request->town,
            'building' => $request->building,
            'phone_number' => $request->phone_number,
        ]);

        return $addressesData;
    }

}
