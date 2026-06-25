@props([
'user' => null,
'cargos' => [],
'disabled'=> false
])

<div class="grid grid-cols-1 gap-4">
    <x-ui.input
        name="name"
        label="Nome"
        :value="old('name', $user?->name)"
        :disabled="{{ $disabled }}"
        required />

    <x-ui.input
        name="email"
        type="email"
        label="E-mail"
        :value="old('email', $user?->email)"
        :disabled="{{ $disabled }}"
        required />


    <x-ui.input
        name="password"
        type="password"
        label="Senha"
        autocomplete="new-password"
        :disabled="{{ $disabled }}"
        @required(!$user) />

    <x-ui.input
        name=" passwordConfirmation"
        type="password"
        label="Confirmar senha"
        autocomplete="new-password"
        disabled="{{ $disabled }}
        @required(!$user) />
</div>