<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="d-flex flex-column h-100">
        <div class="header">
            <div class="d-flex bg-light p-4 justify-content-center flex-column h-100">
                <div class="d-flex justify-content-center">
                    <img src="/img/semalt-bl-logo.png" alt="">
                </div>
                <div class="d-flex justify-content-center">
                    <h1>Тестовое задание</h1>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center align-self-stretch">
            <div class="d-flex flex-column col-3 d-flex p-2 w-100">
                @yield('sidebar')
            </div>
            <div class="col d-flex flex-column p-2 bg-light m-3 rounded">
                @yield('content')
            </div>
        </div>
        <div class="footer bg-light d-flex justify-content-center align-items-center p-3">
                <a href="https://t.me/PaulTh3Octopus"><h4>@PaulTh3Octopus</h4></a>
        </div>
    </div>
</body>

</html>