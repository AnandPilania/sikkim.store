<x-layout.store title="Sikkim Store's Dashboard">
    <section>
        <div class="w-screen bg-cool-gray-200">
            <div class="flex">
                <x-dashboard-side-bar :store="$store"/>
                <x-dashboard.content :store="$store" name="Analytics">
                    <div class="p-4 bg-white shadow-md rounded-md text-gray-600">
                        Analytics Goes Here
                    </div>
                </x-dashboard.content>
            </div>
        </div>
    </section>
</x-layout.store>
