@php
    $navLinks = json_decode(file_get_contents(resource_path('data/navlinks.json')), true);
    $navIcon = asset('images/ticaBeansIcon.jpg');
@endphp
<nav class="flex items-center justify-between">
    <div class="w-56 h-32">
        <a href="{{ url('/') }}" class="flex justify-center items-center w-full h-full space-x-4">
            <img src="{{ $navIcon }}" alt="Tica Beans" class="w-full h-full">
            <h2 class="w-full">Tica Beans</h2>
        </a>
    </div>

    {{-- Site Navigation --}}
    <div>
        <a href="#">test</a>
    </div>

    {{-- Shopping Cart and user Authentication --}}
    <div>
        <a href="#">test</a>
    </div>
</nav>
