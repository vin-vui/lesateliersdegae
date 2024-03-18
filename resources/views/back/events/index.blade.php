<x-app-layout>

    <div class="bg-white sticky top-0 shadow-lg z-40">
        <div class="flex items-center justify-between px-8 py-2 max-w-7xl mx-auto">
            <h2 class="font-semibold text-xl font-amita text-gray-800 leading-tight capitalize">
                📆 événements ({{ $events->count() }})
            </h2>
            <a href="{{ route('events.create') }}" class="font-amita border-2 border-yellow-300 rounded-md hover:bg-yellow-300 py-2 px-3 transition-all duration-300">
                ➕ Ajouter un nouvel événement
            </a>
        </div>
    </div>

    <div class="py-12 max-w-7xl mx-auto">
        <div class="sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-4">
                @foreach ($events as $event)
                <a href="{{ route('events.edit', $event->id) }}" class="flex flex-col w-full bg-zomp p-6 shadow-xl rounded-3xl relative z-10 hover:shadow-2xl transition-all duration-200 cursor-pointer hover:scale-105">
                    <div class="absolute z-20">
                        @if($event->is_published)
                        <span class="bg-green-500 text-white rounded-full px-2 py-1 text-xs font-bold">Publié</span>
                        @else
                        <span class="bg-red-500 text-white rounded-full px-2 py-1 text-xs font-bold">Non publié</span>
                        @endif
                    </div>
                    <div class="relative w-full aspect-[7/5] bg-cover bg-center rounded-3xl" style="background-image: url('{{ $event->image }}')"></div>
                    <div class="max-w-xl ml-4">
                        <div class="-ml-4 mt-8 flex flex-wrap items-center gap-2 text-sm">
                            @foreach(explode("\n", $event->date) as $date)
                            @if($date)
                            <div class="rounded-3xl pt-1 pb-0.5 px-2 capitalize bg-white text-zomp whitespace-nowrap">
                                {{ trim($date) }}
                            </div>
                            @endif
                            @endforeach
                        </div>

                        <div class="group relative">
                            <h3 class="mt-3 sm:text-2xl text-xl font-semibold font-amita leading-6 text-gray-900">
                                {{ $event->name }}
                            </h3>
                            <div class="mt-5 text-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-10 text-wheat" viewBox="0 0 24 24">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                        <path fill="currentColor" d="M15.992 3.013C17.326 2.236 19 3.197 19 4.741V8a3 3 0 1 1 0 6v3c0 1.648-1.881 2.589-3.2 1.6l-2.06-1.546A8.658 8.658 0 0 0 10 15.446v2.844a2.71 2.71 0 0 1-5.316.744l-1.57-5.496a4.7 4.7 0 0 1 3.326-7.73l3.018-.168a9.344 9.344 0 0 0 4.19-1.259zM5.634 15.078l.973 3.407A.71.71 0 0 0 8 18.29v-3.01l-1.56-.087a4.723 4.723 0 0 1-.806-.115M20 11a1 1 0 0 0-1-1v2a1 1 0 0 0 1-1" />
                                    </g>
                                </svg>
                                <div>
                                    <p class="whitespace-pre-wrap">{{ $event->description }}</p>
                                </div>
                            </div>
                            <div class="mt-4 text-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-10 text-wheat" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 18.6q-.25 0-.488-.075t-.437-.225q-2.025-1.575-4.05-3.963T5 9.15q0-1.775.638-3.113T7.275 3.8q1-.9 2.25-1.35T12 2q1.225 0 2.475.45t2.25 1.35q1 .9 1.638 2.238T19 9.15q0 2.8-2.025 5.188t-4.05 3.962q-.2.15-.437.225T12 18.6m0-7.6q.825 0 1.413-.587T14 9q0-.825-.587-1.412T12 7q-.825 0-1.412.588T10 9q0 .825.588 1.413T12 11M6 22q-.425 0-.712-.288T5 21q0-.425.288-.712T6 20h12q.425 0 .713.288T19 21q0 .425-.288.713T18 22z" />
                                </svg>
                                <div>
                                    @if($event->location_url)
                                    <span class="underline hover:text-gray-100 flex items-center gap-1">
                                        {{ $event->location }}
                                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="m18 13l-1.4-1.4l2.15-2.15q-1.075-.2-3.437.225T10 12.975q.8-2.925 3.225-4.7T18.7 6.5l-2.1-2.1L18 3l5 5zm-6 9q-4.025-3.425-6.012-6.362T4 10.2q0-3.4 2.325-5.8T12 2q.875 0 1.75.188t1.675.562l-1.55 1.55q-.45-.15-.925-.225T12 4Q9.475 4 7.738 5.813T6 10.2q0 1.775 1.475 4.05T12 19.325q1.5-1.375 2.625-2.625t1.85-2.4l1.45 1.45q-1 1.475-2.475 3.025T12 22" /></svg>
                                        </spanhref=>
                                        @else
                                        <p>{{ $event->location }}</p>
                                        @endif
                                </div>
                            </div>
                            <div class="mt-4 text-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-10 text-wheat" viewBox="0 0 24 24">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                        <path fill="currentColor" d="M11.5 3a4.502 4.502 0 0 1 4.336 3.292l.052.205l1.87-.467a1 1 0 0 1 1.233.84L19 7v1.81a6.517 6.517 0 0 1 1.364 1.882l.138.308H21a1 1 0 0 1 .993.883L22 12v3a1 1 0 0 1-.445.832l-.108.062l-1.168.585a6.525 6.525 0 0 1-2.02 2.325l-.259.174V20a1 1 0 0 1-.883.993L17 21h-3a1 1 0 0 1-.993-.883L13 20h-1a1 1 0 0 1-.883.993L11 21H8a1 1 0 0 1-.993-.883L7 20v-1.022a6.508 6.508 0 0 1-2.854-4.101a3.002 3.002 0 0 1-2.14-2.693L2 12v-.5a1 1 0 0 1 1.993-.117L4 11.5v.5c0 .148.032.289.09.415a6.504 6.504 0 0 1 2.938-4.411A4.5 4.5 0 0 1 11.5 3m4.5 8a1 1 0 1 0 0 2a1 1 0 0 0 0-2m-4.5-6a2.5 2.5 0 0 0-2.478 2.169A6.52 6.52 0 0 1 10.5 7h3.377l.07-.017A2.5 2.5 0 0 0 11.5 5" />
                                    </g>
                                </svg>
                                <div>
                                    <p>{{ $event->price }}</p>
                                </div>
                            </div>
                        </div>
                        @if($event->external_url)
                        <div class="mt-6 ">
                            <div class="underline hover:text-gray-100 flex gap-1">
                                <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6H6a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6m-7 1l9-9m-5 0h5v5" />
                                </svg>
                                {{ $event->external_url_title }}
                            </div>
                        </div>
                        @endif
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
