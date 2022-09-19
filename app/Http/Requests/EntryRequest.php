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
            'email' => ['required'],
            'postal_code' => ['required', 'numeric'],
            'pref_id' => ['required'],
            'city' => ['required'],
            'addres' => ['required'],
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
        $sanitaizeMail = mb_convert_kana($sanitaizeMail, 'r');
        $sanitaizeMail = mb_convert_kana($sanitaizeMail, 'n');

        // 郵便番号
        $sanitaizePostal = str_replace(" ", "", $this->input('postal_code'));
        $sanitaizePostal = mb_convert_kana($sanitaizePostal, 'n');

        // パスワード
        $sanitaizePassword = mb_convert_kana($this->input('password'), 'n');

        $this->merge([
            'name' => $sanitaizeName,
            'email' => $sanitaizeMail,
            'postal_code' => $sanitaizePostal,
            'password' => $sanitaizePassword,
        ]);
    }
}
