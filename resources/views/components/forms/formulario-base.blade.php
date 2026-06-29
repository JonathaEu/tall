@props([
'submit' => 'salvar',
])

<form wire:submit.prevent="{{ $submit }}" {{ $attributes }}>
    <div class="grid grid-cols-1 gap-4 w-full">
        {{ $slot }}
    </div>
</form>