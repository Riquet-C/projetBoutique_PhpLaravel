<x-layout>
    <x-slot:title>Commande</x-slot:title>
    <x-slot:content>
        <div class="container d-flex flex-column justify-content-center align-items-center mt-5">
            <div class="alert alert-success col-6 text-center" role="alert">
                Votre commande est validée !
            </div>
            <div class="justify-content-center col-3">
                <a href="{{ route('homepage') }}" class="btn btn-primary btn-lg w-100">
                    Retour à la page d'accueil
                </a>
            </div>
        </div>
    </x-slot:content>
</x-layout>
