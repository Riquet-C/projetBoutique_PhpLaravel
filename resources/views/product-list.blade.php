<x-layout>
    <x-slot name="title">Catalogue</x-slot>
    <x-slot name="content">

{{-- @php(var_dump($product))--}}
<div class="container d-flex justify-content-around">
        @foreach($product as $value)
<x-product
        name="{{$value->name}}"
{{--        prixht="500"--}}
        prix="{{$value->price}}"
        reduc="10%"
{{--        newprix="250000"--}}
        poid="{{$value->weight}}"

        imageURL="{{$value->picture}}"
        id="{{$value->id}}"
/>
        @endforeach
</div>
    </x-slot>
</x-layout>
