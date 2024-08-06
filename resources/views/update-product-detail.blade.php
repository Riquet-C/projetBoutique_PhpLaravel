            <x-layout>
                <x-slot name="title">update un produit</x-slot>
                <x-slot name="content">

                    <div class="container mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Update</h2>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="id">ID</label>
                                        <input type="text" class="form-control" name="id" value="{{$product->id}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="categorie">Categorie</label>
                                        <input type="text" class="form-control" name="categorie" id="categorie" value="{{$product->categorie}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nom</label>
                                        <input type="text" class="form-control" name="name" value="{{$product->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Prix</label>
                                        <input type="text" class="form-control" name="price" value="{{$product->price}} cent">
                                    </div>
                                    <div class="form-group">
                                        <label for="weight">Poid</label>
                                        <input type="text" class="form-control" name="weight"  value="{{$product->weight}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="discount">Reduc</label>
                                        <input type="text" class="form-control" name="discount"  value="{{$product->discount}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="picture">Image</label>
                                        <input type="url" class="form-control" name="picture"  value="{{$product->picture}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="clean">Propre</label>
                                        <input type="text" class="form-control" name="clean" id="clean" value="{{$product->clean}}">
                                    </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
        </div>

    </x-slot>
</x-layout>




