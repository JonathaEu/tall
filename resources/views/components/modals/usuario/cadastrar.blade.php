<x-modal.modal title="Cadastrar Usuário" model="show">
    @if(session('error'))
    <div class="rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-900 mb-4 text-sm">
        {{ session('error') }}
    </div>
    @endif

    <x-form.usuario.form />
    <div class="flex justify-end gap-2 pt-4 border-t border-slate-100 mt-6">

        <x-ui.button variant="secundario">Cancelar</x-ui.button>
        <x-ui.button>Enviar</x-ui.button>
    </div>
</x-modal.modal>