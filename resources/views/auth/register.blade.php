<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規登録</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
</head>

<body class="bg-white">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class='content-img'>画僧（ロゴ）</div>
                <div>
                    <h1 class="text-center">新規登録</h1>
                </div>
                <div>
                    <form method="POST" action="{{ route('signUp') }}">
                        @csrf
                        <div class="mb-3 row form-input">
                            <label for="email" class="col-md-4 col-form-label text-md-end">メールアドレス</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="name" class="col-md-4 col-form-label text-md-end">名前</label>

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="postal_code" class="col-md-4 col-form-label text-md-end">郵便番号</label>

                            <input id="postal_code" type="text"
                                class="form-control @error('postal_code') is-invalid @enderror" name="postal_code"
                                value="{{ old('postal_code') }}" required autocomplete="postal_code" autofocus>

                            @error('postal_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="pref_id" class="col-md-4 col-form-label text-md-end">都道府県</label>

                            <select class="form-select" aria-label="Default select example">
                                <option selected>選択してください</option>
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
                        <div class="mb-3 row form-input">
                            <label for="city" class="col-md-4 col-form-label text-md-end">市区町村</label>

                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                                name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="addres" class="col-md-4 col-form-label text-md-end">番地以降</label>

                            <input id="addres" type="text" class="form-control @error('addres') is-invalid @enderror"
                                name="addres" value="{{ old('addres') }}" required autocomplete="addres" autofocus>

                            @error('addres')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3 row form-input">
                            <label for="email" class="col-md-4 col-form-label text-md-end">パスワード</label>

                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
