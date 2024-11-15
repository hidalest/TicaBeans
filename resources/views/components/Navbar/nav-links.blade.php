@props(['url' => '/', 'icon' => null, 'setActivable' => false])

@php
    $route = request()->is('/');

@endphp

<a href="{{ url($url) }}" {{ $attributes }}>
    @if ($icon)
        <i class="fa-solid fa-{{ $icon }}" aria-hidden="true"></i>
        <span class="sr-only">{{ $slot }}</span> <!-- Screen reader text for accessibility -->
    @else
        {{ $slot }}
    @endif
</a>
