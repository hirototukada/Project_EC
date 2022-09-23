<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規登録</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Auth/register.css">
</head>

<body class="bg-white">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <a href="/">
                    <div class='content-img'>画僧（ロゴ）</div>
                </a>
                <div>
                    <h1 class="text-center">新規会員登録</h1>
                </div>
                <div>
                    <form method="POST" action="{{ route('comfirm') }}">
                        @csrf
                        <div class="mb-3 row form-input">
                            <label for="name" class="col-md-3 col-form-label text-md-start">名前</label>
                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="email" class="col-md-3 col-form-label text-md-start">メールアドレス</label>
                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <div class="mb-3 row form-input">
                            <label for="phone_number" class="col-md-3 col-form-label text-md-start">電話番号</label>
                            <div class="col-md-9">
                                <input id="phone_number" type="text"
                                    class="form-control col-md-2 @error('phone_number') is-invalid @enderror"
                                    name="phone_number" value="{{ old('phone_number') }}" required
                                    autocomplete="phone_number" autofocus>
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="postal_code" class="col-md-3 col-form-label text-md-start">郵便番号</label>
                            <div class="col-md-9">
                                <input id="postal_code" type="text"
                                    class="form-control @error('postal_code') is-invalid @enderror" name="postal_code"
                                    value="{{ old('postal_code') }}" required autocomplete="postal_code" autofocus>
                                @error('postal_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <div class="mb-3 row form-input">
                            <label for="pref_id" class="col-md-3 col-form-label text-md-start">都道府県</label>
                            <div class="col-md-9">
                                <select class="form-select @error('pref_id') is-invalid @enderror"
                                    aria-label="Default select example" name="pref_id" required>
                                    <option value="">選択してください</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                @error('pref_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <div class="mb-3 row form-input">
                            <label for="city" class="col-md-3 col-form-label text-md-start">市区町村</label>
                            <div class="col-md-9">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                                    name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="town" class="col-md-3 col-form-label text-md-start">番地</label>
                            <div class="col-md-9">
                                <input id="town" type="text"
                                    class="form-control col-md-2 @error('town') is-invalid @enderror" name="town"
                                    value="{{ old('town') }}" required autocomplete="town" autofocus>
                                @error('town')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="building" class="col-md-3 col-form-label text-md-start">建物名</label>
                            <div class="col-md-9">
                                <input id="building" type="text"
                                    class="form-control col-md-2 @error('building') is-invalid @enderror"
                                    name="building" value="{{ old('building') }}" required autocomplete="building"
                                    autofocus>
                                @error('building')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="email" class="col-md-3 col-form-label text-md-start">パスワード</label>
                            <div class="col-md-9">
                                <input id="password" type="password"
                                    class="form-control  @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <div class="row mb-3 mt-5">
                            <div>
                                <button type="submit" class="btn btn-primary w-100 h-4">
                                    登録内容の確認へ
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
</body>
@include('common.footer')

</html>
