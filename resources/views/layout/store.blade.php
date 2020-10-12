<x-layout.base>
    <x-slot name="title">{{ $title ?? ''}}</x-slot>
    <div x-data="{profileDropdown : false, CreateMenu: false, SideMenu: true}">
        {{ $slot }}
    </div>
    <x-slot name="script">{{ $script ?? '' }}</x-slot>
</x-layout.base>
