<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ["required"],
            'email' => [
                'required',
                'regex:/[a-zA-Z0-9_.+-]+@([a-zA-Z0-9]*[a-zA-Z0-9-][a-zA-Z0-9]\\.)+[a-zA-Z]{2,}$/',
                'unique:users,email' . $this->id . ',id',
            ],
            'postal_code' => ['required', 'numeric'],
            'pref_id' => ['required'],
            'city' => ['required'],
            'town' => ['required'],
            'building' => ['required'],
            'phone_number' => ['required', 'bail', 'numeric'],
            'password' => ['required', 'min:8'],
        ];
    }

    /**
     * データ整形
     *
     * @param Request $request
     */
    protected function prepareForValidation()
    {
        // 名前
        $sanitaizeName = str_replace(" ", "", $this->input('name'));
        $sanitaizeName = mb_convert_kana($sanitaizeName, 'K');

        // メールアドレス
        $sanitaizeMail = str_replace(" ", "", $this->input('email'));
        // 全角から半角へ
        $sanitaizeMail = mb_convert_kana($sanitaizeMail, 'a', 'UTF-8');

        // 電話番号
        // 全角から半角へ
        $sanitaizePhone = mb_convert_kana($this->input('phone_number'), 'a', 'UTF-8');
        // 長音、ダッシュを半角スペース削除
        $sanitaizePhone = str_replace("\x20|　", "", $sanitaizePhone);
        // 長音、ダッシュを半角ハイフンに置換
        $sanitaizePhone = str_replace("―|ー", "-", $sanitaizePhone);
        // ハイフン、かっこを削除
        $sanitaizePhone = str_replace("/\(|\)|\-/", "", $sanitaizePhone);

        // 郵便番号
        $sanitaizePostal = str_replace(" ", "", $this->input('postal_code'));
        $sanitaizePostal = mb_convert_kana($sanitaizePostal, 'n');

        // パスワード
        $sanitaizePassword = mb_convert_kana($this->input('password'), 'n');

        $this->merge([
            'name' => $sanitaizeName,
            'email' => $sanitaizeMail,
            'phone_number' => $sanitaizePhone,
            'postal_code' => $sanitaizePostal,
            'password' => $sanitaizePassword,
        ]);
    }
}
