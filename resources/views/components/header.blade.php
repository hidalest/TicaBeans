@props(['data'])
<header class="h-full  flex flex-col container mx-auto pb-6">
    <x-navbar.navbar />

    <section class="bg-white mt-2 rounded flex">
        <div class="bg-red-500 flex-1">
            <h1 class=" p-11">{{ $data->title }}</h1>

        </div>

        <div class="flex-1">
            <img src="{{ asset('images/coffeeBeans.png') }}" alt="An Image of Coffee grains">

        </div>

    </section>
    {{ $slot }}
</header>
