<x-layout.base>
    <x-slot name="title">{{ $title ?? '' }}</x-slot>
    {{--    <x-header/>--}}
    <div class="flex flex-col justify-center min-h-screen py-12 bg-white md:bg-gray-800 sm:px-6 lg:px-8">
        {{ $slot }}
    </div>
    <x-slot name="script">{{ $script ?? '' }}</x-slot>
</x-layout.base>
