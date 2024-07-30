<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Mon Application')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body class="min-vh-100">
{{--@include('components.header');--}}
<section class="content-section bg-light vh-100" id="about">
    <div class="container px-4 px-lg-5 text-center align-content-center">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="">
                <h2>Bienvenue chez Petslife!</h2>
                <p class="lead mb-5">
                    Où vous pourrez trouver tout ce qu'il faut pour votre toutou !!!!!
                </p>
                <a class="btn btn-dark btn-xl" href="{{url('/product')}}">Voir le catalogue</a>
            </div>
        </div>
    </div>
</section>
{{--@include('components.footer');--}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
