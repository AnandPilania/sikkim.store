<x-layout.base>
    <x-slot name="title">{{ $title ?? ''}}</x-slot>
    <x-header/>
    {{ $slot }}
    <x-footer/>
    <x-slot name="script">{{ $script ?? '' }}</x-slot>
</x-layout.base>
