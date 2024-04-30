<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-gray-800 leading-tight flex justify-center text-2xl m-7">
            @if ($type === 'expresion')
                {{ __('Expression des Besoins') }}
            @elseif($type === 'collecte')
                {{ __('Collecte des Expressions des Besoins') }}
            @endif

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900   justify-around">

                    @if ($type === 'home')
                        <x-home />
                    @elseif($type === 'expresion')
                        <livewire:select-form />
                    @elseif($type === 'collecte')
                        <livewire:collecte-des-exression />
                    @elseif($type === 'realisation')
                        <livewire:realisation2 />
                    @endif



                    {{-- {{dd($message)}} --}}
                </div>
            </div>
        </div>
    </div>

    <x-footer />
</x-app-layout>



@if (isset($message))
    <script>
        alert("{{ $message }}");
    </script>
@endif
