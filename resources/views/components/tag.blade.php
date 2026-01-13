@props(['size' => 'base'])


@php
$classes = 'bg-white/10 rounded-xl font-bold hover:bg-white/25 transition-colors duration-300';

if ($size === 'base') {
$classes .= ' px-4 py-1 text-sm';
}

if ($size === 'small') {
$classes .= ' px-2 py-1 text-2xs';
}
@endphp


<a {{ $attributes(['class' => $classes])}}>{{ $slot }}</a>
