<div class="container d-flex justify-content-around">
    <div class="card marg" style="width: 18rem;">
        <img src="{{$img}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$titreCart}}</h5>
            <a href= '/products/{{$id}}'  class="btn btn-primary">Fiche produit</a>
            <p class="card-text">Prix HT: {{$prixht}} €</p>
            <p class="card-text text-decoration-line-through">Prix: {{$prix}} €</p>
            <p class="card-text">Réduction: {{$reduc}}</p>
            <p class="card-text">Nouveau Prix: {{$newprix}} €</p>
            <p class="card-text">Poids: {{$poid}} g</p>

            @if($auteur)
            <p class="card-text">Auteur: {{$auteur}}</p>

            @endif

            <form action="#" method="POST">
                <label for="quantity">Quantité</label>
                <input type=number name="quantity" min="0" max="100" step="1" value="0">
                <a href="{{ route('ajouterPanier') }}" class="btn btn-primary">Ajouter au Panier</a>
                {{--                    <input style="background-color:powderblue; color:black" type="submit" value="Ajouter au Panier">--}}
                <input type="hidden" name="categorie" value="#">
                <input type="hidden" name="productName" value="#">
            </form>
        </div>
    </div>
</div>
{{--la carte d'un produit--}}
