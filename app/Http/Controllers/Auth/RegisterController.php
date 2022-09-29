<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\EntryRequest;
use App\Http\UseCase\Auth\Register\MakeBaseData;
use App\Http\UseCase\Auth\Register\UserRegister;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;
    private $viewData = [];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * 新規登録処理
     *
     * @return view
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * 確認画面
     *
     * @param EntryRequest $request
     * @param MakeBaseData $makeBaseData
     * @return view
     */
    public function comfirm(
        EntryRequest $request,
        MakeBaseData $makeBaseData
    ) {
        $viewData = $makeBaseData($request);

        return view('auth.confirm', $viewData);
    }

    /**
     * 登録完了
     *
     * @param EntryRequest $request
     * @param UserRegister $userRegister
     */
    public function fin(
        EntryRequest $request,
        UserRegister $userRegister
    ) {
        $userRegister($request);

        return view('auth.fin');

    }
}
