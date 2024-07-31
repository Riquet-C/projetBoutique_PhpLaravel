<x-layout>
    <x-slot name="content">
        <div class="container d-flex justify-content-around">
            <div class="card marg" style="width: 18rem;">
                <img src="https://www.artmaux.com/305-large_default/t-shirt-noir-neutre.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nom du produit</h5>
                    <h6 class="mb-0"><a href="{{url('/product/{id}') }} " class="text-body"><i
                                class="fas fa-long-arrow-alt-left me-2"></i>Fiche produit</a></h6>
                    <p class="card-text">Prix HT: 1500 €</p>
                    <p class="card-text text-decoration-line-through">Prix: 20000 €</p>
                    <p class="card-text">Réduction: 10%</p>
                    <p class="card-text">Nouveau Prix: 50000 €</p>
                    <p class="card-text">Poids: 5000 g</p>

                    <form action="#" method="POST">
                        <label for="quantity">Quantité</label>
                        <input type=number name="quantity" min="0" max="100" step="1" value="0"> *
                        <a href="{{ url('/cart') }}" class="btn btn-primary">Ajouter au Panier</a>
                        {{--                    <input style="background-color:powderblue; color:black" type="submit" value="Ajouter au Panier">--}}
                        <input type="hidden" name="categorie" value="#">
                        <input type="hidden" name="productName" value="#">
                    </form>
                </div>
            </div>
        </div>



    </x-slot>
</x-layout>
