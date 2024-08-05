<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Boutons à gauche -->
        <div class="d-flex">
            <a class="nav-link" href="{{ url('/products') }}">Product</a>
            <a class="nav-link" href="{{ url('/productByName') }}">ProductByName</a>
            <a class="nav-link" href="{{ url('/productByPrice') }}">ProductByPrice</a>
            <a class="nav-link" href="{{ url('/productByCategories') }}">ProductByCategory</a>
        </div>

        <!-- Titre centré -->
        <a class="navbar-brand mx-auto" href="/" style="position: absolute; left: 50%; transform: translateX(-50%);">{{ $title }}</a>

        <!-- Barre de recherche et bouton Panier à droite -->
        <div class="ml-auto d-flex align-items-center">
            <a class="nav-link" href="{{ url('/backoffice') }}">Administrateur</a>
            <a class="nav-link" href="{{ route('cart')}}">Panier</a>
        </div>
    </div>
</nav>
