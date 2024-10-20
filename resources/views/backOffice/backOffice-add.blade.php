<x-layout>
    <x-slot:title>Ajouter un article</x-slot:title>
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

                <!-- For Demo Purpose -->
                <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                    <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
                    <h1>Créer un produit</h1>
                </div>

                <!-- Registeration Form -->
                <div class="col-md-7 col-lg-6 ml-auto">
                    <form action="{{route('add')}}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <!-- Nom produit -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="text" name="name" placeholder="Nom du produit" class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- Picture URL -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="text" name="pictureUrl" placeholder="ex: /image/name.jpg" class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- desc produit -->
                            <div class="input-group col-lg-12 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="text" name="descProducts" placeholder="Description Produit" class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- price -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="number" name="price" placeholder="Prix en cent" class="form-control bg-white border-left-0 border-md">
                            </div>


                            <!-- Weight -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="text" name="weight" placeholder="Poids en gr" class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- Discount -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="number" name="discount" placeholder="Remise en %" class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- Categorie -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="number" name="categoryId" placeholder="Categorie 1 / 2 ou 3" class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group col-lg-12 mx-auto mb-0">
                                <button type="submit" class="btn btn-primary">Ajouter</button>
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
