@php
    $navLinks = json_decode(file_get_contents(resource_path('data/navlinks.json')), true);
    $navIcon = asset('images/ticaBeansIcon.jpg');
@endphp

{{-- Desktop Navbar --}}
<nav class="items-center justify-between px-11 bg-white rounded hidden lg:flex">
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
</nav>

{{-- Mobile Navbar --}}
<nav x-data="{ isOpen: false }" class="lg:hidden items-center justify-between px-11 bg-white rounded flex relative">
    <a href="{{ url('/') }}" class="w-24 h-24">
        <img src="{{ $navIcon }}" alt="Tica Beans" class="w-full h-full">
    </a>

    <button @click="isOpen = !isOpen"
        class="relative flex flex-col items-center justify-center w-8 h-8 focus:outline-none">
        <span :class="{ 'rotate-45 translate-y-1.5': isOpen }"
            class="block w-6 h-0.5 bg-black transition-transform duration-300 ease-in-out transform origin-center"></span>
        <span :class="{ 'opacity-0': isOpen }"
            class="block w-6 h-0.5 bg-black mt-1 transition-transform duration-300 ease-in-out transform origin-center"></span>
        <span :class="{ '-rotate-45 -translate-y-1.5': isOpen }"
            class="block w-6 h-0.5 bg-black mt-1 transition-transform duration-300 ease-in-out transform origin-center"></span>
    </button>

    <div class="bg-red-300 absolute top-20 w-full left-0 h-svh" x-show="isOpen">
        {{-- Site Navigation --}}
        <div class="py-6 pm-4 flex flex-col justify-between ">
            @foreach ($navLinks['siteNavigation'] as $item)
                <x-navbar.nav-links class="mx-5" :url="$item['url']">{{ $item['title'] }}</x-navbar.nav-links>
            @endforeach
        </div>

    </div>

</nav>
