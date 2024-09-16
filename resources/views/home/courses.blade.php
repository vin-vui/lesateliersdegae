<x-guest-layout>

    <section class="bg-white pt-12 md:pt-0">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg">
                <p class=" text-lg leading-8 text-zomp">Cours de</p>
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-wheat font-amita">flûte traversière</h2>

                <h3 class="mt-10 font-semibold text-xl mb-4 text-zomp border-b">Ce que je propose</h3>
                <p class="mb-2">
                    Des cours de flûte traversière à destination des particuliers, adultes et / ou enfants dès 6 ans.
                </p>
                <p class="mb-2">
                    Cours d'une durée d'une heure. Approche ludique et adaptée à chacun.e. Possibilité d'apprendre le solfège en même temps que l'instrument.
                </p>

                <h3 class="mt-10 font-semibold text-xl mb-4 text-zomp border-b">Lieu</h3>
                <p>
                    Data Music. Dans les locaux de l'école de musique.
                </p>
                <p>
                    <a class="text-base text-zomp/80 underline" target="_blank" href="https://maps.app.goo.gl/Li2KAWRG9Dhi1Sn4A">1 Place de Montrapon, 25000, Besançon</a>
                </p>

                <h3 class="mt-10 font-semibold text-xl mb-4 text-zomp border-b">Tarif</h3>
                <p>
                    <span class="font-semibold text-caribbean font-amita">25€</span> de l'heure.
                </p>

                <h3 class="mt-10 font-semibold text-xl mb-4 text-zomp border-b">Quand ?</h3>
                <ul>
                    <li class="list-disc ml-6">Le lundi après-midi</li>
                    <li class="list-disc ml-6">Le mercredi soir</li>
                    <li class="list-disc ml-6">Le jeudi matin</li>
                    <li class="list-disc ml-6">Le jeudi après-midi</li>
                    <li class="list-disc ml-6">Le samedi matin</li>
                </ul>
            </div>
            <div class="mt-8">
                <img class="w-full rounded-3xl relative z-30" src="/img/flute.jpg" alt="Joueuse de flute traversière">
            </div>
        </div>
    </section>

    <div class="hidden md:block absolute -top-12 -right-24 z-10 opacity-20 overflow-hidden">
        <img src="{{ url('img/mandala_2.webp') }}" alt="mandala" class="h-[42rem] w-[42rem]">
    </div>

    <div class="h-24 -mb-24 shapedividers_com-3932"></div>

    @include('home.welcome._next')

    @include('home._partials.contact')

</x-guest-layout>
