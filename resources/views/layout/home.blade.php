<x-layout.base>
    <x-header/>
    <x-slot name="title">{{ $title ?? ''}}</x-slot>
    {{ $slot }}
    <x-footer/>
    <x-slot name="script">{{ $script ?? '' }}</x-slot>
    <div x-data="{ messageSent : false }">
        @include('includes.message_sent_toast')
        @include('includes.float_action_button')
    </div>
</x-layout.base>
