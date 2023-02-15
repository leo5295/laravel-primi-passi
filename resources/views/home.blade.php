<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nome_file.css') }}">
    <title>Home</title>
</head>

<body>
    <h1>Hello world!</h1>
    <a href="{{ route('chi-siamo') }}">Chi siamo?</a>
    <a href="{{ route('shop') }}">Shop</a>
    <a href="{{ route('info') }}">info</a>
</body>

</html>