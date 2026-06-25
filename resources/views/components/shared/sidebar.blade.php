<aside
    class="bg-gray-950 h-screen text-gray-100 flex flex-col fixed left-0 top-0 border-r border-gray-800 transition-all duration-300 ease-in-out z-40 w-64"
    :class="{ 'w-64': !sidebarCollapsed, 'w-0 overflow-hidden border-none': sidebarCollapsed }">

    <div class="h-16 flex items-center justify-between border-b border-gray-800 px-4 min-w-[16rem]">
        <div class="font-bold text-lg text-indigo-400">MEU SISTEMA</div>

        <button x-on:click="sidebarCollapsed = true" class="p-1.5 rounded hover:bg-gray-800 text-gray-400 hover:text-white">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
            </svg>
        </button>
    </div>

    <div class="flex-1 overflow-y-auto p-4 space-y-4 min-w-[16rem]">
        <!-- RECEBE OS MÓDULOS E OS PERCORRE -->
        @foreach($modulos as $modulo)
        <div x-data="{ open: true }" class="space-y-1">

            <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider px-2 py-1">
                {{ $modulo->nome }}
            </div>

            <ul x-show="open" class="space-y-1 pl-2">
                @foreach($modulo->telas as $tela)
                @php
                // FAZ A CHECAGEM SE A ROTA ATUAL É A ATIVA
                $isActive = request()->routeIs($tela->rota_modulo_tela . '*');
                @endphp
                <li>
                    <a href="{{ route($tela->rota_modulo_tela) }}"
                        class="flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-150
                               {{ $isActive 
                                    ? 'bg-indigo-600 text-white font-semibold' 
                                    : 'text-gray-300 hover:bg-gray-800 hover:text-white' 
                               }}">

                        <span class="w-1.5 h-1.5 rounded-full mr-2.5 {{ $isActive ? 'bg-white' : 'bg-gray-600' }}"></span>

                        {{ $tela->nome }}
                    </a>
                </li>
                @endforeach
            </ul>

        </div>
        @endforeach
    </div>

    <div class="p-4 border-t border-gray-800 bg-gray-950 text-xs text-gray-400 min-w-[16rem]">
        <p class="font-medium text-gray-200 truncate">{{ auth()->user()->name }}</p>
    </div>

</aside>