<header x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-old-lace sticky top-0 z-50">
    <nav class="mx-auto flex max-w-none items-center justify-between gap-x-4 px-4 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-mb-8">
                <span class="sr-only">{{ config('app.name') }}</span>
                <img class="md:h-20 bg-old-lace rounded-full h-16 p-1 w-auto" src="/logo_transparent.png" alt="">
            </a>
        </div>
        <div class="hidden lg:flex lg:gap-x-12 items-center">
            <a href="{{ route('welcome') }}" class="text-sm font-semibold leading-6"><span class="{{ request()->routeIs('welcome') ? 'highlight text-white' : 'text-gray-900 hover:text-caribbean transition-all duration-300' }}">Accueil</span></a>
            <a href="{{ route('individuals') }}" class="text-sm font-semibold leading-6"><span class="{{ request()->routeIs('individuals') ? 'highlight text-white' : 'text-gray-900 hover:text-caribbean transition-all duration-300' }}">Ateliers Particuliers</span></a>
            <a href="{{ route('organizations') }}" class="text-sm font-semibold leading-6"><span class="{{ request()->routeIs('organizations') ? 'highlight text-white' : 'text-gray-900 hover:text-caribbean transition-all duration-300' }}">Ateliers Structures</span></a>
            <a href="{{ route('agenda') }}" class="text-sm font-semibold leading-6"><span class="{{ request()->routeIs('agenda') ? 'highlight text-white' : 'text-gray-900 hover:text-caribbean transition-all duration-300' }}">Agenda des Ateliers</span></a>
        </div>
        <div class="flex flex-1 items-center justify-end gap-x-6">
            <a href="#" class="rounded-full bg-zomp sm:px-3 sm:py-2 sm:text-sm text-xs py-1 px-2 font-semibold text-white shadow-sm hover:bg-zomp/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-caribbean">Me Contacter</a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" @click="open = true">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
            </button>
        </div>
    </nav>
    <div x-description="Mobile menu, show/hide based on menu open state." class="lg:hidden" x-ref="dialog" x-show="open" aria-modal="true" style="display: none;">
        <div x-description="Background backdrop, show/hide based on slide-over state." class="fixed inset-0 z-10"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10" @click.away="open = false">
            <div class="flex items-center gap-x-6">
                <a href="#" class="rounded-full -mb-8">
                    <span class="sr-only">{{ config('app.name') }}</span>
                    <img class="h-20 w-auto" src="/logo.png" alt="">
                </a>
                <a href="#" class="rounded-md bg-zomp px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-zomp/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-caribbean">Me Contacter</a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="open = false">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6">
                    <div class="space-y-2 py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Accueil</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Ateliers Particuliers</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Ateliers Structures</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
