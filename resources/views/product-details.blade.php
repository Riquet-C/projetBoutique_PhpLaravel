<x-layout>
<x-slot name="content">
    <x-slot name="title">Produit Spécifique</x-slot>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card" style="width: 24rem;">
        <img src="https://www.artmaux.com/305-large_default/t-shirt-noir-neutre.jpg" class="card-img-top" alt="T-shirt noir neutre">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Voici le plus beau t-shirt de France, il est souple et en plus il permet d'attirer un maximum de gens du même genre ou non !</p>
            <p>Prix: 40 €</p>
            <a href="{{ url('/cart') }}" class="btn btn-primary">Ajouter au Panier</a>

        </div>
    </div>
</div>
</x-slot>
</x-layout>
