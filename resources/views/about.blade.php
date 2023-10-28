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
    <section id="content" class="mt-10 lg:mt-56">
        <div class="grid">
            <div class="mb-10 px-10 mx-auto">
                <img src="{{ asset('img/logo/logo.png') }}" class="h-40 mr-3" alt="Logo IMBSJI" />
            </div>
            <div class="mb-5 px-10 mx-auto">
                <p class="font-medium text-base text-center">IKATAN MAHASISWA BAHASA DAN SASTRA JERMAN INDONESIA</p>
            </div>
            <div class="mb-10 px-12 md:px-80">
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
    <section id="footer" class="mt-10 sticky top-[100vh]">
        @include('layout._footer')
    </section>
</body>

</html>
