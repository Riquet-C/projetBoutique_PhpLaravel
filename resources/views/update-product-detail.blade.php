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
                                        id = "{{$product->id}}"

                                        <input type="text" class="form-control" name="id" id="id" placeholder="id">
                                    </div>
                                    <div class="form-group">
                                        categorie = "{{$product->categorie}}"

                                        <input type="text" class="form-control" name="categorie" id="categorie" placeholder="...">
                                    </div>
                                    <div class="form-group">
                                        name = "{{$product->name}}"

                                        <input type="text" class="form-control" name="name" id="name" placeholder="...">
                                    </div>
                                    <div class="form-group">
                                        prix = "{{$product->price}}"

                                        <input type="text" class="form-control" name="price" id="prix" placeholder="... cent">
                                    </div>
                                    <div class="form-group">
                                        poid = "{{$product->weight}}"

                                        <input type="text" class="form-control" name="weight" id="poid" placeholder="... g">
                                    </div>
                                    <div class="form-group">
                                        reduc = "{{$product->discount}}"

                                        <input type="text" class="form-control" name="discount" id="reduction" placeholder="... %">
                                    </div>
                                    <div class="form-group">
                                        <img src="{{$product->picture}}"><br>
                                        imageURL = "{{$product->picture}}"

                                        <input type="url" class="form-control" name="picture" id="image" placeholder="Url">
                                    </div>
                                    <div class="form-group">
                                        clean = "{{$product->clean}}"

                                        <input type="text" class="form-control" name="clean" id="clean" placeholder="1 ou 0">
                                    </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
        </div>

    </x-slot>
</x-layout>




