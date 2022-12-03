<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col">
                <div class="p-6 text-gray-900">
                    {{ __("Hoş Geldiniz!") }}
                </div>
                <div class="p-6 text-gray-900 flex gap-4 w-auto">
                    <div class="p-2 border-2 rounded-md">
                      Adınız:  {{ Auth::User()->name }}
                    </div>
                    <div class="p-2 border-2 rounded-md">
                      E-posta:  {{ Auth::User()->email }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
