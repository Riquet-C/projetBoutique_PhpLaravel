<nav class="navbar navbar-expand-lg fixed-top navbar-scroll shadow-2 border-bottom" style="background-color: #ffede7;">
    <div class="container">
        <a class="navbar-brand" href="/">{{ $title }}</a>
        <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="d-flex justify-content-start align-items-center">
        <i class="fas fa-bars"></i>
      </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link px-3" href="{{ url('/products') }}">Catalogue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/productByName') }}">Par nom</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/productByPrice') }}">Prix croissant</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link px-3" href="{{ url('/productByCategories') }}">Par catégories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/backoffice') }}">Administrateur</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('cart')}}">Panier</a>
                </li>
            </ul>

            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a class="nav-link pe-3" href="{{ url('/products') }}">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/backoffice') }}">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ps-3" href="{{ route('cart')}}">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
