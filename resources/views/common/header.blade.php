<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ヘッダー</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">logo</a>
          <form class="d-flex">
            <a href="/login"><button class="btn btn-outline-success" type="button">Login</button></a>
            <button class="btn btn-outline-success" type="submit">カート画像</button>
          </form>
        </div>
      </nav>
</body>
</html>
