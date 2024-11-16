@props(['data'])

@php
    $heading = $data->title;
    $styledHeading = str_ireplace('coffee', '<span class="italic font-petit">Coffee</span>', $heading);
@endphp
<header class="h-full  flex flex-col container mx-auto pb-6 rounded">
    <x-navbar.navbar />

    <section class="bg-white mt-2 rounded flex p-8">
        <div class="flex-1 text-5xl capitalize leading-relaxed">
            <h1 class="">{!! $styledHeading !!}</h1>

            <x-ui.button type="primary">Explore Product</x-ui.button>
            <x-ui.button type="secondary">Learn More</x-ui.button>

        </div>

        <div class="flex-1">
            <img src="{{ asset('images/coffeeBeans.png') }}" alt="An Image of Coffee grains">
        </div>

    </section>
    {{ $slot }}
</header>
