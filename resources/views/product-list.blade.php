<x-layout>
    <x-slot name="title">Catalogue</x-slot>
    <x-slot name="content" >
        <div class=" row justify-content-center">
            @foreach($products as $key => $value)
                <x-product :picture="$value->pictureUrl"
                           :titreCart="$value->name"
                           :prixht="$value->priceExcludingVAT($value->price)"
                           :prix="$value->formatPrice($value->price)"
                           :reduc="$value->discount"
                           :newprix="$value->discountedPrice($value->price, $value->discount)"
                           :poid="$value->weight"
                           :id="$value->id"
                />
            @endforeach
        </div>
    </x-slot>
</x-layout>
