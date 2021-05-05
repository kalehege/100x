<x-jet-nav-link class="relative" href="#">
    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
    </svg>
    <span wire:poll="setCount" class="absolute block top-0 right-0 -mt-1.5 -mr-1.5 p-0.5 text-xs bg-indigo-100 rounded-full font-bold text-gray-900">
        {{ $count }}
    </span>
</x-jet-nav-link>
