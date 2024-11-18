@php
    $navLinks = json_decode(file_get_contents(resource_path('data/navlinks.json')), true);
    $navIcon = asset('images/ticaBeansIcon.jpg');
@endphp

{{-- Desktop Navbar --}}
<nav class="bg-white rounded hidden lg:flex">
    <div class=" container mx-auto items-center justify-between px-11 bg-white rounded hidden lg:flex"">
        <a href="{{ url('/') }}" class="w-24 h-24">
            <img src="{{ $navIcon }}" alt="Tica Beans" class="w-full h-full">
        </a>

        {{-- Site Navigation --}}
        <div class="py-6 pm-4 flex justify-between ">
            @foreach ($navLinks['siteNavigation'] as $item)
                <x-navbar.nav-links class="mx-5" :url="$item['url']">{{ $item['title'] }}</x-navbar.nav-links>
            @endforeach
        </div>

        {{-- Shopping Cart and user Authentication navigation --}}
        <div>
            @foreach ($navLinks['userNavigation'] as $item)
                <x-navbar.nav-links :icon="$item['iconClass']" :url="$item['url']"></x-navbar.nav-links>
            @endforeach
        </div>
    </div>
</nav>

{{-- Mobile Navbar --}}
<nav x-data="{ isOpen: false }" class="lg:hidden items-center justify-between px-11 bg-white rounded flex relative">
    <a href="{{ url('/') }}" class="w-24 h-24">
        <img src="{{ $navIcon }}" alt="Tica Beans" class="w-full h-full">
    </a>

    <button @click="isOpen = !isOpen"
        class="relative flex flex-col items-center justify-center w-8 h-8 focus:outline-none z-50">
        <span :class="{ 'rotate-45 translate-y-1.5': isOpen }"
            class="block w-6 h-0.5 bg-black transition-transform duration-300 ease-in-out transform origin-center"></span>
        <span :class="{ 'opacity-0': isOpen }"
            class="block w-6 h-0.5 bg-black mt-1 transition-transform duration-300 ease-in-out transform origin-center"></span>
        <span :class="{ '-rotate-45 -translate-y-1.5': isOpen }"
            class="block w-6 h-0.5 bg-black mt-1 transition-transform duration-300 ease-in-out transform origin-center"></span>
    </button>


    <div class="bg-white absolute w-full left-0 top-24  h-screen transition-all duration-300"
        :class="{ 'translate-x-full': !isOpen }" x-show="isOpen"
        x-transition:enter="transform transition ease-in-out duration-300" x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-300"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">

        {{-- Shopping Cart and user Authentication navigation --}}
        <div class=" flex justify-center items-center ">
            <div class=" flex justify-center items-center rounded w-75">
                @foreach ($navLinks['userNavigation'] as $item)
                    <x-navbar.nav-links :icon="$item['iconClass']" :url="$item['url']"
                        class="py-4 capitalize text-2xl"></x-navbar.nav-links>
                @endforeach

            </div>
        </div>
        <!-- Menu Content -->
        <div class="py-6 pm-4 flex flex-col justify-between ">
            @foreach ($navLinks['siteNavigation'] as $item)
                <x-navbar.nav-links class="mx-5 bg-opacity-30 shadow-none"
                    :url="$item['url']">{{ $item['title'] }}</x-navbar.nav-links>
            @endforeach
        </div>
    </div>


</nav>
