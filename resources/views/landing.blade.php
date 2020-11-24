<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
        nav {
            z-index: 10;
            background-color: white;
            box-shadow: -1px 4px 25px 1px rgba(0, 0, 0, 0.65);
        }
    </style>
</head>

<body class="text-gray-800 antialiased">

    @extends('parcial.navbar')

    <main class="mt-8">
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("{{asset('image/back.jpg')}}");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h1 class="text-white font-semibold text-5xl">
                                {{ config('app.name', 'Laravel') }}
                            </h1>
                            <p class="mt-4 text-lg text-gray-300">
                                This website is a website to help you recap school attendance during the pandemic and attend school online from home.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="height: 70px; transform: translateZ(0px);">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>

        <section class="pb-20 bg-gray-300 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                    <i class="fas fa-download"></i>
                                </div>
                                <h6 class="text-xl font-semibold">
                                    Can Print Pdf & Excel</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    This website can print absences or other data into PDF or Excel. by using dompdf and PHPexcel. try it yourself and feel the ease.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                    <i class="fas fa-anchor"></i>
                                </div>
                                <h6 class="text-xl font-semibold">
                                    Integrated With Voyager</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    Voyager is a Laravel Admin Package that includes BREAD(CRUD) operations, a media manager, menu builder, and much more.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                    <i class="fab fa-laravel"></i>
                                </div>
                                <h6 class="text-xl font-semibold">
                                    With Laravel 8 Technology</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center mt-32">
                    <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                        <div class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                            <i class="fas fa-anchor text-xl"></i>
                        </div>
                        <h3 class="text-3xl mb-2 font-semibold leading-normal">
                            Integrated With Voyager
                        </h3>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                            Voyager has a fully functional media manager which allows you to view/edit/delete files from your storage. All files in your application will be easily accessible and will live in a single place. Compatible with local or s3 file storage.
                        </p>
                        <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                            Similar to CRUD, Voyager has a system called BREAD which is Browse, Read, Edit, Add, and Delete. You can easily add any BREAD views and functionality to any table in your database. Have a products table, easily add the Browse Read Edit Add & Delete functionality in seconds!
                        </p>
                        <a href="https://voyager.devdojo.com/" class="font-bold text-gray-800 mt-8">Check Laravel Voyager Now!</a>
                    </div>
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                            <img alt="..." src="{{ asset('image/voyager.png')}}" class="w-full align-middle rounded-t-lg" />
                            <blockquote class="relative p-8 mb-4">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 w-full block" style="height: 95px; top: -94px;">
                                    <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current"></polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    The Missing Laravel Admin
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    Voyager is a Laravel Admin Package that includes BREAD(CRUD) operations, a media manager, menu builder, and much more.
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative py-20">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px; transform: translateZ(0px);">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-6/12 ml-auto mr-auto px-4">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{ asset('image/show.png')}}" />
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-12">
                            <div class="p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full" style="background-color: #C3C8FE;">
                                <img src="{{ asset('image/logo1.svg')}}" alt="..." width="80%">
                            </div>
                            <h3 class="text-3xl font-semibold">Convenience for all</h3>
                            <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                This website has several features and conveniences for teachers who want to take their students during the pandemic from home without any hassle. with just 1 click.
                            </p>
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full  mr-3" style="background-color: #C3C8FE;"><i class="fas fa-file-pdf" style="color: #6875F5;"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">
                                                Can print data absen to pdf
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full  mr-3" style="background-color: #C3C8FE;"><i class="fas fa-file-excel" style="color: #6875F5;"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">Can print data absen to excel</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full  mr-3" style="background-color: #C3C8FE;"><i class="fas fa-receipt" style="color: #6875F5;"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">CRUD data absen with easy interaction</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-20 pb-48">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center text-center mb-24">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold">
                            Behind This Project</h2>
                        <p class="text-lg leading-relaxed m-4 text-gray-600">
                            And below are the names of the people behind this absensis website. give them appreciate by following sosmed and github accounts. That is all and thank you.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-full md:w-6/12 lg:w-4/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img alt="..." src="{{ asset('image/aku.png')}}" class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Muhammad Farras Jibran</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Web Developer
                                </p>
                                <div class="mt-6">
                                    <a href="https://www.instagram.com/farasjbrn/" class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1 pt-15" type="button">
                                        <i class="fab fa-instagram mt-2"></i>
                                    </a>
                                    <a href="https://github.com/farasjibran" class="bg-white shadow w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-github mt-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 lg:w-4/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img alt="..." src="{{ asset('image/akmal.png')}}" class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Akmal Permata Sukma</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Web Developer
                                </p>
                                <div class="mt-6">
                                    <a href="https://www.instagram.com/akmalsukma_/" class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-instagram mt-2"></i>
                                    </a>
                                    <a href="https://github.com/akmalsukma" class="bg-white shadow w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-github mt-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 lg:w-4/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img alt="..." src="https://images.unsplash.com/photo-1552158732-06dc1d835de0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=801&q=80" class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Jerry Yusuf Simbolon</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Resource Team
                                </p>
                                <div class="mt-6">
                                    <a href="https://www.instagram.com/imjereh/" class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-instagram mt-2"></i>
                                    </a>
                                    <a href="https://github.com/Jerryy25" class="bg-white shadow w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-github mt-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 lg:w-5/12 lg:mb-0 mb-12 px-4 mt-12" style="margin-left: 70px;">
                        <div class="px-6">
                            <img alt="..." src="{{ asset('image/oje.png')}}" class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Fauzan Adli Firdaus</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    UI/UX Designer
                                </p>
                                <div class="mt-6">
                                    <a href="https://www.instagram.com/oje.28/" class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-instagram mt-2"></i>
                                    </a>
                                    <a href="https://github.com/fauzanadlif" class="bg-white shadow w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-github mt-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 mt-12">
                        <div class="px-6">
                            <img alt="..." src="{{ asset('image/syahdah.png')}}" class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Syahdah Hamidah</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Resource Team
                                </p>
                                <div class="mt-6">
                                    <a href="https://www.instagram.com/sy.hmdhh/" class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-instagram mt-2"></i>
                                    </a>
                                    <a href="https://github.com/SyahdaHamidah" class="bg-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1 shadow" type="button">
                                        <i class="fab fa-github mt-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @extends('parcial.footer')
</body>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
</script>

</html>
