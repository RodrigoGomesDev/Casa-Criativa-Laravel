<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="https://image.flaticon.com/icons/svg/1767/1767833.svg" />
    <link href="{{ URL::asset('css/stylesheet.css') }}" rel="stylesheet" type="text/css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Casa Criativa</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    {{-- <div id="container" class="container-home">     --}}
        @yield('content')
    {{-- </div> --}}
    @extends('modal')

    <script type="text/javascript" src="{{ URL::asset('js/javascript.js') }}"></script>
</body>
</html>