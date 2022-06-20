<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap no Laravel</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
    </head>
    <body class="d-flex flex-column vh-100 bg-dark justify-content-center align-items-center">
        <h1 class="text-light mb-4">UTILIZANDO BOOTSTRAP</h1>
        <button class="btn btn-lg btn-success" onclick="alert('Bootstrap')">Bootstrap</button>
    </body>
</html>
