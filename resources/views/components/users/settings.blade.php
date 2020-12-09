<section class="mt-16 bg-cool-gray-200">
    <div class="max-w-7xl mx-auto px-8 sm:px-6 lg:px-8 py-10 flex items-start justify-between space-x-6">
        <div class="sidebar w-80">
            <div class="bg-white shadow-md py-2.5 px-3 flex items-center justify-start space-x-4 mb-4 h-18">
                <img
                    src="{{ auth('user')->user()->avatar }}"
                    alt=""
                    class="w-12 h-12 rounded-full object-cover">
                <div>
                    <p class="text-sm font-light">Hello,</p>
                    <p class="font-medium">{{ auth()->guard('user')->user()->name }}</p>
                </div>
            </div>

            <div class="bg-white shadow-md py-3">
                <div class="px-6 mb-2 mt-2">
                    <div class="text-xs text-gray-700 font-light">
                        <p class="">Account Settings</p>
                    </div>
                </div>
                <a href="{{ route('user.profile') }}"
                   class="block w-full px-6 py-3 text-small @if(request()->routeIs('user.profile')) bg-gray-800 @else group hover:bg-gray-700 @endif transition ease-in-out duration-200">
                    <div class="flex items-center ml-2">
                        <svg
                            class="w-4 h-4 @if(request()->routeIs('user.profile')) text-white @else  text-gray-800 @endif group-hover:text-gray-100 "
                            viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M13.403 24h-13.403v-22h3c1.231 0 2.181-1.084 3-2h8c.821.916 1.772 2 3 2h3v9.15c-.485-.098-.987-.15-1.5-.15l-.5.016v-7.016h-4l-2 2h-3.897l-2.103-2h-4v18h9.866c.397.751.919 1.427 1.537 2zm5.097-11c3.035 0 5.5 2.464 5.5 5.5s-2.465 5.5-5.5 5.5c-3.036 0-5.5-2.464-5.5-5.5s2.464-5.5 5.5-5.5zm0 2c1.931 0 3.5 1.568 3.5 3.5s-1.569 3.5-3.5 3.5c-1.932 0-3.5-1.568-3.5-3.5s1.568-3.5 3.5-3.5zm2.5 4h-3v-3h1v2h2v1zm-15.151-4.052l-1.049-.984-.8.823 1.864 1.776 3.136-3.192-.815-.808-2.336 2.385zm6.151 1.052h-2v-1h2v1zm2-2h-4v-1h4v1zm-8.151-4.025l-1.049-.983-.8.823 1.864 1.776 3.136-3.192-.815-.808-2.336 2.384zm8.151 1.025h-4v-1h4v1zm0-2h-4v-1h4v1zm-5-6c0 .552.449 1 1 1 .553 0 1-.448 1-1s-.447-1-1-1c-.551 0-1 .448-1 1z"/>
                        </svg>
                        <p class="tracking-wider font-normal capitalize ml-3 @if(request()->routeIs('user.profile')) text-white @else  text-gray-800 @endif group-hover:text-gray-100 ">
                            Profile Information</p>
                    </div>
                </a>
                <a href="{{ route('user.addresses') }}"
                   class="block w-full px-6 py-3 text-small @if(request()->routeIs('user.addresses')) bg-gray-800 @else group hover:bg-gray-700 @endif transition ease-in-out duration-200">
                    <div class="flex items-center ml-2">
                        <svg
                            class="w-4 h-4 @if(request()->routeIs('user.addresses')) text-white @else  text-gray-800 @endif group-hover:text-gray-100 "
                            viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <p class="tracking-wider font-normal capitalize ml-3 @if(request()->routeIs('user.addresses')) text-white @else  text-gray-800 @endif group-hover:text-gray-100 ">
                            Manage Addresses</p>
                    </div>
                </a>

                <div class="px-6 mb-2 mt-3">
                    <div class="text-xs text-gray-700 font-light">
                        <p class="">Orders</p>
                    </div>
                </div>

                <a href="{{ route('user.orders.current') }}"
                   class="block w-full px-6 py-3 text-small @if(request()->routeIs('user.orders.current')) bg-gray-800 @else group hover:bg-gray-700 @endif transition ease-in-out duration-200">
                    <div class="flex items-center ml-2">
                        <svg
                            class="w-4 h-4 @if(request()->routeIs('user.orders.current')) text-white @else  text-gray-800 @endif group-hover:text-gray-100 "
                            viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <p class="tracking-wider font-normal capitalize ml-3 @if(request()->routeIs('user.orders.current')) text-white @else  text-gray-800 @endif group-hover:text-gray-100 ">
                            Current Orders</p>
                    </div>
                </a>

                <a href="{{ route('user.orders.completed') }}"
                   class="block w-full px-6 py-3 text-small @if(request()->routeIs('user.orders.completed')) bg-gray-800 @else group hover:bg-gray-700 @endif transition ease-in-out duration-200">
                    <div class="flex items-center ml-2">
                        <svg
                            class="w-4 h-4 @if(request()->routeIs('user.orders.completed')) text-white @else  text-gray-800 @endif group-hover:text-gray-100 "
                            viewBox="0 0 20 20"
                            fill="currentColor">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                            <path fill-rule="evenodd"
                                  d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <p class="tracking-wider font-normal capitalize ml-3 @if(request()->routeIs('user.orders.completed')) text-white @else  text-gray-800 @endif group-hover:text-gray-100 ">
                            Completed Orders</p>
                    </div>
                </a>
                <a href="{{ route('user.orders.cancelled') }}"
                   class="block w-full px-6 py-3 text-small @if(request()->routeIs('user.orders.cancelled')) bg-gray-800 @else group hover:bg-gray-700 @endif transition ease-in-out duration-200">
                    <div class="flex items-center ml-2">
                        <svg
                            class="w-4 h-4 @if(request()->routeIs('user.orders.cancelled')) text-white @else  text-gray-800 @endif group-hover:text-gray-100 " viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <p class="tracking-wider font-normal capitalize ml-3 @if(request()->routeIs('user.orders.cancelled')) text-white @else  text-gray-800 @endif group-hover:text-gray-100 ">
                        Cancelled Orders</p>
                    </div>
                </a>

                <div class="px-6 mb-2 mt-3">
                    <div class="text-xs text-gray-700 font-light">
                        <p class="">Notifications</p>
                    </div>
                </div>

                <a href="{{ route('user.notifications.unread') }}"
                   class="block w-full px-6 py-3 text-small  group hover:bg-gray-700 transition ease-in-out duration-200">
                    <div class="flex items-center ml-2">
                        <svg
                            class="w-4 h-4 text-gray-800 group-hover:text-gray-100 " viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                        </svg>
                        <p class="tracking-wider font-normal capitalize ml-3 text-gray-800 group-hover:text-gray-100 ">
                            Unread Notifications</p>
                    </div>
                </a>
                <a href="{{ route('user.notifications.all') }}"
                   class="block w-full px-6 py-3 text-small  group hover:bg-gray-700 transition ease-in-out duration-200">
                    <div class="flex items-center ml-2">
                        <svg
                            class="w-4 h-4 text-gray-800 group-hover:text-gray-100" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                        <p class="tracking-wider font-normal capitalize ml-3 text-gray-800 group-hover:text-gray-100 ">
                            All Notifications</p>
                    </div>
                </a>

                <div class="px-6 mb-2 mt-3">
                    <div class="text-xs text-gray-700 font-light">
                        <p class="">Payments</p>
                    </div>
                </div>

                <a href="{{ route('user.payments.gift_cards') }}"
                   class="block w-full px-6 py-3 text-small  group hover:bg-gray-700 transition ease-in-out duration-200">
                    <div class="flex items-center ml-2">
                        <svg
                            class="w-4 h-4 text-gray-800 group-hover:text-gray-100 " viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                                  clip-rule="evenodd"/>
                            <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"/>
                        </svg>
                        <p class="tracking-wider font-normal capitalize ml-3 text-gray-800 group-hover:text-gray-100 ">
                            Gift Cards</p>
                    </div>
                </a>
                <a href=""
                   class="block w-full px-6 py-3 text-small  group hover:bg-gray-700 transition ease-in-out duration-200">
                    <div class="flex items-center ml-2">
                        <svg
                            class="w-4 h-4 text-gray-800 group-hover:text-gray-100 " viewBox="0 0 20 20"
                            fill="currentColor">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                            <path fill-rule="evenodd"
                                  d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <p class="tracking-wider font-normal capitalize ml-3 text-gray-800 group-hover:text-gray-100 ">
                            Saved Cards</p>
                    </div>
                </a>
                <a href=""
                   class="block w-full px-6 py-3 text-small  group hover:bg-gray-700 transition ease-in-out duration-200">
                    <div class="flex items-center ml-2">
                        <svg
                            class="w-4 h-4 text-gray-800 group-hover:text-gray-100 " viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 3.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 9H10a3 3 0 013 3v1a1 1 0 102 0v-1a5 5 0 00-5-5H8.414l1.293-1.293z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <p class="tracking-wider font-normal capitalize ml-3 text-gray-800 group-hover:text-gray-100 ">
                            Refund Orders</p>
                    </div>
                </a>


                <div class="px-6 mb-2 mt-3">
                    <div class="text-xs text-gray-700 font-light">
                        <p class="">My Stuffs</p>
                    </div>
                </div>

                <a href=""
                   class="block w-full px-6 py-3 text-small  group hover:bg-gray-700 transition ease-in-out duration-200">
                    <div class="flex items-center ml-2">
                        <svg
                            class="w-4 h-4 text-gray-800 group-hover:text-gray-100 " viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <p class="tracking-wider font-normal capitalize ml-3 text-gray-800 group-hover:text-gray-100 ">
                            Wishlist</p>
                    </div>
                </a>
                <a href=""
                   class="block w-full px-6 py-3 text-small  group hover:bg-gray-700 transition ease-in-out duration-200">
                    <div class="flex items-center ml-2">
                        <svg
                            class="w-4 h-4 text-gray-800 group-hover:text-gray-100 " viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <p class="tracking-wider font-normal capitalize ml-3 text-gray-800 group-hover:text-gray-100 ">
                            Reviews & Ratings</p>
                    </div>
                </a>

            </div>
        </div>
        <div class="content flex-1">
            <div class="bg-white shadow-md py-2.5 px-8 h-18 mb-4 flex items-center text-gray-700 text-sm">
                <svg class="w-5 mr-3 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                          clip-rule="evenodd"/>
                </svg>
                Important Notifications Here
            </div>

            <div class="bg-white shadow-md p-8 text-gray-700">
                {{ $slot }}
            </div>
        </div>
    </div>
</section>
