<section class="py-5">
    <div class="container  ">
        <div class="row gx-5 ">
            {{--                    image --}}
            <aside class="col-lg-6">
                <div class="border rounded-4 mb-3 d-flex justify-content-center">
                    <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image"
                       href="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/detail1/big.webp">
                        <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit"
                             src="{{$picture}}"/>
                    </a>
                </div>
            </aside>
            {{--                    Fin image --}}
            {{--                    Texte à coté / prix / add to cart --}}
            <main class="col-lg-6">
                <div class="ps-lg-3">
                    <h4 class="title text-dark">
                        {{$name}}
                    </h4>
                </div>

                <div class="mb-3">
                    <span class="h5">{{$price}} €</span>
                </div>

                <p>
                    {{$description}}
                </p>

                <hr/>

                <div class="row mb-4">
                    <!-- col.// -->
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="quantity">Quantité</label>
                            <input type="number" name="quantity" min="0" max="100" step="1" value="0" class="form-control mb-2">
                        </div>
                        <input type="hidden" name="id" value="{{ $id }}">
                        <button type="submit" class="btn btn-success btn-block">Ajouter au Panier</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
</section>
