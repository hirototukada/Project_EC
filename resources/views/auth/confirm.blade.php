<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>確認画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Auth/comfirm.css">
</head>

<body class="bg-white">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <a href="/">
                    <div class='content-img'>画僧（ロゴ）</div>
                </a>
                <div>
                    <h1 class="text-center mb-3">新規会員登録</h1>
                    <p class="text-center mb-3">登録内容をご確認ください。変更はマイページから行えます。</p>
                </div>
                <div>
                    <form method="POST" action="{{ route('fin') }}">
                        @csrf
                        <div class="mb-3 row form-inwhput">
                            <label for="name" class="col-md-3 col-form-label text-md-start">名前</label>
                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ $name }}" required autocomplete="name" readonly>
                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="email" class="col-md-3 col-form-label text-md-start">メールアドレス</label>
                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ $email }}" required autocomplete="email" readonly>
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="phone_number" class="col-md-3 col-form-label text-md-start">電話番号</label>
                            <div class="col-md-9">
                                <input id="phone_number" type="text"
                                    class="form-control col-md-2 @error('phone_number') is-invalid @enderror"
                                    name="phone_number" value="{{ $phone_number }}" required autocomplete="phone_number"
                                    readonly>
                            </div>
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="postal_code" class="col-md-3 col-form-label text-md-start">郵便番号</label>
                            <div class="col-md-9">
                                <input id="postal_code" type="text"
                                    class="form-control @error('postal_code') is-invalid @enderror" name="postal_code"
                                    value="{{ $postal_code }}" required autocomplete="postal_code" readonly>
                            </div>
                            @error('postal_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="pref_id" class="col-md-3 col-form-label text-md-start">都道府県</label>
                            <div class="col-md-9">
                                <input id="pref_id" type="text"
                                    class="form-control @error('pref_id') is-invalid @enderror" name="pref_id"
                                    value="{{ $pref_id }}" required autocomplete="pref_id" readonly>
                            </div>
                            @error('pref_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="city" class="col-md-3 col-form-label text-md-start">市区町村</label>
                            <div class="col-md-9">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                                    name="city" value="{{ $city }}" required autocomplete="city" readonly>
                            </div>
                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="town" class="col-md-3 col-form-label text-md-start">番地以外</label>
                            <div class="col-md-9">
                                <input id="town" type="text"
                                    class="form-control col-md-2 @error('town') is-invalid @enderror" name="town"
                                    value="{{ $town }}" required autocomplete="town" readonly>
                            </div>
                            @error('town')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="building" class="col-md-3 col-form-label text-md-start">建物</label>
                            <div class="col-md-9">
                                <input id="building" type="text"
                                    class="form-control col-md-2 @error('building') is-invalid @enderror"
                                    name="building" value="{{ $building }}" required autocomplete="building" readonly>
                            </div>
                            @error('building')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="email" class="col-md-3 col-form-label text-md-start">パスワード</label>
                            <div class="col-md-9">
                                <input id="password" type="password"
                                    class="form-control  @error('password') is-invalid @enderror" name="password"
                                    value="{{ $password }}" required autocomplete="current-password" readonly>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row mb-3 mt-5">
                            <div>
                                <button type="submit" class="btn btn-primary w-100 h-5">
                                    登録
                                </button>
                            </div>
                            <div class="mt-3">
                                <button type="button" onClick="history.back()" class="btn btn-outline-dark w-100 h-4">
                                    登録情報を修正する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row mb-3">
                </div>
            </div>
            <div>
            </div>
        </div>
    </div>
    </div>
    @include('common.footer')
</body>

</html>
