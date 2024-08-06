<x-layout>
    <x-slot name="content">
        <x-slot name="title">Produit Spécifique</x-slot>
        <x-detail
            :picture="$products->pictureUrl"
            :name="$products->name"
            :price="$products->formattedPrice()"
            :description="$products->descProducts"
        />
    </x-slot>
</x-layout>
