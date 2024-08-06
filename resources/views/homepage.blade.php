<x-layout>
    <x-slot name="title">Accueil</x-slot>
    <x-slot name="content">
<section class="content-section bg-light vh-100" id="about">
    <div class="container px-4 px-lg-5 text-center align-content-center">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="">
                <h2>Bienvenue chez Petslife!</h2>
                <p class="lead mb-5">
                    Où vous pourrez trouver tout ce qu'il faut pour votre toutou !!!!!
                </p>
                <a class="btn btn-dark btn-xl" href="{{url('/products')}}">Voir le catalogue</a>
            </div>
        </div>
    </div>
</section>
    </x-slot>
</x-layout>
