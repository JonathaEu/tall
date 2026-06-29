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
            'bg-superficie',
            'text-text',
            'border',
            'border-borda',
            'focus:border-primario',
            'focus:outline-none',
        ]) }}></textarea>

</div>