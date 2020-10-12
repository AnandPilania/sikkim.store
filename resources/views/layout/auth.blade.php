<x-layout.base>
    <x-slot name="title">{{ $title ?? '' }}</x-slot>
    <div class="flex flex-col justify-center min-h-screen py-12 bg-white sm:px-6 lg:px-8">
        {{ $slot }}
    </div>
    <x-slot name="script">{{ $script ?? '' }}</x-slot>
</x-layout.base>
