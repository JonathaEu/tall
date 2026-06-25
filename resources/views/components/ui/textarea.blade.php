@props([
'label' => null,
'name',
])

<div class="space-y-2">

    @if($label)
    <label
        for="{{ $name }}"
        class="text-sm text-text">
        {{ $label }}
    </label>
    @endif

    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $attributes->class([
            'w-full',
            'min-h-32',
            'p-4',
            'rounded-lg',
            'bg-surface',
            'text-text',
            'border',
            'border-border',
            'focus:border-primary',
            'focus:outline-none',
        ]) }}></textarea>

</div>