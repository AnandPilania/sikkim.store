<x-layout.app :title="auth('user')->user()->name.' : Addresses'">
    <x-users.settings>
        <div class="mb-12">
            <div class="mb-5 font-medium flex items-center">
                <span>Gift Cards</span>
            </div>
        </div>
    </x-users.settings>
</x-layout.app>
