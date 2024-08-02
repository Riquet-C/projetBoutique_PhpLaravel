<x-layout>
    <x-slot name="title">Accueil</x-slot>
    <x-slot name="content">

        <div class="container">
            <div class="row justify-content-around align-content-around vh-100">
                <div class="col-md-8 col-md-offset-2">
                    <div class="fresh-table full-color-azure">
                        <table id="fresh-table" class="table">
                            <thead>
                            <th data-field="id">ID</th>
                            <th data-field="name" data-sortable="true">Name</th>
                            <th data-field="price" data-sortable="true">prix (en centimes)</th>
                            <th data-field="description" data-sortable="true">description</th>
                            <th data-field="image">Image</th>
                            <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">
                                Actions
                            </th>
                            </thead>
                            <tbody>
                            @foreach($product as $key)
                                <tr>
                                    <td>{{$key->id}}</td>
                                    <td>{{$key->name}}</td>
                                    <td>{{$key->price}}</td>
                                    <td>{{$key->descProducts}}</td>
                                    <td>{{$key->pictureUrl}}</td>
                                    <td>
                                        <a href="/backoffice/{{$key->id}}/delete">Supprimer</a>
                                        <a href="/backoffice/{{$key->id}}/modify">Modifier</a>
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

