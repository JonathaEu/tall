@props([
'label' => null,
'name',
'required' => false,
'type'=>'email',
'disabled'=> false
])

<div class="relative">
    @if($label)
    <label
        for="{{ $name }}"
        class="absolute left-3 top-2 text-xs text-border bg-surface px-1 pointer-events-none">
        {{ $label }}
        @if($required)
        <span class="text-primary">*</span>
        @endif
    </label>
    @endif

    <input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type }}"
        {{ $disabled }}
        {{ $attributes->class([
            'w-full',
            'h-14',
            'pt-5',
            'px-4',
            'rounded-lg',
            'bg-surface',
            'text-text',
            'border',
            $errors->has($name)
                ? 'border-danger'
                : 'border-border',
            'focus:outline-none',
            'focus:border-primary',
        ]) }}>

</div>

@error($name)
<p class=" mt-1 text-sm text-danger">
    {{ $message }}
</p>
@enderror