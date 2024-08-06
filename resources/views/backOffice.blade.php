@php use App\Models\Products; @endphp
<x-layout>
    <x-slot:title>Administrateur</x-slot:title>
    <x-slot:content>
        <div class="container d-flex flex-column justify-content-center align-items-center mt-5">
            <div class="row ">
                <div class="">
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
                                        <form action="/backoffice/{{$key->id}}/delete" method="POST" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                        <a href="/backoffice/{{$key->id}}/modify">Modifier</a>
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
        </div>

    </x-slot:content>
</x-layout>
