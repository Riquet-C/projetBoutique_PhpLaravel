@php use App\Models\Products; @endphp
<x-layout>
    <x-slot:title>Administrateur</x-slot:title>
    <x-slot:content>
        <div class="container d-flex flex-column justify-content-center align-items-center mt-5">
            <div class="row ">
                <div class="">
                    <h2>Articles en vente:</h2>
                    <div class="fresh-table full-color-azure">
                        <table id="fresh-table" class="table">
                            <thead>
                            <th data-field="id">ID</th>
                            <th data-field="name" data-sortable="true">Name</th>
                            <th data-field="price" data-sortable="true">prix (en centimes)</th>
                            <th data-field="description" data-sortable="true">description</th>
                            <th data-field="image">Image</th>
                            <th data-field="category">CategoryId</th>
                            <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">
                                Actions
                            </th>
                            </thead>
                            <tbody>
                            @foreach($products as $key)
                                <tr>
                                    <td>{{$key->id}}</td>
                                    <td>{{$key->name}}</td>
                                    <td>{{$key->price}}</td>
                                    <td>{{$key->descProducts}}</td>
                                    <td>{{$key->pictureUrl}}</td>
                                    <td>{{$key->categoryId}}</td>
                                    <td>
                                        <div class="d-flex">
                                        <form action="/backoffice/{{$key->id}}/delete" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link btn-toolbar text-danger" >
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3"
                                                                                   viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                </svg>
                                            </button>
                                        </form>
                                            <div>|</div>

                                        <a href="/backoffice/{{$key->id}}/modify" class="btn btn-link btn-toolbar text-info">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                                            </svg>
                                        </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <x-bouton1 url="{{route('addForm')}}" label="Ajouter un article"></x-bouton1>
                </div>
            </div>
        </div>
       <div class="container d-flex flex-column justify-content-center align-items-center mt-5">
            <div class="row ">
                <div class="">
                    <h2>Commandes:</h2>
                    <div class="fresh-table full-color-azure">
                        <table id="orders-table" class="table">
                            <tbody>
                            <thead>
                            <tr>
                                <th data-field="id">Order ID</th>
                                <th data-field="user_id" data-sortable="true">User ID</th>
                                <th data-field="total_price" data-sortable="true">Prix total commande</th>
                                <th data-field="created_at" data-sortable="true">Date</th>
                                <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->user_id}}</td>
                                    <td>{{$order->totalPrice}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td><a href="{{route('detail', $order->id)}}">Voir détails</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </x-slot:content>
</x-layout>
