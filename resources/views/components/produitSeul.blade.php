<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card" style="width: 24rem;">
        <img src="{{$image}}" class="card-img-top" alt="Image du manga">
        <div class="card-body">
            <h5 class="card-title">{{$nomArticle}}</h5>
            <p class="card-text">{{$description}}</p>
            <p>Prix: {{$prix}} €</p>
            <a href="{{ url('/cart') }}" class="btn btn-primary">Ajouter au Panier</a>

        </div>
    </div>
</div>
