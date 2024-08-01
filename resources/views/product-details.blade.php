<x-layout>
    <x-slot name="title">Catalogue</x-slot>
    <x-slot name="content">

        {{-- @php(var_dump($product))--}}
        <div class="container d-flex justify-content-around">

                <x-product
                    name="{{$product->name}}"
                    {{--        prixht="500"--}}
                    prix="{{$product->price}}"
                    reduc="10%"
                    {{--        newprix="250000"--}}
                    poid="{{$product->weight}}"

                    imageURL="{{$product->picture}}"
                    id="{{$product->id}}"
                />

        </div>
    </x-slot>
</x-layout>
