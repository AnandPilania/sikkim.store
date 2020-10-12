<section {{ $attributes->merge(['class' => "relative mt-16 bg-gradient-to-tr from-teal-500 to-blue-500 py-16" ]) }} >
    <div class="max-w-6xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between flex-col-reverse">
            <div class="flex-1 flex flex-col md:mr-16">
                {{ $slot }}
                {{ $action }}
            </div>
            <div class="w-full md:w-2/5 mb-4 md:mb-0 max-w-lg">
                <img src="{{ $image }}" alt="">
            </div>
        </div>
    </div>
</section>
