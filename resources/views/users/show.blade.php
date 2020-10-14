<x-layout.app :title="auth('user')->user()->name">
    <x-users.settings>
        <div class="mb-12">
            <div class="mb-5 font-medium flex items-center">
                <span>Personal Information</span>
                <button class="ml-6 text-sm text-blue-500 font-medium focus:outline-none hover:underline">
                    Edit
                </button>
            </div>

            <div class="mb-6">
                <div class="text-xs font-medium mb-3">Name:</div>
                <div class="flex items-center space-x-4 text-sm text-gray-500">
                    <div class="bg-gray-100 border border-gray-200 py-2 px-6 w-60 rounded-md">
                        {{ auth('user')->user()->name }}
                    </div>
                </div>
            </div>
            <div>
                <div class="text-xs font-medium mb-3">Gender:</div>
                <div class="flex items-center space-x-4 text-sm text-gray-500">
                    <div
                        class="bg-gray-100 border border-gray-200 py-2 px-6 w-60 rounded-md">{{ 'Male' }}</div>
                </div>
            </div>
        </div>

        <div class="mb-12">
            <div class="mb-5 font-medium flex items-center">
                <span>Email Address</span>
                <button class="ml-6 text-sm text-blue-500 font-medium focus:outline-none hover:underline">
                    Edit
                </button>
            </div>

            <div class="mb-6">
                <div class="flex items-center space-x-4 text-sm text-gray-500">
                    <div
                        class="bg-gray-100 border border-gray-200 py-2 px-6 w-60 rounded-md">{{ auth('user')->user()->email }}</div>
                </div>
            </div>
        </div>


        <div class="mb-12">
            <div class="mb-5 font-medium flex items-center">
                <span>Mobile Number</span>
                <button class="ml-6 text-sm text-blue-500 font-medium focus:outline-none hover:underline">
                    Edit
                </button>
            </div>

            <div class="mb-6">
                <div class="flex items-center space-x-4 text-sm text-gray-500">
                    <div
                        class="bg-gray-100 border border-gray-200 py-2 px-6 w-60 rounded-md font-sans tabular-nums">{{ auth('user')->user()->phone ?? '+91 9876543212' }}</div>
                </div>
            </div>
        </div>

        <div class="mb-12">
            <div class="mb-5 font-medium flex items-center">
                <span>Contact Preference</span>
                <button class="ml-6 text-sm text-blue-500 font-medium focus:outline-none hover:underline">
                    Edit
                </button>
            </div>

            <div class="mb-6">
                <div class="flex items-center space-x-4 text-sm text-gray-500">
                    <div
                        class="bg-gray-100 border border-gray-200 py-2 px-6 w-60 rounded-md">{{ 'Email & Phone' }}</div>
                </div>
            </div>
        </div>

        <div class="mb-12">
            <div class="mb-5 font-medium flex items-center">
                <span>Security</span>
            </div>

            <div class="flex items-center space-x-6">
                <div>
                    <div class="text-xs font-medium mb-3">Password:</div>
                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                        <button
                            class="bg-blue-500 border border-blue-600 rounded-md focus:outline-none focus:shadow-outline-blue text-white py-2 px-6 w-60 transform hover:shadow-lg hover:-translate-y-0.5 transition ease-in-out duration-150">
                            Change Password
                        </button>
                    </div>
                </div>
                <div>
                    <div class="text-xs font-medium mb-3">Account:</div>
                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                        <button
                            class="bg-red-500 border border-red-600 focus:outline-none focus:shadow-outline-red rounded-md text-white py-2 px-6 w-60 transform hover:shadow-lg hover:-translate-y-0.5 transition ease-in-out duration-150">
                            Deactivate Account
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </x-users.settings>
</x-layout.app>
