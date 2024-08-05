<x-layout>
    <x-slot name="title">Accueil</x-slot>
    <x-slot name="content">
        <!-- Container for the table -->
        <div class="container my-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10">
                    <div class="table-responsive">
                        <table id="fresh-table" class="table table-striped table-hover">
                            <thead class="thead-dark">
                            <tr>
                                <th data-field="id">ID</th>
                                <th data-field="nom" data-sortable="true">Name</th>
                                <th data-field="prix" data-sortable="true">Prix (en centimes)</th>
                                <th data-field="description" data-sortable="true">Description</th>
                                <th data-field="image">Image</th>
                                <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $key)
                                <tr>
                                    <td>{{$key->id}}</td>
                                    <td>{{$key->nom}}</td>
                                    <td>{{$key->prix}}</td>
                                    <td>{{$key->description}}</td>
                                    <td><img src="{{$key->image}}" alt="Product Image" class="img-thumbnail" style="max-width: 100px;"></td>
                                    <td>
                                        <a href="/backoffice/{{$key->id}}/delete" class="btn btn-danger btn-sm">Supprimer</a>
                                        <a href="/backoffice/{{$key->id}}/modify" class="btn btn-warning btn-sm">Modifier</a>
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
