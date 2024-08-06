<x-layout>
    <x-slot name="title">Panier</x-slot>
    <x-slot name="content">
        <section class="h-100 h-custom" style="background-color: #c9e1ff;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-start h-100">
                    <!-- Colonne des produits -->
                    <div class="col-12 col-lg-8">
                        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h1 class="fw-bold mb-0">Panier</h1>
                                    <h6 class="mb-0 text-muted">{{ count($cart->products) }} produit(s)</h6>
                                </div>
                                <hr class="my-4">
                                @foreach($cart->products as $product)
                                    <x-cart-product
                                        :picture="$product->pictureUrl"
                                        :name="$product->name"
                                        :description="$product->description"
                                        :price="($product->formattedPrice()*$product->pivot->quantity)"
                                        :quantity="$product->pivot->quantity"
                                        :id="$product->id"
                                    />
                                @endforeach
                                <hr class="my-4">
                                <div class="pt-4">
                                    <h6 class="mb-0">
                                        <a href="{{ url('/products') }}" class="text-body">
                                            <i class="fas fa-long-arrow-alt-left me-2"></i>Retour au catalogue
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Colonne du résumé -->
                    <div class="col-12 col-lg-4 mt-4 mt-lg-0">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-4">
                                <h3 class="fw-bold mb-4">Résumé</h3>
                                @foreach($cart->products as $product)
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="text-uppercase">{{ $product->name }}</h5>
                                        <h5>{{ $product->formattedPrice() * $product->pivot->quantity }} €</h5>
                                    </div>
                                @endforeach
                                <hr class="my-4">
                                <h5 class="text-uppercase mb-3">Shipping</h5>
                                <div class="mb-4">
                                    <select class="form-select">
                                        <option value="1">Rapide</option>
                                        <option value="2">Classique</option>
                                    </select>
                                </div>
                                <h5 class="text-uppercase mb-3">Code promo</h5>
                                <div class="mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="promoCode" class="form-control form-control-lg" />
                                        <label class="form-label" for="promoCode">Entrer votre code promotionnel</label>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <div class="d-flex justify-content-between mb-5">
                                    <h5 class="text-uppercase">Prix total</h5>
                                    <h5> €</h5>
                                </div>
                                <x-bouton1 url="/" label="Commander" class="btn btn-primary w-100"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
</x-layout>
