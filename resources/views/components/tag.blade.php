@props(['tag','size' => 'base'])

@php
    $classes = 'hover:bg-white/25 bg-white/10 font-bold rounded-lg p-1.5 transition-colors duration-300';

    if($size == 'base')
    {
        $classes .= 'px-5 py-1 text-sm';
    }
    elseif($size == 'small')
    {
        $classes .= 'px-3 py-1 text-xs';
    }
@endphp
<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
