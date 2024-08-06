<x-layout>
    <x-slot:title>Modifier un article</x-slot:title>
    <x-slot:content>
        <!-- message erreur si champs non remplis ou incorrect-->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container">
            <div class="row py-5 mt-4 align-items-center">

                <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                    <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt=""
                         class="img-fluid mb-3 d-none d-md-block">
                    <h1>Modifier un produit</h1>
                </div>

                <div class="col-md-7 col-lg-6 ml-auto">
                    <form action="{{route('modify', ['id'=>"$products->id"])}}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <!-- Nom produit -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="text" name="name" placeholder="Nom du produit"
                                       value="{{$products->name}}" class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- Picture URL -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="text" name="pictureUrl" placeholder="Lien Image"
                                       value="{{$products->pictureUrl}}"
                                       class="form-control bg-white border-left-0 border-md">

                            </div>

                            <!-- desc product -->
                            <div class="input-group col-lg-12 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="text" name="descProducts" placeholder="Description Produit"
                                       value="{{$products->descProducts}}"
                                       class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- price -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="number" name="price" placeholder="Prix du produit"
                                       value="{{$products->price}}"
                                       class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- Weight -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="text" name="weight" placeholder="Poids du produit"
                                       value="{{$products->weight}}"
                                       class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- Discount -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="number" name="discount" placeholder="Remise à appliquer"
                                       value="{{$products->discount}}"
                                       class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- Category -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="number" name="categoryId" placeholder="Categorie 1 / 2 ou 3"
                                       value="{{$products->categoryId}}"
                                       class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group col-lg-12 mx-auto mb-0">
                                <form method="POST" action="/backoffice/{{$products->id}}/modify">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit">Update</button>
                                </form>
                            </div>
                        </div>
                    </form>

                </div>
                <ul>
                    <li>Categorie 1: Chiot</li>
                    <li>Categorie 2: Adulte</li>
                    <li>Categorie 3: Pour tous les chiens</li>
                </ul>
            </div>
        </div>
    </x-slot:content>
</x-layout>
