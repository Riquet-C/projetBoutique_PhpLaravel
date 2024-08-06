<x-layout>
    <x-slot:title>Ajouter un article</x-slot:title>
    <x-slot:content>

        <div class="container">
            <div class="row py-5 mt-4 align-items-center">
                <!-- For Demo Purpose -->
                <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                    <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
                    <h1>Créer un produit</h1>
                </div>

                <!-- Registeration Form -->
                <div class="col-md-7 col-lg-6 ml-auto">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('valider')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <!-- Nom produit -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="text" name="nom" placeholder="Nom du produit" class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- Picture URL -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="text" name="image" placeholder="Lien Image" class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- desc produit -->
                            <div class="input-group col-lg-12 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="text" name="description" placeholder="Description Produit" class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- price -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="number" name="prix" placeholder="Prix du produit" class="form-control bg-white border-left-0 border-md">
                            </div>


                            <!-- Weight -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="text" name="poids" placeholder="Poids du produit" class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- Discount -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="number" name="discount" placeholder="Remise à appliquer" class="form-control bg-white border-left-0 border-md">
                            </div>
                            <!-- Auteur -->
                            <div class="input-group col-lg-6 mb-4">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                                </div>
                                <input id="" type="text" name="auteur" placeholder="Nom de l'auteur" class="form-control bg-white border-left-0 border-md">
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group col-lg-12 mx-auto mb-0">

                              <button type="submit" class="btn btn-primary">ajouter</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-slot:content>
</x-layout>
