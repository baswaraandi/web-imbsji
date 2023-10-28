<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="IMBSJI atau Ikatan Mahasiswa Bahasa dan Sastra Jerman Indonesia adalah sebuah organisasi independen dan ekstrauniversiter dimana organisasi ini dibentuk sebagai wadah komunikasi, koordinasi dan konsolidasi antar mahasiswa Bahasa dan Sastra Jerman di seluruh Indonesia demi terwujudnya mahasiswa yang berkualitas insan edukatif, ilmiah dan profesional serta berpartisipasi dalam pembangunan nasional.">
    {{-- Scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
</head>
<body class="font-sans h-screen">
    <section id="navbar" class="navbar w-full sticky shadow-md">
        @include('layout._navbar')
    </section>
    <section id="content" class="mt-10 lg:mt-32">
        <div class="grid">
            <div class="mb-10 px-10 mx-auto">
                <img src="{{ asset('img/himpunan/UI.png') }}" class="h-40 mr-3" alt="Logo UI" />
            </div>
            <div class="mb-5 px-10 mx-auto">
                <p class="font-medium text-base text-center">Himpunan Mahasiswa Sastra Jerman Universitas Indonesia</p>
            </div>
            <div class="mb-10 px-12 md:px-80 2xl:mx-80">
                <p class="text-center">IMBSJI atau Ikatan Mahasiswa Bahasa dan Sastra Jerman Indonesia adalah sebuah
                    organisasi independen
                    dan
                    ekstrauniversiter dimana organisasi ini dibentuk sebagai wadah komunikasi, koordinasi dan
                    konsolidasi
                    antar mahasiswa Bahasa dan Sastra Jerman di seluruh Indonesia demi terwujudnya mahasiswa yang
                    berkualitas insan edukatif, ilmiah dan profesional serta berpartisipasi dalam pembangunan nasional.
                </p>
            </div>
            <div class="px-10 md:px-28 mx-auto grid justify-items-center">
                <div class="mb-5 lg:mb-10">
                    <p class="font-bold">Event</p>
                </div>
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
                {{-- <div class="grid justify-center">
                    <button type="button"
                        class="py-2.5 px-24 mr-2 mb-4 text-xl font-medium text-gray-900 focus:outline-none bg-white border border-gray-800 hover:bg-gray-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200">Event</button>
                </div> --}}
                <div>
                    <p class="font-bold">OUR SOCIAL MEDIA</p>
                </div>
                <div class="mt-5">
                    <i class="fab fa-instagram mx-3" style="font-size:48px"></i>
                    <i class="fab fa-tiktok mx-3" style="font-size:38px"></i>
                </div>
            </div>
            <div class="px-10 md:px-28 mx-auto grid justify-items-center mt-10">
                <div>
                    <p class="font-bold">CONTACT PERSON</p>
                </div>
                <div class="mt-5 text-lg font-medium">
                    <span class="mx-3">Alexa</span>
                    <span class="mx-3">Danielle</span>
                    <span class="mx-3">Sofia</span>
                </div>
            </div>
        </div>
    </section>
    <section id="himpunan">
        <div class="pt-10">
            <div class="font-semibold text-xl lg:text-2xl text-slate-800 mb-10 text-center">
                <h1>Anggota IMBSJI</h1>
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
    <section id="footer" class="sticky top-[100vh]">
        @include('layout._footer')
    </section>
</body>
</html>