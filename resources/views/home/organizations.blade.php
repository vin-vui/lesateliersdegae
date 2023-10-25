<x-guest-layout>

    <section class="bg-white pt-12 md:pt-0">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg">
                <p class=" text-lg leading-8 text-zomp">Ateliers à destination des</p>
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-wheat font-amita">Structures</h2>

                <h3 class="mt-10 font-semibold text-xl mb-4 text-zomp border-b">Ce que je propose</h3>
                <p class="mb-2">
                    Intervention dans des structures socio-culturelles à Besançon et aussi dans la région Bourgogne Franche-Comté.
                </p>
                <p class="mb-2">
                    Je peux adapter chaque atelier en fonction de l’âge des participants : 5 - 8 ans, 8 - 10 ans, ados et adultes pour des ateliers d’une durée allant d’1h30 à 2h.
                </p>

                <h3 class="mt-10 font-semibold text-xl mb-4 text-zomp border-b">Combien ?</h3>
                <p>
                    Les ateliers sont limités à 10 personnes.
                </p>
            </div>
            <div class="mt-8">
                <img class="w-full rounded-3xl relative z-30" src="https://images.unsplash.com/photo-1525278070609-779c7adb7b71?auto=format&fit=crop&q=80&w=2047&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="office content 1">
            </div>
        </div>
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="mt-8">
                <img class="w-full rounded-3xl relative z-30" src="https://images.unsplash.com/photo-1525278070609-779c7adb7b71?auto=format&fit=crop&q=80&w=2047&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="office content 1">
            </div>
            <div class="font-light text-gray-500 sm:text-lg">
                <p class=" text-lg leading-8 text-zomp">Pour une première approche…</p>
                <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-wheat font-amita">L’Atelier de découverte du dessin centré / mandala</h2>
                <p class="mb-2 italic text-gray-600">
                    Un temps pour soi et avec les autres...
                </p>
                <h3 class="mt-10 font-semibold text-xl mb-4 text-zomp border-b">Objectifs de l'atelier</h3>
                <p>
                    Se faire plaisir, prendre son temps, jouer de façon créative, s'exprimer librement, lâcher prise.
                </p>
                <h3 class="mt-10 font-semibold text-xl mb-4 text-zomp border-b">Déroulement de l'atelier</h3>
                <p>
                    Après un bref temps d'explications sur ce qu'est un mandala, proposition d'en mettre un en couleurs.
                    <br>
                    Seront à disposition différents matériels afin d'expérimenter diverses sensations et éventuellement d'en découvrir de nouvelles.
                    <br>
                    Ce temps de relaxation dynamique amène de façon fluide à s'exprimer. Les participants seront invités à poser des mots sur leur expérience vécue de façon adaptée selon leur âge. S'ensuivra un temps de partage libre et d'échanges.
                </p>
                <h3 class="mt-10 font-semibold text-xl mb-4 text-zomp border-b">Tarif</h3>
                <p>
                    Coût : 60€ de l’heure (rémunération tarif intervenant DRAC).
                    Soit 120€ facturés pour un atelier d’1h45.
                    <br>
                    Plus les frais de déplacements au tarif 0.65€ du kilomètre.
                    <br>
                    Réalisation d’un devis sur demande.
                </p>
            </div>
        </div>
    </section>

    <div class="hidden md:block absolute -top-12 -right-24 z-10 opacity-20 overflow-hidden">
        <img src="{{ url('img/mandala_2.png') }}" alt="mandala" class="h-[42rem]">
    </div>

    <div class="h-24 -mb-24 shapedividers_com-3932"></div>

    @include('home.welcome._next')

    @include('home._partials.contact')

</x-guest-layout>
