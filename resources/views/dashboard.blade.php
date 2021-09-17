<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <p>Titre</p>

            @foreach ($titre as $item)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{$item->titre}}
                        <button><a href="{{ route('dashboard.show', $item->id) }}">SHOW</a></button>
                        <button><a href="{{ route('dashboard.edit', $item->id) }}">UPDATE</a></button>
                    </div>
                </div>
            @endforeach


        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <p>Description</p>

            @foreach ($description as $item)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{$item->description}}
                    </div>
                </div>
            @endforeach


        </div>

    </div>


</x-app-layout>
