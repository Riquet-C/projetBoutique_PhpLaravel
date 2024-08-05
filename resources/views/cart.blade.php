<x-layout>
    <x-slot name="title">Panier</x-slot>
    <x-slot name="content">
        <section class="h-100 h-custom" style="background-color: #c9e1ff;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-lg-8">
                                        <div class="p-5">
                                            <div class="d-flex justify-content-between align-items-center mb-5">
                                                <h1 class="fw-bold mb-0">Panier</h1>
                                                <h6 class="mb-0 text-muted">x produits</h6>
                                            </div>
                                            <hr class="my-4">
                                            @foreach()
                                            <x-cart-product





                                            />
                                            @endforeach
                                            <hr class="my-4">

                                            <div class="pt-5">
                                                <h6 class="mb-0"><a href="{{ url('/product') }}" class="text-body">
                                                        <i class="fas fa-long-arrow-alt-left me-2"></i>Retour au
                                                        catalogue</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <x-cart-resum/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
</x-layout>
