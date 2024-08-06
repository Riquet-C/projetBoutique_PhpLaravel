<x-layout>
    <x-slot name="title">Catalogue</x-slot>
    <x-slot name="content" >
        <div class=" row justify-content-center">
            @foreach($products as $key => $value)
                <x-product :picture="$value->pictureUrl"
                           :titreCart="$value->name"
                           :prixht="$value->priceExcludingVAT()"
                           :prix="$value->formattedPrice()"
                           :reduc="$value->discount"
                           :newprix="$value->discountedPrice()"
                           :poid="$value->weight"
                           :id="$value->id"
                />
            @endforeach
        </div>
    </x-slot>
</x-layout>
