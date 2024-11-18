@props(['data'])

@php
    $heading = $data->title;
    $styledHeading = str_ireplace('coffee', '<span class="italic font-petit">Coffee</span>', $heading);
@endphp
<header class="h-full  flex flex-col mx-auto pb-6 rounded">
    <x-navbar.navbar />

    <section class="bg-white mt-2 rounded lg:flex-row lg:items-center">
        <div class="bg-white flex p-8 px-11 flex-col lg:flex-row lg:items-center container mx-auto">

            <div class="flex-1 text-5xl capitalize leading-relaxed">
                <h1 class="">{!! $styledHeading !!}</h1>

                <p class=" font-light text-sm max-w-sm my-4 leading-relaxed ">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, fugiat exercitationem reiciendis
                    totam
                    provident excepturi ducimus laudantium recusandae atque vitae repellendus! Consequuntur ex aperiam
                    autem
                    commodi cupiditate nam perspiciatis. Facere!
                </p>

                <x-ui.button type="primary">Explore Product</x-ui.button>
                <x-ui.button type="secondary">Learn More</x-ui.button>

            </div>


            <div class="flex-1">
                <img src="{{ asset('images/coffeeBeans.png') }}" alt="An Image of Coffee grains">
            </div>

        </div>
    </section>
</header>
