@php
    $navLinks = json_decode(file_get_contents(resource_path('data/navlinks.json')), true);
    $navIcon = asset('images/ticaBeansIcon.jpg');
@endphp
<nav class="flex items-center justify-between px-11 bg-white rounded">
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
