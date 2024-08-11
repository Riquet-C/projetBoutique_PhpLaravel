<!DOCTYPE html>
<html>
<head>
    <title>{{$title}}</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="" style="background-color: #ffede7;">


<header>
    <x-navbar title="PetsLife"/>
</header>
<div class="container-fluid" style="margin-top:70px;min-height: calc(100vh - 250px)">

{{$content}}

</div>

<footer class="footer text-center text-lg-start mt-2" style="background-color: #ffede7;">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">{{ $title }}</h5>
                <p>
                    Découvrez notre gamme complète de produits et services. Nous sommes dédiés à vous offrir la meilleure expérience utilisateur.
                </p>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2024 {{ $title }}. Tous droits réservés.
    </div>
    <!-- Copyright -->
</footer>
</body>

</html>


