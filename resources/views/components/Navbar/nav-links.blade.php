@props(['url' => '/', 'icon' => null, 'setActivable' => false, 'class' => ''])

@php
    $route = request()->is($url);
    $isActiveClass = $route ? 'text-black bg-gray-200 shadow' : '';

@endphp

<a href="{{ url($url) }}" {{ $attributes }}
    class="hover:text-black  px-4 py-2 rounded {{ $isActiveClass ? $isActiveClass : 'text-gray-500' }} {{ $class }} ">
    @if ($icon)
        <i class="fa-solid fa-{{ $icon }}" aria-hidden="true"></i>
        <span class="sr-only">{{ $slot }}</span> <!-- Screen reader text for accessibility -->
    @else
        {{ $slot }}
    @endif
</a>
