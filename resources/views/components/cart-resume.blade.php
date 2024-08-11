@props([
    /** @var \App\Models\Cart */
    'cart'
])

<div {{ $attributes->class(['col-12 col-lg-4 mt-4 mt-lg-0']) }}>
    <div class="card" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="card-body p-4">
            <h3 class="fw-bold mb-4" style="color: #333;">Résumé</h3>
            @foreach($cart->products as $product)
                <div class="d-flex justify-content-between mb-3">
                    <h5 class="text-uppercase">{{ $product->name }} x {{ $product->pivot->quantity }}</h5>
                    <h5>{{ $product->formattedPrice() * $product->pivot->quantity }} €</h5>
                </div>
            @endforeach
            <hr class="my-4" style="border-top: 1px solid #ddd;">
            <h5 class="text-uppercase mb-3">Livraison</h5>
            <div class="mb-4">
                <select class="form-select">
                    <option value="1">Rapide</option>
                    <option value="2">Classique</option>
                </select>
            </div>
            <hr class="my-4" style="border-top: 1px solid #ddd;">
            <div class="d-flex justify-content-between mb-5">
                <h5 class="text-uppercase">Prix total</h5>
                <h5>{{ $cart->calculateTotal() }} €</h5>
            </div>
            <x-bouton1 url="/order" label="Commander" class="btn btn-primary w-100"/>
        </div>
    </div>
</div>
