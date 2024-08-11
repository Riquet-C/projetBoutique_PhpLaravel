<x-layout>
    <x-slot name="title">Panier</x-slot>
    <x-slot name="content">
        <section class="h-100 h-custom" style="background-color: #ffede7;">
            {{--            Message modification--}}
            <div class="d-flex justify-content-center">
                @if(session('update'))
                    <div class="alert alert-success col-6 text-center" role="alert">
                        {{session('update')}}
                    </div>
                @elseif (session('delete'))
                    <div class="alert alert-success col-6 text-center" role="alert">
                        {{session('delete')}}
                    </div>
                @elseif (session('add'))
                    <div class="alert alert-success col-6 text-center" role="alert">
                        {{session('add')}}
                    </div>
                @endif
                {{--            Message modification--}}
            </div>
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-start h-100">
                    <!-- Colonne des produits -->
                    <div class="col-12 col-lg-8">
                        <div class="card card-registration card-registration-2"
                             style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h1 class="fw-bold mb-0" style="color: #333;">Panier</h1>
                                    <h6 class="mb-0 text-muted">{{ count($cart->products) }} produit(s)</h6>
                                </div>
                                <hr class="my-4" style="border-top: 1px solid #ddd;">
                                @foreach($cart->products as $product)
                                    <x-cart-product
                                        :picture="$product->pictureUrl"
                                        :name="$product->name"
                                        :description="$product->description"
                                        :price="($product->formattedPrice())"
                                        :quantity="$product->pivot->quantity"
                                        :id="$product->id"
                                    />
                                @endforeach
                                <hr class="my-4" style="border-top: 1px solid #ddd;">
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
                    <x-cart-resume :cart="$cart"/>
                </div>
            </div>
        </section>
    </x-slot>
</x-layout>
