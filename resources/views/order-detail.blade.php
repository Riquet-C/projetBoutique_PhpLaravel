@php use App\Models\Products;
 use App\Models\Orders; @endphp
<x-layout>
    <x-slot:title>Detail des commandes</x-slot:title>
    <x-slot:content>
        <div class="container d-flex flex-column justify-content-center align-items-center mt-5">
            <div class="row ">
                <div class="">
                    @foreach($orders as $order)
                        <h3>Commande n°{{$order->id}}</h3>
                        <div class="fresh-table full-color-azure">
                            <table id="fresh-table" class="table">
                                <thead>
                                    <th>Produit</th>
                                    <th>Quantité commandée</th>
                                    <th>Prix unitaire</th>
                                </thead>
                                <tbody>
                                @foreach($order->products as $product)
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->pivot->quantity}}</td>
                                        <td>{{$product->formattedPrice()}}</td>
                                    </tr>
                                @endforeach
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </x-slot:content>
</x-layout>
