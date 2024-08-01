<x-layout>
    <x-slot name="content">
        <x-slot name="title">Produit Spécifique</x-slot>
        <x-detail :picture="$product->pictureUrl"
                  :name="$product->name"
                  :price="$product->price"
                  :description="$product->descProducts"
        />
    </x-slot>
</x-layout>
