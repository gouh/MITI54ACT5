<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizzeria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-12">
            <h1>¡Bienvenido a <strong>mi pizza</strong>!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consectetur dolorum libero minus numquam obcaecati, provident qui reprehenderit sapiente. Atque, autem dignissimos enim eveniet iste libero perferendis quia reprehenderit voluptate!</p>
        </div>
    </div>
</div>

<div class="container mb-5 mt-5">
    @include('flash-message')
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
</body>
</html>
