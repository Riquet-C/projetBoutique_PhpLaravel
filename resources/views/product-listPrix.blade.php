<x-layout>
    <x-slot name="title">Catalogue</x-slot>
    <x-slot name="content">

        @foreach($products as $key => $value)





            <x-products img="{{$value->image}}"
                        titreCart="{{$value->nom}}"
                        prixht="500"
                        prix="{{$value->prix}}"
                        reduc="{{$value->discount}}"
                        newprix="250000"
                        poid="{{$value->poids}}"
                        id="{{$value->id}}"
                        auteur="{{$value->auteur}}"
            />
        @endforeach

    </x-slot>
</x-layout>
{{--page des produits--}}
