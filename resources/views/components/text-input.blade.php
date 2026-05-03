@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border border-thin rounded-full shadow-md bg-white']) }}>
