@props([
'variant' => 'primario',
'type' => 'button',
])

@php

$variants = [
'primario' => '
bg-primario
text-superficie
hover:bg-primario-hover
',

'secundario' => '
bg-secundario
text-white
hover:brightness-110
',

'danger' => '
bg-danger
text-white
hover:brightness-110
',
];

@endphp

<button
    type="{{ $type }}"
    {{ $attributes->class([
        'h-11',
        'px-5',
        'rounded-lg',
        'font-bold',
        'transition-all',
        'cursor-pointer',
        $variants[$variant] ?? $variants['primario']
    ]) }}>
    <!-- CONTEUDO QUE O BOTAO ENCAPSULA (texto) -->
    {{ $slot }}
</button>