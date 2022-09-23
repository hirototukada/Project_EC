<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登録完了</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Auth/fin.css">
</head>

<body class="bg-white">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <a href="/">
                    <div class='content-img'>画僧（ロゴ）</div>
                </a>
                <div class="mb-5">
                    <h1 class="text-center">会員登録完了</h1>
                </div>
                <div class="mt-3 mb-3">
                    <p class="text-center">ご登録頂きありがとうございます！</p>
                </div>
                <div class="w-50 m-auto">
                    <a href="/login">
                        <button type="button" class="btn btn-dark w-100 h-5 mt-3">
                            ログインへ
                        </button>
                    </a>
                </div>
                <div class="row mb-3">
                </div>
            </div>
        </div>
    </div>
</body>
<div class="mt-5">
    @include('common.footer')
</div>

</html>
