<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

    <!-- Styles -->

</head>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body class="min-h-screen bg-gray-100 ">
    <div
        class=" justify-between relative sm:flex sm:justify-center sm:items-center h-16 bg-dots-darker bg-center bg-white selection:bg-red-500 selection:text-white">

        <div class=" flex  items-start" style="">
            <img src="img/th.jpg" alt="" class=" w-7 h-7">
        </div>
        <div class="">
            @if (Route::has('login'))
                <div class= "sm:top-0 sm:right-0 p-6 text-right z-0" style=" margin-left: 700px;">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>



    </div>
    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="  overflow-hidden shadow-sm sm:rounded-lg bg-white" style="">
                <div class="p-2 text-gray-900   justify-around">
                    <div class= " flex items-center justify-center">
                        {{-- <h1 class="   bg-gray-200   mx-10 w-[860px]  py-5 mb-12 px-6 font-bold text-xl  leading-loose text-black">
                           
                                 Le Groupe OCP, leader mondial des phosphates et des mines, possède plus de 70% de ses
                                réserves de phosphate naturel. Une partie du marché représente 31% des produits
                                phosphatés de l'entreprise, fondée en 1920, qui est un important acteur industriel
                                chimique et un mini-acteur.
                        </h1> --}}
                    </div>

                   <div class="w-full bg-gray-900 sm:h-[20vh] lg:h-[50vh] ">
                    <div class=" flex justify-center p-[50px] lg:pt-[120px] ">
                        <h3 class=" font-bold lg:text-[60px] text-white  sm:text-[30px]">Améliorer les <span class=" text-blue-900">compétences </span></h3>
                    </div>
                   </div>

                    <div class="m-5 md:m-20">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:w-4/5 mx-auto md:pt-10">
                            <div class="bg-orange-400 text-white py-5 md:py-16 md:px-10 rounded-lg">
                                <div class="m-5 md:m-0">
                                    <ul class="flex flex-wrap text-sm">
                                        <li
                                            class="bg-yellow-200 text-orange-400 px-3 py-1 rounded mr-3 mb-3 cursor-pointer transition duration-300 hover:bg-gray-100 hover:text-gray-600">
                                            Fondation</li>
                                        <li
                                            class="bg-yellow-200 text-orange-400 px-3 py-1 rounded mr-3 mb-3 cursor-pointer transition duration-300 hover:bg-gray-100 hover:text-gray-600">
                                            Production</li>
                                        <li
                                            class="bg-yellow-200 text-orange-400 px-3 py-1 rounded mr-3 mb-3 cursor-pointer transition duration-300 hover:bg-gray-100 hover:text-gray-600">
                                            Expansion</li>
                                    </ul>
                                    <p class="text-xs pt-5 md:pt-10 leading-loose">Le Groupe OCP a été fondé au
                                        Maroc en 1920 sous le nom d'Office Chérifien des Phosphates suite à un
                                        Arrêté Royal. La production minière a commencé en 1921, lorsqu'elle a
                                        commencé à extraire du phosphate naturel dans sa première mine à Khouribga.
                                        Le transport du phosphate vers le port de Casablanca commença également en
                                        1921, permettant la première exportation de phosphate cette année-là. Par la
                                        suite, l'OCP a lancé d'autres sites miniers à Youssoufia en 1931 et à
                                        Benguerir en 1976, et a lancé la production chimique à Safi en 1965 et à
                                        Jorf Lasfar en 1984.</p>
                                    <div class="mt-5 md:mt-10">
                                        <a href="#"
                                            class="bg-transparent border-2 border-white text-white py-2 px-4 rounded font-bold uppercase text-xs inline-block transition duration-300 hover:bg-gray-100 hover:text-gray-600">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img src="img/rou.jpg" alt="" class="h-94 md:h-auto w-full">
                                <img src="img/OCPAfrica2.jpg" alt="" class="h-94 my-1 md:h-auto w-full">

                            </div>
                        </div>
                    </div>

                     

                   

                    {{-- <div class="w-full relative">
                        <div class="relative">
                            <img src="img/home.webp" alt="" class="w-full max-h-[90vh]">
                            <p
                                class="absolute inset-0 flex items-center  mx-10  px-6 font-bold text-5xl leading-loose text-white">
                                Welcome

                            </p>
                            <p
                                class="absolute inset-0 flex items-center  mx-10 justify-end  px-6 font-bold text-5xl leading-loose text-white">
                                To the OCP

                            </p>
                        </div>
                    </div> --}}






                    {{-- <div class="lg:border-2 bg-gray-800  py-3 mt-28 sm:border">
                        <div class="flex justify-center items-center flex-wrap">
                            <div
                                class="m-2 sm:m-4 sm:rounded-none lg:mr-10 transform transition-transform hover:-translate-y-1">
                                <img src="img/OCPAfrica1.jpg" alt=""
                                    class="rounded-full w-48 h-48 shadow-xl shadow-indigo-400/50 hover:scale-110">
                            </div>

                            <div class="m-2 sm:m-4 lg:mr-10 transform transition-transform hover:-translate-y-1">
                                <img src="img/OCPAfrica2.jpg" alt=""
                                    class="rounded-full w-48 h-48 shadow-xl shadow-indigo-500/50 hover:scale-110">
                            </div>

                            <div class="m-2 sm:m-4 lg:mr-10 transform transition-transform hover:-translate-y-1">
                                <img src="img/OCPAfrica3.jpg" alt=""
                                    class="rounded-full w-48 h-48 shadow-xl shadow-indigo-500/50 hover:scale-110">
                            </div>

                            <div class="m-2 sm:m-4 transform transition-transform hover:-translate-y-1">
                                <img src="img/OCPAfrica4.jpg" alt=""
                                    class="rounded-full w-48 h-48 shadow-xl shadow-indigo-500/50 hover:scale-110">
                            </div>
                        </div>
 
                        <p
                            class="m-10  sm:text-sm lg:text-lg text-center  rounded-lg text-white bg-gray-700 p-7  line-clamp-4 lg:line-clamp-none">
                            Dans le paysage concurrentiel actuel, l’amélioration des compétences est essentielle à la
                            croissance personnelle et professionnelle. Les stratégies à cet effet comprennent
                            l’éducation formelle, l’apprentissage expérientiel, le mentorat et l’apprentissage
                            autodirigé. En adoptant l’apprentissage tout au long de la vie et en s’adaptant au
                            changement, les individus peuvent se positionner pour réussir dans leur carrière et au-delà.
                        </p>



                        <div class="mt-5 md:mt-10 flex justify-center">
                            <a href="#"
                                class="bg-transparent border-2 border-black text-black py-2 px-4 rounded font-bold uppercase text-xs inline-block transition duration-300 hover:bg-black hover:text-white">Read
                                More</a>
                        </div>
                    </div> --}}







                    <div class="shrink-0 flex items-center">

                    </div>


                </div>
            </div>
        </div>
    </div>

</body>


<x-footer />

</html>
