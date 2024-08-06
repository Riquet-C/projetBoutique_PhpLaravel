<x-layout>
    <x-slot name="title">Accueil</x-slot>
    <x-slot name="content">

        <div class="container">

            <div class="row justify-content-around align-content-around vh-100">

                <div class="col-md-10 col-md-offset-2">
                    <x-bouton1
                        url="{{route('ajoutunproduit')}}"
                        label="Ajouter un produit"
                    />
                    <div class="fresh-table full-color-azure">
                        <table id="fresh-table" class="table">
                            <thead>
                            <th data-field="id">ID</th>
                            <th data-field="categorie" data-sortable="true">Catégorie</th>
                            <th data-field="name" data-sortable="true">Name</th>
                            <th data-field="price" data-sortable="true">prix (en centimes)</th>
                            <th data-field="poid">Poid</th>
                            <th data-field="reduction" data-formatter="operateFormatter" data-events="operateEvents">
                                Reduction en %
                            </th>
                            <th data-field="image">Image</th>
                            <th data-field="clean">Clean 1=oui 0=non</th>
                            </thead>
                            <tbody>
                            @foreach($product as $key)
                                <tr>
                                    <td>{{$key->id}}</td>
                                    <td>{{$key->categorie}}</td>
                                    <td>{{$key->name}}</td>
                                    <td>{{$key->price}}</td>
                                    <td>{{$key->weight}}</td>
                                    <td>{{$key->discount}}</td>
                                    <td>{{$key->picture}}</td>
                                    <td>{{$key->clean}}</td>
                                    <td>
                                        <form method="post" action="{{url('/backoffice/delete',$key->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"> Supprimer </button>
                                        </form>

                                        <a href="{{route('updateproduit',$key->id)}}">Modifier</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>

