<x-app-layout>

    <div class="bg-white sticky top-0 shadow-lg">
        <div class="flex items-center justify-between px-8 py-2 max-w-7xl mx-auto">
            <h2 class="font-semibold font-amita text-xl text-gray-800 leading-tight">
                📆 événements > Ajouter un nouvel événement
            </h2>
            <a href="{{ route('events.index') }}" class="border-2 font-amita border-yellow-300 rounded-md hover:bg-yellow-300 py-2 px-3 transition-all duration-300">
                ⬅️ Retour aux événements
            </a>
        </div>
    </div>

    <div class="bg-white max-w-5xl mx-auto my-12 p-8 shadow-xl rounded-3xl">
        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-8">
            @csrf
            <div>
                <label class="text-sm font-medium leading-6 text-gray-900 capitalize flex justify-between">titre</label>
                <div class="mt-1">
                    <input type="text" name="name" value="{{ old('name') }}" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-zomp sm:text-sm sm:leading-6">
                    @error('name')
                    <div class="text-red-500 ">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="">
                <label for="description" class="text-sm font-medium leading-6 text-gray-900 capitalize flex justify-between">à propos</label>
                <div class="mt-1">
                    <textarea name="description" id="description" cols="50" rows="10" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-zomp sm:text-sm sm:leading-6">{{ old('description') }}</textarea>
                </div>
                @error('description')
                <div class="text-red-500 ">{{ $message }}</div>
                @enderror
            </div>

            <div class="">
                <label for="date" class="text-sm font-medium leading-6 text-gray-900 flex justify-between">Date(s) <span class="text-xs text-gray-400">pour afficher plusieurs dates, sautez une ligne entre chaque date</span></label>
                <div class="mt-1">
                    <textarea name="date" id="date" cols="50" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-zomp sm:text-sm sm:leading-6">{{ old('description') }}</textarea>
                </div>
                @error('date')
                <div class="text-red-500 ">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label class="text-sm font-medium leading-6 text-gray-900 capitalize flex justify-between">prix</label>
                <div class="mt-1">
                    <input type="text" name="price" value="{{ old('price') }}" id="price" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-zomp sm:text-sm sm:leading-6">
                    @error('price')
                    <div class="text-red-500 ">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="flex justify-between gap-4">
                <div class="w-full">
                    <label class="text-sm font-medium leading-6 text-gray-900 capitalize flex justify-between">lieu</label>
                    <div class="mt-1">
                        <input type="text" name="location" value="{{ old('location') }}" id="location" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-zomp sm:text-sm sm:leading-6">
                        @error('location')
                        <div class="text-red-500 ">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="w-full">
                    <label for="location_url" class="text-sm font-medium leading-6 text-gray-900 flex justify-between">Lien vers le lieu <span class="text-xs text-gray-400">facultatif</span></label>
                    <div class="mt-1">
                        <input type="text" name="location_url" value="{{ old('location_url') }}" id="location_url" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-zomp sm:text-sm sm:leading-6">
                    </div>
                    @error('location_url')
                    <div class="text-red-500 ">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="flex justify-between gap-4">
                <div class="w-full">
                    <label for="external_url" class="text-sm font-medium leading-6 text-gray-900 flex justify-between">Lien externe <span class="text-xs text-gray-400">facultatif</span></label>
                    <div class="mt-1">
                        <input type="text" name="external_url" value="{{ old('external_url') }}" id="external_url" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-zomp sm:text-sm sm:leading-6">
                    </div>
                    @error('external_url')
                    <div class="text-red-500 ">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="external_url_title" class="text-sm font-medium leading-6 text-gray-900 flex justify-between">Texte du lien externe <span class="text-xs text-gray-400">facultatif</span></label>
                    <div class="mt-1">
                        <input type="text" name="external_url_title" value="{{ old('external_url_title') }}" id="external_url_title" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-zomp sm:text-sm sm:leading-6">
                    </div>
                    @error('external_url_title')
                    <div class="text-red-500 ">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="">
                <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Photo</label>
                <div class="mt-2 flex items-center gap-x-3">
                    <label for="image" class="relative cursor-pointer rounded-md bg-white font-semibold text-zomp focus-within:outline-none focus-within:ring-2 focus-within:ring-zomp focus-within:ring-offset-2 hover:text-blue-500">
                        <span>Téléverser une photo</span>
                        <input id="image" name="image" type="file" accept="image/*" class="sr-only">
                    </label>
                </div>
                @error('image')
                <div class="text-red-500 ">{{ $message }}</div>
                @enderror
            </div>

            <div class="">
                <label for="image_alt" class="text-sm font-medium leading-6 text-gray-900">Description de la photo</label>
                <div class="mt-1">
                    <input type="text" name="image_alt" value="{{ old('image_alt') }}" id="image_alt" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-zomp sm:text-sm sm:leading-6">
                </div>
                @error('image_alt')
                <div class="text-red-500 ">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex items-center" x-data="{ on: false }">
                <button type="button" class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-zomp focus:ring-offset-2 bg-gray-200" role="switch" aria-checked="false" x-ref="switch" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'bg-zomp': on, 'bg-gray-200': !(on) }" aria-labelledby="annual-billing-label" :aria-checked="on.toString()" @click="on = !on">
                    <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-0" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                </button>
                <span class="ml-3 text-sm" id="annual-billing-label" @click="on = !on">
                    <span class="font-medium text-gray-900">Activer l'événement</span>
                    <span class="text-gray-500">(apparaitra en ligne)</span>
                </span>
                <input type="hidden" name="is_published" :value="on ? 1 : 0">
                @error('is_published')
                <div class="text-red-500 ">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white uppercase tracking-widest py-2 rounded-md">
                Enregistrer
            </button>
        </form>
    </div>

</x-app-layout>
