<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Boutons à gauche -->
        <div class="d-flex">
            <a class="nav-link" href="{{ url('/product') }}">Product</a>
            <a class="nav-link" href="{{ url('/product/{id}') }}">Produit spécifique</a>
        </div>

        <!-- Titre centré -->
        <a class="navbar-brand mx-auto" href="/" style="position: absolute; left: 50%; transform: translateX(-50%);">{{ $title }}</a>

        <!-- Barre de recherche et bouton Panier à droite -->
        <div class="ml-auto d-flex align-items-center">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
            <a class="nav-link" href="{{ url('/cart') }}">Panier</a>
        </div>
    </div>
</nav>
{{--Navbar--}}
