<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-comm project</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>

<style>
    .custom-login {
        height: 500px;
        padding-top: 100px;
        margin-right: 300px;
    }

    img.slider-img {
        height: 400px !important;

    }

    .custom-product {
        height: 600px;
    }

    .slider-text {
        background-color: gray !important;
        opacity: 0.5;
    }

    .trending-image {
        height: 100px;

    }

    .trending-item {
        float: left;
        width: 20%;
    }

    .trending-wrapper {
        margin: 50px;
    }

    .detail-img {
        height: 200px;
    }

    .cart-list-devider {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>

</html>