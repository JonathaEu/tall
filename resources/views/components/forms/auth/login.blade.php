<x-forms.formulario-base submit="tentarAutenticar">
    <x-ui.input
        name="email"
        wire:model="email"
        label="e-mail"
        :required="true"
        type="email"
        class="w-3xl" />

    <x-ui.input
        name="password"
        wire:model="password"
        label="senha"
        :required="true"
        type="password"
        class="w-3xl" />

    <x-ui.button-submit target="tentarAutenticar">
        Autenticar
    </x-ui.button-submit>
</x-forms.formulario-base>