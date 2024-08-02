<!DOCTYPE html>
<html>
<head>
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="min-vh-100">
<header>
    <x-navbar title="PetsLife"/>
</header>
{{$content}}
<footer>
    <!-- Copyright -->
    <div class="fixed-bottom text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright
    </div>
    <!-- Copyright -->
    <h3>Condition générale</h3>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</footer>
</body>
</html>

{{--architecture du site--}}
