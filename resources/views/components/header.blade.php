@props(['data'])

@php
    $headingData = $data['heading'];
    $heading = $headingData['title'];
    $styledHeading = str_ireplace('coffee', '<span class="italic font-petit">Coffee</span>', $heading);
@endphp
<header class="h-full  flex flex-col mx-auto rounded">
    <x-navbar.navbar :data="$data['navLinks']" />

    <section class="bg-white mt-2 rounded lg:flex-row lg:items-center">
        <div class="bg-white flex p-8 px-11 flex-col lg:flex-row lg:items-center container mx-auto">

            <div class="flex-1 text-5xl capitalize leading-relaxed">
                <h1 class="">{!! $styledHeading !!}</h1>

                <p class=" font-light text-sm lg:max-w-sm my-4 md:my-6 leading-relaxed ">{{ $headingData['subtitle'] }}
                </p>

                <div class="flex lg:flex-row flex-col">
                    <x-ui.button type="primary" :url="$headingData['primaryCtaUrl']"
                        class="lg:mr-4 md:mb-4">{{ $headingData['primaryCtaText'] }}</x-ui.button>
                    <x-ui.button type="secondary" :url="$headingData['secondaryCtaUrl']"
                        class="md:mb-4">{{ $headingData['secondaryCtaText'] }}</x-ui.button>

                </div>

            </div>


            <div class="flex-1">
                <img src="{{ asset('images/coffeeBeans.png') }}" alt="An Image of Coffee grains">
            </div>

        </div>
    </section>
</header>
