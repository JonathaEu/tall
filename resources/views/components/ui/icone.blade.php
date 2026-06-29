@props([
'nome',
'class' => 'w-5 h-5'
])

<x-dynamic-component
    :component="'lucide-'.$nome"
    :class="$class" />