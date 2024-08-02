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
                    <div class="col-md-4 col-6 mb-3">
                        <label class="mb-2 d-block">Quantity</label>
                        <div class="input-group mb-3" style="width: 170px;">
                            <button class="btn btn-white border border-secondary px-3" type="button"
                                    id="button-addon1" data-mdb-ripple-color="dark">
                                <i class="fas fa-minus"></i>
                            </button>
                            <input type="text" class="form-control text-center border border-secondary"
                                   placeholder="1" aria-label="Example text with button addon"
                                   aria-describedby="button-addon1"/>
                            <button class="btn btn-white border border-secondary px-3" type="button"
                                    id="button-addon2" data-mdb-ripple-color="dark">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <a href="{{ url('/cart') }}" class="btn btn-primary shadow-0"> <i
                        class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
            </main>
        </div>
    </div>
</section>
