<x-layout>
<x-slot name="content">
    <x-slot name="title">Produit Spécifique</x-slot>



        <x-produitSeul
        image="{{$product->image}}"
        nomArticle="{{$product->nom}}"
        description="{{$product->description}}"
        prix="{{$product->prix}}"
        />








</x-slot>
</x-layout>
{{--page détail du produit--}}
