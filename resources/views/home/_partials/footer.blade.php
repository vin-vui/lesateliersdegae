<div class="shapedividers_com-3348 h-24 -mt-24 z-20"></div>

<footer class="bg-old-lace" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">

        <div class="flex flex-col sm:flex-row gap-y-8 justify-around">
            <div class="space-y-8">
                <img class="h-20" src="/logo.webp" width="77" height="80" alt="Les Ateliers de Gaë">
                <p class="text-3xl font-amita leading-6 text-transparent bg-clip-text bg-gradient-to-r from-zomp to-eccru">Les Ateliers de Gaë</p>
                <div class="flex space-x-6">
                    <a href="https://www.facebook.com/profile.php?id=61552577733025" target="_blank" class="text-zomp hover:text-zomp/80">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/lesateliersdegae/" target="_blank" class="text-zomp hover:text-zomp/80">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
            <div>
                <h3 class="text-sm font-semibold leading-6 text-zomp">Plan du site</h3>
                <ul role="list" class="mt-6 space-y-4">
                    <li>
                        <a href="{{ route('welcome') }}" class="text-sm leading-6 text-zomp hover:text-caribbean">Accueil</a>
                    </li>
                    <li>
                        <a href="{{ route('individuals') }}" class="text-sm leading-6 text-zomp hover:text-caribbean">Particuliers</a>
                    </li>
                    <li>
                        <a href="{{ route('organizations') }}" class="text-sm leading-6 text-zomp hover:text-caribbean">Structures</a>
                    </li>
                    <li>
                        <a href="{{ route('courses') }}" class="text-sm leading-6 text-zomp hover:text-caribbean">Flute traversière</a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('') }}" class="text-sm leading-6 text-zomp/80 hover:text-caribbean">Agenda des Ateliers</a>
                    </li> --}}
                    <li>
                        <a href="{{ route('policy') }}" class="text-sm leading-6 text-zomp hover:text-caribbean">Mentions légales</a>
                    </li>
                </ul>
            </div>
            <div class="mt-10 md:mt-0">
                <h3 class="text-sm font-semibold leading-6 text-zomp">Liens utiles</h3>
                <ul role="list" class="mt-6 space-y-4">
                    <li>
                        <a href="https://formation-mandala.fr/les-praticiens/" class="text-sm leading-6 text-zomp hover:text-caribbean">Formation mandala Marie Pré</a>
                    </li>
                    <li>
                        <a href="https://www.datamusic.fr/fr/accueil" class="text-sm leading-6 text-zomp hover:text-caribbean">Data Music</a>
                    </li>
                </ul>
                {{-- <div class="mt-10 xl:mt-0">
                    <h3 class="text-sm font-semibold leading-6 text-white">Subscribe to our newsletter</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-300">The latest news, articles, and resources, sent to your inbox weekly.</p>
                    <form class="mt-6 sm:flex sm:max-w-md">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input type="email" name="email-address" id="email-address" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border-0 bg-white/5 px-3 py-1.5 text-base text-white shadow-sm ring-1 ring-inset ring-white/10 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:w-64 sm:text-sm sm:leading-6 xl:w-full" placeholder="Enter your email">
                        <div class="mt-4 sm:ml-4 sm:mt-0 sm:flex-shrink-0">
                            <button type="submit" class="flex w-full items-center justify-center rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Subscribe</button>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>

        <div class="mt-16 border-t border-caribbean/50 pt-8 sm:mt-20 lg:mt-24">
            <p class="text-xs text-center leading-5 text-zomp/80">&copy; 2024 Les Ateliers de Gaë. Tous droits réservés. Développé avec ❤️ par <a href="https://vinvui.com" class="underline hover:text-caribbean">Vinvui</a></p>
        </div>
    </div>
</footer>
