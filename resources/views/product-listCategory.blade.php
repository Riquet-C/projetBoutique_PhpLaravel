<x-layout>
    <x-slot name="title">Catalogue</x-slot>
    <x-slot name="content">
        @foreach($categories as $category)
            <div class="category-section row justify-content-center">
                <div class="container text-center">
                <h2>{{$category->nameCategory}}</h2>
                </div>
                <div class=" row justify-content-center">
                    @foreach($category->products as $product)
                        <x-product :picture="$product->pictureUrl"
                                   :titreCart="$product->name"
                                   :prixht="$product->priceExcludingVAT()"
                                   :prix="$product->formattedPrice()"
                                   :reduc="$product->discount"
                                   :newprix="$product->discountedPrice()"
                                   :poid="$product->weight"
                                   :id="$product->id"
                        />
                    @endforeach
                    @endforeach
                </div>
            </div>
    </x-slot>
</x-layout>
