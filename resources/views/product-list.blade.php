<x-layout>
    <x-slot name="title">Catalogue</x-slot>
    <x-slot name="content">
        <div class="row m-2 justify-content-center">
            @foreach($products as $key => $value)
                <x-product :picture="$value->pictureUrl"
                           :titreCart="$value->name"
                           prixht="500"
                           :prix="$value->price"
                           :reduc="$value->discount"
                           newprix="250000"
                           :poid="$value->weight"
                           :id="$value->id"
                />
            @endforeach
        </div>
    </x-slot>
</x-layout>
