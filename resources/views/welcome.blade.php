<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="IMBSJI atau Ikatan Mahasiswa Bahasa dan Sastra Jerman Indonesia adalah sebuah organisasi independen dan ekstrauniversiter dimana organisasi ini dibentuk sebagai wadah komunikasi, koordinasi dan konsolidasi antar mahasiswa Bahasa dan Sastra Jerman di seluruh Indonesia demi terwujudnya mahasiswa yang berkualitas insan edukatif, ilmiah dan profesional serta berpartisipasi dalam pembangunan nasional.">
    {{-- Scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans">
    <section id="navbar" class="navbar w-full sticky shadow-md">
        @include('layout._navbar')
    </section>
    <section id="Hero" class="bg-primary main">
        <div class="w-full p-10">
            <div class="font-medium text-xl lg:text-3xl text-white mb-10 text-center">
                <h1>HERZLICH WILLKOMEN</h1>
            </div>
            <div class="font-bold text-xl lg:text-3xl text-white text-center">
                <h1 class="drop-shadow-lg">IKATAN MAHASISWA BAHASA DAN SASTRA JERMAN INDONESIA WEBSITE</h1>
            </div>
            <div class="flex justify-center mb-6 mt-36 lg:mt-60">
                <ul class="grid text-lg gap-y-2 gap-x-4 lg:gap-x-14 grid-cols-2 place-items-center">
                    {{-- <li>
                        <div class="grid place-items-center w-14 h-14 mb-2 lg:w-20 lg:h-20 bg-white">
                            <h1 id="days" class="text-slate-900 lg:text-4xl font-bold">
                                0
                            </h1>
                        </div>
                        <h1 class="font-bold text-slate-800 text-center">Tag</h1>
                    </li>
                    <li>
                        <div class="grid place-items-center w-14 h-14 mb-2 lg:w-20 lg:h-20 bg-white">
                            <h1 id="hours" class="text-slate-900 lg:text-4xl font-bold">
                                0
                            </h1>
                        </div>
                        <h1 class="font-bold text-slate-800 text-center">Uhr</h1>
                    </li> --}}
                    {{-- <li>
                        <div class="grid place-items-center w-14 h-14 mb-2 lg:w-20 lg:h-20 bg-white">
                            <h1 id="minutes" class="text-slate-900 lg:text-4xl font-bold">
                                0
                            </h1>
                        </div>
                        <h1 class="font-bold text-slate-800 text-center">Minuten</h1>
                    </li>
                    <li>
                        <div class="grid place-items-center w-14 h-14 mb-2 lg:w-20 lg:h-20 bg-white">
                            <h1 id="seconds" class="text-slate-900 lg:text-4xl font-bold">
                                0
                            </h1>
                        </div>
                        <h1 class="font-bold text-slate-800 text-center">Zweite</h1>
                    </li> --}}
                </ul>
            </div>
            <div class="font-normal text-xl lg:text-3xl text-white mb-5 text-center tracking-wider">
                {{-- <h1>TAG DER DEUTSCHEN SPRACHE</h1> --}}
            </div>
        </div>
    </section>
    <section id="Event" class="mt-16">
        <div class="grid lg:flex lg:grid-cols-3 gap-8 justify-center">
            <div class="card-event bg-primary w-72 h-72 lg:w-80 lg:h-80 mb-5">
                <div class="p-2 text-white">Kongres Nasional</div>
                <div class="relative">
                    <img src="{{ asset('img/landing/Kongres.png') }}" alt="Kongres">
                    <div class="absolute bottom-0 right-0 bg-white p-1">30-11-2023</div>
                </div>
                <div class="p-2 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed elit vel
                    ipsum tempus iaculis.</div>
            </div>
            <div class="card-event bg-primary w-72 h-72 lg:w-80 lg:h-80 mb-5">
                <div class="p-2 text-white">Über IMBSJI Sprechen</div>
                <div class="relative">
                    <img src="{{ asset('img/landing/Uber.png') }}" alt="Uber">
                    <div class="absolute bottom-0 right-0 bg-white p-1">30-11-2023</div>
                </div>
                <div class="p-2 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed elit vel
                    ipsum tempus iaculis.</div>
            </div>
            <div class="card-event bg-primary w-72 h-72 lg:w-80 lg:h-80 mb-5">
                <div class="p-2 text-white">Sosialisasi IMBSJI</div>
                <div class="relative">
                    <img src="{{ asset('img/landing/Sosialisasi.png') }}" alt="Sosialisasi">
                    <div class="absolute bottom-0 right-0 bg-white p-1">30-11-2023</div>
                </div>
                <div class="p-2 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed elit vel
                    ipsum tempus iaculis.</div>
            </div>
        </div>
        <div class="grid justify-center">
            <button type="button"
                class="py-2.5 px-24 mr-2 mb-4 text-xl font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">Event</button>
        </div>
    </section>
    <section id="article" class="bg-primary">
        <div class="grid p-6 lg:px-20 gap-2 pt-10">
            <div class="grid xl:flex xl:flex-row xl:justify-center md:px-20">
                <div class="grid">
                    <div class="relative mr-10 w-full h-full">
                        <div class="mb-2 lg:mb-5">
                            <img src="{{ asset('img/article/Article1.png') }}" alt="big article">
                            <div class="absolute bottom-0 right-0 bg-white p-1 mb-5 sm:mr-10">30-11-2023</div>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="px-6 mb-1 text-white font-medium text-2xl lg:text-3xl">
                        <p>
                            JUDUL ARTIKEL BESAR
                        </p>
                    </div>
                    <div class="px-6 mb-1 text-white text-sm lg:text-lg">
                        <p>
                            Topic
                        </p>
                    </div>
                    <div class="px-6 mb-2 text-white text-xs lg:max-w-2xl  lg:text-base">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed elit vel
                            ipsum tempus iaculis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed elit
                            vel
                            ipsum tempus iaculis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed elit
                            vel
                            ipsum tempus iaculis.
                        </p>
                    </div>
                    <div class="justify-center lg:block px-6">
                        <button type="button"
                            class="py-2.5 px-24 mr-2 mb-4 text-xl font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">Read
                            More</button>
                    </div>
                </div>
            </div>
            <div
                class="grid md:grid-cols-3 md:gap-3 lg:grid-cols-3 lg:gap-8 lg:flex-row justify-items-center lg:justify-center xl:flex md:px-20">
                <div class="">
                    <div class="card-article bg-white w-72 h-72 lg:w-80 lg:h-80 mb-5">
                        <div class="p-2 text-slate-800">Sosialisasi IMBSJI</div>
                        <div class="relative">
                            <img src="{{ asset('img/landing/Sosialisasi.png') }}" alt="Sosialisasi">
                            <div class="absolute bottom-0 right-0 bg-primary p-1 text-white">30-11-2023</div>
                        </div>
                        <div class="p-2 text-slate-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                            sed
                            elit
                            vel
                            ipsum tempus iaculis.</div>
                    </div>
                </div>
                <div class="">
                    <div class="card-article bg-white w-72 h-72 lg:w-80 lg:h-80 mb-5">
                        <div class="p-2 text-slate-800">Sosialisasi IMBSJI</div>
                        <div class="relative">
                            <img src="{{ asset('img/landing/Sosialisasi.png') }}" alt="Sosialisasi">
                            <div class="absolute bottom-0 right-0 bg-primary p-1 text-white">30-11-2023</div>
                        </div>
                        <div class="p-2 text-slate-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                            sed
                            elit
                            vel
                            ipsum tempus iaculis.</div>
                    </div>
                </div>
                <div class="">
                    <div class="card-article bg-white w-72 h-72 lg:w-80 lg:h-80 mb-5">
                        <div class="p-2 text-slate-800">Sosialisasi IMBSJI</div>
                        <div class="relative">
                            <img src="{{ asset('img/landing/Sosialisasi.png') }}" alt="Sosialisasi">
                            <div class="absolute bottom-0 right-0 bg-primary p-1 text-white">30-11-2023</div>
                        </div>
                        <div class="p-2 text-slate-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                            sed
                            elit
                            vel
                            ipsum tempus iaculis.</div>
                    </div>
                </div>
                <div class="">
                    <div class="card-article hidden md:block bg-white w-72 h-72 lg:w-80 lg:h-80">
                        <div class="p-2 text-slate-800">Sosialisasi IMBSJI</div>
                        <div class="relative">
                            <img src="{{ asset('img/landing/Sosialisasi.png') }}" alt="Sosialisasi">
                            <div class="absolute bottom-0 right-0 bg-primary p-1 text-white">30-11-2023</div>
                        </div>
                        <div class="p-2 text-slate-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                            sed
                            elit
                            vel
                            ipsum tempus iaculis.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid justify-center">
            <button type="button"
                class="py-2.5 px-24 mr-2 mb-4 text-xl font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">Article</button>
        </div>
    </section>
    <section id="himpunan">
        <div class="pt-10">
            <div class="font-semibold text-xl lg:text-3xl text-slate-800 mb-10 text-center">
                <h1>HIMPUNAN MAHASISWA</h1>
            </div>
            <div class="grid justify-center">
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-row-2 xl:grid-cols-4 lg:px-20 gap-4 md:gap-8 xl:gap-16">
                    <div class="grid himpunan card w-52 justify-items-center">
                        <img src="{{ asset('img/himpunan/UI.png') }}" alt="" class="mb-2">
                        <div class="text-base mb-2">
                            <span>Himpunan Mahasiswa UI</span>
                        </div>
                        <button type="button"
                            class="py-2.5 px-16 mb-4 text-lg font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">More</button>
                    </div>
                    <div class="grid himpunan card w-52 justify-items-center">
                        <img src="{{ asset('img/himpunan/UI.png') }}" alt="" class="mb-2">
                        <div class="text-base mb-2">
                            <span>Himpunan Mahasiswa UI</span>
                        </div>
                        <button type="button"
                            class="py-2.5 px-16 mb-4 text-lg font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">More</button>
                    </div>
                    <div class="grid himpunan card w-52 justify-items-center">
                        <img src="{{ asset('img/himpunan/UI.png') }}" alt="" class="mb-2">
                        <div class="text-base mb-2">
                            <span>Himpunan Mahasiswa UI</span>
                        </div>
                        <button type="button"
                            class="py-2.5 px-16 mb-4 text-lg font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">More</button>
                    </div>
                    <div class="grid himpunan card w-52 justify-items-center">
                        <img src="{{ asset('img/himpunan/UI.png') }}" alt="" class="mb-2">
                        <div class="text-base mb-2">
                            <span>Himpunan Mahasiswa UI</span>
                        </div>
                        <button type="button"
                            class="py-2.5 px-16 mb-4 text-lg font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">More</button>
                    </div>
                    <div class="grid himpunan card w-52 justify-items-center">
                        <img src="{{ asset('img/himpunan/UI.png') }}" alt="" class="mb-2">
                        <div class="text-base mb-2">
                            <span>Himpunan Mahasiswa UI</span>
                        </div>
                        <button type="button"
                            class="py-2.5 px-16 mb-4 text-lg font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">More</button>
                    </div>
                    <div class="grid himpunan card w-52 justify-items-center">
                        <img src="{{ asset('img/himpunan/UI.png') }}" alt="" class="mb-2">
                        <div class="text-base mb-2">
                            <span>Himpunan Mahasiswa UI</span>
                        </div>
                        <button type="button"
                            class="py-2.5 px-16 mb-4 text-lg font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">More</button>
                    </div>
                    <div class="grid himpunan card w-52 justify-items-center">
                        <img src="{{ asset('img/himpunan/UI.png') }}" alt="" class="mb-2">
                        <div class="text-base mb-2">
                            <span>Himpunan Mahasiswa UI</span>
                        </div>
                        <button type="button"
                            class="py-2.5 px-16 mb-4 text-lg font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">More</button>
                    </div>
                    <div class="grid himpunan card w-52 justify-items-center">
                        <img src="{{ asset('img/himpunan/UI.png') }}" alt="" class="mb-2">
                        <div class="text-base mb-2">
                            <span>Himpunan Mahasiswa UI</span>
                        </div>
                        <button type="button"
                            class="py-2.5 px-16 mb-4 text-lg font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">More</button>
                    </div>
                    <div class="grid himpunan card w-52 justify-items-center">
                        <img src="{{ asset('img/himpunan/UI.png') }}" alt="" class="mb-2">
                        <div class="text-base mb-2">
                            <span>Himpunan Mahasiswa UI</span>
                        </div>
                        <button type="button"
                            class="py-2.5 px-16 mb-4 text-lg font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">More</button>
                    </div>
                    <div class="grid himpunan card w-52 justify-items-center">
                        <img src="{{ asset('img/himpunan/UI.png') }}" alt="" class="mb-2">
                        <div class="text-base mb-2">
                            <span>Himpunan Mahasiswa UI</span>
                        </div>
                        <button type="button"
                            class="py-2.5 px-16 mb-4 text-lg font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">More</button>
                    </div>
                    <div class="grid himpunan card w-52 justify-items-center">
                        <img src="{{ asset('img/himpunan/UI.png') }}" alt="" class="mb-2">
                        <div class="text-base mb-2">
                            <span>Himpunan Mahasiswa UI</span>
                        </div>
                        <button type="button"
                            class="py-2.5 px-16 mb-4 text-lg font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">More</button>
                    </div>
                    <div class="grid himpunan card w-52 justify-items-center">
                        <img src="{{ asset('img/himpunan/UI.png') }}" alt="" class="mb-2">
                        <div class="text-base mb-2">
                            <span>Himpunan Mahasiswa UI</span>
                        </div>
                        <button type="button"
                            class="py-2.5 px-16 mb-4 text-lg font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">More</button>
                    </div>
                    <div class="grid himpunan card w-52 justify-items-center lg:col-start-2">
                        <img src="{{ asset('img/himpunan/UI.png') }}" alt="" class="mb-2">
                        <div class="text-base mb-2">
                            <span>Himpunan Mahasiswa UI</span>
                        </div>
                        <button type="button"
                            class="py-2.5 px-16 mb-4 text-lg font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">More</button>
                    </div>
                    <div class="grid himpunan card w-52 justify-items-center">
                        <img src="{{ asset('img/himpunan/UI.png') }}" alt="" class="mb-2">
                        <div class="text-base mb-2">
                            <span>Himpunan Mahasiswa UI</span>
                        </div>
                        <button type="button"
                            class="py-2.5 px-16 mb-4 text-lg font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sponsor" class="bg-primary mt-10">
        {{-- <div class="grid p-6 justify-items-center md:flex md:flex-row md:justify-center">
            <img src="{{ asset('img/logo/goethe.png') }}" alt="">
        </div> --}}
    </section>
    <section id="footer">
        @include('layout._footer')
    </section>
    <script src="{{ asset('js/countdown.js') }}"></script>
</body>

</html>
