@php
    $navLinks = json_decode(file_get_contents(resource_path('data/navlinks.json')), true);
    $navIcon = asset('images/ticaBeansIcon.jpg');
@endphp
<nav class="flex items-center justify-between px-11 bg-white">
    <a href="{{ url('/') }}" class="w-32 h-32">
        <img src="{{ $navIcon }}" alt="Tica Beans" class="w-full h-full">
    </a>

    {{-- Site Navigation --}}
    <div>
        @foreach ($navLinks['siteNavigation'] as $item)
            <x-navbar.nav-links>{{ $item['title'] }}</x-navbar.nav-links>
        @endforeach
    </div>

    {{-- Shopping Cart and user Authentication --}}
    <div>
        @foreach ($navLinks['userNavigation'] as $item)
            <x-navbar.nav-links :icon="$item['iconClass']"></x-navbar.nav-links>
        @endforeach
    </div>
</nav>