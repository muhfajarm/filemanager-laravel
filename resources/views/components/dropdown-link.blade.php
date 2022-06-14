@props(['active'])

@php
$classes = ($active ?? false)
? 'border-b-2 border-blue-500'
: ''
@endphp

<a {{ $attributes->merge(['class' => 'block px-4 py-2 text-sm leading-5 text-gray-700 no-underline hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out']) }}>
  <div {{ $attributes->merge(['class' => $classes])}}>
    {{ $slot }}
  </div>
</a>
