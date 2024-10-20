<x-layout>
    <x-slot:title>Modifié</x-slot:title>
    <x-slot:content>
        <div class="container d-flex flex-column justify-content-center align-items-center mt-5">
            <div class="alert alert-success col-6 text-center" role="alert">
                Votre produit à bien été modifié !
            </div>
            <div class="justify-content-center col-3">
                <a href="{{route('backOffice')}}" class="btn btn-dark btn-block btn-lg">
                    Retour à la page Administrateur
                </a>
            </div>
        </div>
    </x-slot:content>
</x-layout>
