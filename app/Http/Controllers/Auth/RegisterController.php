<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\EntryRequest;
use App\Http\UseCase\Auth\Register\MakeBaseData;

class RegisterController extends Controller
{
    private $viewData = [];

    public function __construct()
    {

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
        dd('ok');
        return view('auth.confirm', $viewData);
    }
}
