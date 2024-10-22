<x-guest-layout>

    <section class="bg-white pt-12 md:pt-0">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg">
                <p class=" text-lg leading-8 text-zomp">Ateliers à destination des</p>
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-wheat font-amita">Particuliers</h2>

                <h3 class="mt-10 font-semibold text-xl mb-4 text-zomp border-b">Ce que je propose</h3>
                <p class="mb-2">
                    Des ateliers à destination des particuliers, adultes et / ou enfants dès 5 ans.
                </p>
                <p class="mb-2">
                    Des ateliers de découverte du dessin centré / mandala (durée d'1h30 à 2h selon l'âge) :
                </p>
                <ul class="list-disc list-outside ml-8">
                    <li>Mise en couleurs de mandalas</li>
                    <li>Semi création de mandalas</li>
                    <li>Faire des mandalas autrement : mandalas pâte à modeler, mandalas “objets” avec des éléments de la nature, mandalas gourmands, mandalas nature (de type land art), mandalas au sol à la craie…</li>
                </ul>

                <h3 class="mt-10 font-semibold text-xl mb-4 text-zomp border-b">Lieu</h3>
                <p>
                    Soit dans un lieu à Besançon (salon de thé ou autre).
                    <br>
                    Soit à mon domicile quartier Saint Claude à Besançon.
                    <br>
                    Soit chez vous si vous le souhaitez. <span class="text-base text-zomp/80">Animation spéciale selon vos envies / besoins, par exemple moment privilégié à offrir à des ami.es, anniversaire avec ateliers mandalas coopératifs, etc.</span>
                </p>

                <h3 class="mt-10 font-semibold text-xl mb-4 text-zomp border-b">Combien ?</h3>
                <p>
                    Les ateliers sont limités à 10 personnes.
                </p>

                <h3 class="mt-10 font-semibold text-xl mb-4 text-zomp border-b">Tarif</h3>
                <p>
                    L’inscription est payante et prise en charge par chaque participant (de 20 à 25€ en général) ou par l’organisateur (au tarif 60€ de l’heure + frais kilométriques).
                </p>
            </div>
            <div class="mt-8">
                <img class="w-full rounded-3xl relative z-30" src="https://images.unsplash.com/photo-1590225472433-e20c5d118c60?auto=format&fit=crop&q=80&w=1973&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="office content 1">
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
