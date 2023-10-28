<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="IMBSJI atau Ikatan Mahasiswa Bahasa dan Sastra Jerman Indonesia adalah sebuah organisasi independen dan ekstrauniversiter dimana organisasi ini dibentuk sebagai wadah komunikasi, koordinasi dan konsolidasi antar mahasiswa Bahasa dan Sastra Jerman di seluruh Indonesia demi terwujudnya mahasiswa yang berkualitas insan edukatif, ilmiah dan profesional serta berpartisipasi dalam pembangunan nasional.">
    {{-- Scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans h-screen">
    <section id="navbar" class="navbar w-full sticky shadow-md">
        @include('layout._navbar')
    </section>
    <section id="hero">
        <div class="w-full grid">
            <div class="relative flex items-center justify-center">
                <img class="object-cover lg:object-cover h-96 lg:w-full" src="{{ asset('img/event/Partzip.png') }}"
                    alt="News">
                <div class="bg-white h-28 w-80 lg:w-1/3 absolute bottom-0">
                    <p class="p-5 lg:p-10 font-bold text-lg lg:text-2xl">Lektion 29 - Partzip II von IMBSJI</p>
                </div>
            </div>
            <div class="mt-5 mx-5 lg:ml-8 px-5 xl:mx-96 lg:px-72">
                <p class="font-semibold">27 Juli 2024</p>
            </div>
            <div class="mt-5 mx-5 lg:ml-8 px-5 xl:mx-96 lg:px-72">
                <div class="text-justify">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac purus sit amet nunc maximus
                        vulputate. Vestibulum sagittis orci ac odio dictum tempor. Morbi auctor vestibulum quam id
                        tincidunt. Integer eget sem nec nulla dictum dignissim. Donec at quam vel dolor hendrerit
                        interdum.
                        Maecenas auctor massa sed magna accumsan tristique. Quisque bibendum purus convallis, efficitur
                        libero at, fermentum neque. Phasellus lobortis justo at orci fermentum, in malesuada purus
                        sollicitudin. Fusce egestas eros in augue vehicula, eu vehicula elit laoreet. Integer eu justo
                        eu
                        ipsum feugiat gravida. Vivamus eget nisi nec nulla commodo pretium.</p>
                    <p class="mt-4">Vestibulum id ex id urna tincidunt vulputate in in velit. Nam vel lectus id enim
                        faucibus
                        tincidunt
                        ut in felis. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et
                        netus et malesuada fames ac turpis egestas. Sed hendrerit arcu vel ante laoreet, vel tincidunt
                        ligula elementum. Nulla a ligula auctor, venenatis leo eu, accumsan massa. Fusce sed lorem sed
                        dui
                        tincidunt convallis. Suspendisse in pharetra metus, ac rhoncus neque. Sed mattis a justo eget
                        pellentesque.</p>
                </div>
            </div>
            <div class="mt-5 mx-5 lg:ml-8 px-5 xl:mx-96 lg:px-72">
                <p class="font-medium">Contact Person: Sofia Doe (Line)</p>
            </div>
            <div class="mt-10 mx-5 lg:ml-8 px-5 xl:mx-auto lg:px-72">
                <img src="{{ asset('img/event/news/partzip-news.png') }}" alt="Partzip-news">
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
    <section id="footer" class="sticky top-[100vh]">
        @include('layout._footer')
    </section>
</body>

</html>
