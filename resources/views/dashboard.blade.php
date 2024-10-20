<x-layout>
    <x-slot:title>Dashboard</x-slot>
    <x-slot:content>
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                </h2>
            </x-slot>
        </x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>

            </div>
        </div>
    </x-slot:content>
</x-layout>
