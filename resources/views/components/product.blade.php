<div class="col-3 m-2">
    <div class="card marg" style="width: 18rem;">
        <img src={{$picture}} class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$titreCart}}</h5>

            <p class="card-text">Prix HT: {{$prixht}} €</p>
            <p class="card-text text-decoration-line-through">Prix: {{$prix}} €</p>
            @if($reduc)
            <p class="card-text">Réduction: {{$reduc}} %</p>
            <p class="card-text">Nouveau Prix: {{$newprix}} €</p>
            @endif
            <p class="card-text">Poids: {{$poid}} g</p>
            <a href="/product/{{ $id }}" class="btn btn-primary">Fiche produit</a>

            <hr>

            <form action="{{ route('cart.store') }}" method="POST">
                @csrf
                <label for="quantity">Quantité</label>
                <input type=number name="quantity" min="0" max="100" step="1" value="0">
                <button type="submit" value="Ajouter au Panier">Ajouter au Panier</button>
                <input type="hidden" name="id" value="{{$id}}">
            </form>
        </div>
    </div>
</div>
