<x-layout>
    <x-slot name="title">Ajouter un produit</x-slot>
    <x-slot name="content">

        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Ajouter un produit</h2>
                </div>
                <div class="card-body">
{{--                    afficher les erreurs en cas de non remplissage des condiction requires--}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
{{--                    fin affichage erreur--}}

                    <form action="{{route('ajoutunproduit')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" name="id"  placeholder="id">
                        </div>
                        <div class="form-group">
                            <label for="categorie">Catégorie</label>
                            <input type="text" class="form-control" name="categorie"  placeholder="...">
                        </div>
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" name="name"  placeholder="...">
                        </div>
                        <div class="form-group">
                            <label for="price">Prix</label>
                            <input type="text" class="form-control" name="price" placeholder="... cent">
                        </div>
                        <div class="form-group">
                            <label for="weight">Poids</label>
                            <input type="text" class="form-control" name="weight" placeholder="... g">
                        </div>
                        <div class="form-group">
                            <label for="reduction">Réduction</label>
                            <input type="text" class="form-control" name="discount" placeholder="... %">
                        </div>
                        <div class="form-group">
                            <label for="picture">Image URL</label>
                            <input type="url" class="form-control" name="picture" placeholder="Url">
                        </div>
                        <div class="form-group">
                            <label>Propreté</label>
                               <label for="clean">Propre</label>
                                <input type="text" class="form-control" name="clean" placeholder="1 ou 0">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Soumettre</button>
                    </form>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>

