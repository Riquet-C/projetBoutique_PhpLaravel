
<div class="col-lg-3 col-md-4 col-sm-6 mb-4 m-2">
    <div class="card h-100 shadow-sm">
        <img src="{{ $picture }}" class="card-img-top" alt="Product Image">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $titreCart }}</h5>
            <p class="card-text">Prix HT: {{ $prixht }} €</p>
            <p class="card-text text-muted text-decoration-line-through">Prix: {{ $prix }} €</p>
            @if($reduc)
                <p class="card-text text-danger">Réduction: {{ $reduc }} %</p>
                <p class="card-text font-weight-bold">Nouveau Prix: {{ $newprix }} €</p>
            @endif
            <p class="card-text">Poids: {{ $poid }} g</p>
            <a href="/products/{{ $id }}" class="btn btn-primary mt-auto">Fiche produit</a>
            <hr>
            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="quantity">Quantité</label>
                    <input type="number" name="quantity" min="0" max="100" step="1" value="0" class="form-control mb-2">
                </div>
                <input type="hidden" name="id" value="{{ $id }}">
                <button type="submit" class="btn btn-success btn-block">Ajouter au Panier</button>
            </form>
        </div>
    </div>
</div>
