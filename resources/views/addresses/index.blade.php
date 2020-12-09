<x-layout.app :title="auth('user')->user()->name.' : Addresses'">
    <x-users.settings>
        <div class="mb-12">
            <div class="mb-5 font-medium flex items-center">
                <span>Manage Addresses</span>
            </div>

            <div class="mb-12">
                <div class="text-xs font-medium mb-3">My Addresses:</div>
                <div class="relative text-sm text-gray-500 leading-6 bg-cool-gray-50 p-3 rounded-md mb-3">
                    <div>
                        <p class="flex items-center font-medium text-gray-800">{{ auth('user')->user()->name }} <span class="ml-4 bg-gray-200 px-2 rounded-md shadow-sm text-xs">Default</span></p>
                        <p>A2/14, Alaka Abasan, DJ-7, Action Area 1D, Newtown, Kolkata, West Bengal</p>
                        <p class="text-gray-700 tabular-nums font-sans">700156</p>
                    </div>
                    <div class="absolute top-0 right-0 mt-3 mr-2">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </div>
                </div>
                <div class="relative text-sm text-gray-500 leading-6 bg-cool-gray-50 p-3 rounded-md mb-3">
                    <div>
                        <p class="flex items-center font-medium text-gray-800">{{ auth('user')->user()->name }}</p>
                        <p>Sai School Building, Near Thapa Golai, Indira By-pass Road, Sichey, Gangtok, Sikkim</p>
                        <p class="text-gray-700 tabular-nums font-sans">737101</p>
                    </div>
                    <div class="absolute top-0 right-0 mt-3 mr-2">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </div>
                </div>
            </div>
            <button class="w-60 px-3 py-2 bg-blue-500 hover:bg-blue-600 text-white hover:shadow-lg rounded-md focus:outline-none focus:shadow-outline-blue transform hover:-translate-y-0.5 mb-8 transition ease-in-out duration-150">
                Add Address
            </button>
        </div>
    </x-users.settings>
</x-layout.app>
