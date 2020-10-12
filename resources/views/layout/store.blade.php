<x-layout.base>
    <x-slot name="title">{{ $title ?? ''}}</x-slot>
    <div x-data="{profileDropdown : false, CreateMenu: false, SideMenu: true}" class="bg-gray-200">
        {{ $slot }}
    </div>
    <x-slot name="script">{{ $script ?? '' }}</x-slot>
</x-layout.base>
