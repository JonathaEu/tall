@props(['title', 'model'])
<div
    x-data="{ open: @entangle($model) }"
    x-show="open"
    x-on:keydown.escape.window="open = false"
    class="fixed inset-0 z-50 overflow-y-auto"
    style="display: none;">
    <div
        x-show="open"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm transition-opacity"
        aria-hidden="true"
        x-on:click="open = false"></div>

    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

        <div
            x-show="open"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="relative transform overflow-hidden rounded-xl bg-surface text-left shadow-xl transition-all w-full max-w-2xl p-6 my-8">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-4">
                <h2 class="text-xl font-semibold text-text">
                    {{ $title }}
                </h2>
                <button
                    type="button"
                    x-on:click="open = false"
                    class="rounded-lg p-1.5 text-slate-400 hover:bg-slate-50 hover:text-slate-600 transition">
                    <span class="sr-only">Fechar</span>
                    ✕
                </button>
            </div>

            <div>
                {{ $slot }}
            </div>

        </div>
    </div>
</div>