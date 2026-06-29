@props([
'rota' => '#',
'icone' => '',
'nome' => '',
'ativo' => false,
])

<a
    href="{{ $rota }}"
    class="group flex items-center gap-3 rounded-xl
           px-4 py-3
           transition-all duration-200

           {{ $ativo
                ? 'bg-primario shadow-lg'
                : 'text-text hover:bg-white/5 hover:text-primario'
           }}">
    <x-ui.icone :nome="$icone" />
    <span class="font-medium">
        {{ $nome }}
    </span>
</a>