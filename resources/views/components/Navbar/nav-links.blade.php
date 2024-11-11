@props(['url' => "/"])
<a href="{{url($url)}}">
    {{$slot}}
</a>
