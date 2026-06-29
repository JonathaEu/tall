@props([
'label' => null,
'name',
'options' => [],
'selected' => null,
'required' => false,
])

<div class="space-y-2">

    @if($label)
    <label
        for="{{ $name }}"
        class="block text-sm text-text">
        {{ $label }}

        @if($required)
        <span class="text-primario">*</span>
        @endif
    </label>
    @endif

    <select
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $attributes->class([
        'w-full',
        'h-12',
        'px-4',
        'rounded-lg',
        'bg-superficie',
        'text-text',
        'border',
        'border-borda',
        'focus:border-primario',
        'focus:outline-none',
    ]) }}>
        @foreach($options as $value => $text)
        <option
            value="{{ $value }}"
            @selected($selected==$value)>
            {{ $text }}
        </option>
        @endforeach
    </select>

</div>