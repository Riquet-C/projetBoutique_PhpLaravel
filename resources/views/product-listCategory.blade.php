<x-layout>
    <x-slot name="title">Catalogue</x-slot>
    <x-slot name="content">
        @foreach($categories as $category)
            <div class="category-section">
                <h2>{{$category->nameCategory}}</h2>
                <div class=" row justify-content-center">
                    @foreach($category->products as $product)
                        <x-product :picture="$product->pictureUrl"
                                   :titreCart="$product->name"
                                   :prixht="$product->priceExcludingVAT($product->price)"
                                   :prix="$product->formatPrice($product->price)"
                                   :reduc="$product->discount"
                                   :newprix="$product->discountedPrice($product->price, $product->discount)"
                                   :poid="$product->weight"
                                   :id="$product->id"
                        />
                    @endforeach
                    @endforeach
                </div>
            </div>
    </x-slot>
</x-layout>
