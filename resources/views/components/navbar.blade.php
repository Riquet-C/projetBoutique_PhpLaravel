<nav class="navbar navbar-expand-lg fixed-top navbar-scroll shadow-2 border-bottom" style="background-color: #ffede7;">
    <div class="container-fluid">
        <div class="container">
            <a class="navbar-brand" href="/">{{ $title }}</a>
            <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01"
                    aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="d-flex justify-content-start align-items-center">
                <i class="fas fa-bars"></i>
              </span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Catalogue
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="nav-link px-3" href="{{ url('/products') }}">Catalogue</a>
                            <a class="nav-link px-3" href="{{ url('/productByName') }}">Par nom</a>
                            <a class="nav-link px-3" href="{{ url('/productByPrice') }}">Prix croissant</a>
                            <a class="nav-link px-3" href="{{ url('/productByCategories') }}">Par catégories</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/backoffice') }}">Administrateur</a>
                    </li>
                </ul>
            </div>
        </div>
        <div>
            <a href="{{ route('cart')}}" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart"
                     viewBox="0 0 16 16">
                    <path
                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                </svg>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-light bg-success border">
    {{ $total }}
                </span>
            </a>
        </div>

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

</nav>
