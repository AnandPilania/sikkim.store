<div class="relative w-full px-6 py-4 shadow rounded-md bg-white">
    <div>
        <h2 class="uppercase font-normal text-gray-400 mb-3">
            {{ $name }}
        </h2>
        <h3 class="text-lg font-bold text-gray-600 mb-4"> {{ $number }}</h3>
        <div class="flex items-center justify-start">
            @if($trend == 'plus')
                <div class="flex items-center text-green-400">
                    <svg class="w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                              clip-rule="evenodd"/>
                    </svg>
                    <div class="ml-2 text-xs font-semibold">{{ $percentage }} &percnt;</div>
                </div>
            @elseif($trend == 'minus')
                <div class="flex items-center text-red-500">
                    <svg class="w-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M12 13a1 1 0 100 2h5a1 1 0 001-1V9a1 1 0 10-2 0v2.586l-4.293-4.293a1 1 0 00-1.414 0L8 9.586 3.707 5.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0L11 9.414 14.586 13H12z"
                              clip-rule="evenodd"/>
                    </svg>
                    <div class="ml-2 text-xs font-semibold">{{ $percentage }} &percnt;</div>
                </div>
            @elseif($trend == 'neutral')
                <div class="flex items-center text-gray-500">
                    <svg class="w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                              clip-rule="evenodd"/>
                    </svg>
                    <div class="ml-2 text-xs font-semibold">{{ $percentage }} &percnt;</div>
                </div>
            @endif

            <div class="text-gray-500 text-xs ml-2">
                {{ $time }}
            </div>
        </div>
    </div>
    <div class="absolute top-0 right-0 mt-6 mr-6 p-2 bg-gray-900 bg-opacity-90 rounded-full text-gray-300">
        {{ $slot }}
    </div>
</div>
