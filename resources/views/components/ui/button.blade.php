@props(['class' => '', 'type' => 'primary', 'url' => null])

@php
    $generalClass = 'border px-4 py-2 text-xl rounded-full transition-all duration-500 font-light text-center';
    $typeClasses = [
        'primary' => 'bg-black text-white hover:bg-gray-100 hover:text-black hover:border-black ',
        'secondary' =>
            'bg-white text-black border-black border-black hover:bg-black hover:text-white hover:border-white ',
        'transparent' => 'bg-transparent border-transparent',
    ];
@endphp

@if ($url)
    <a href="{{ url($url) }}" class="{{ $generalClass }} {{ $typeClasses[$type] }} {{ $class }}">
        {{ $slot }}
    </a>
@else
    <button href="{{ url($url) }}" class="{{ $generalClass }} {{ $typeClasses[$type] }} {{ $class }}">
        {{ $slot }}
    </button>
@endif
