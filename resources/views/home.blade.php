<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <div class="">
        <header class="py-4 bg-black bg-opacity-80 sm:py-6 fixed top-0 w-full z-10" x-data="{ expanded: false }">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <div class="shrink-0">
                        <a href="#" title="" class="flex">
                            <img class=" w-36 h-auto" src="{{ asset('images/ico/tide-logo-white.png') }}" alt="" />
                        </a>
                    </div>

                    {{-- <div class="flex md:hidden">
                        <button type="button" class="text-white" @click="expanded = !expanded" :aria-expanded="expanded">
                            <span x-show="!expanded" aria-hidden="true">
                                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </span>

                            <span x-show="expanded" aria-hidden="true">
                                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </span>
                        </button>
                    </div> --}}

                    <nav
                        class="hidden ml-10 mr-auto space-x-10 lg:ml-20 lg:space-x-12 md:flex md:items-center md:justify-start">
                        <a href="/home" title=""
                            class=" nav-link text-base font-normal text-gray-400 transition-all duration-200 hover:text-white">
                            Home </a>

                        <a href="/about" title=""
                            class="nav-link text-base font-normal text-gray-400 transition-all duration-200 hover:text-white">
                            About </a>

                        <a href="/resume" title=""
                            class=" nav-link text-base font-normal text-gray-400 transition-all duration-200 hover:text-white">
                            Resume </a>

                        <a href="/repos" title=""
                            class=" nav-link text-base font-normal text-gray-400 transition-all duration-200 hover:text-white">
                            Repositories </a>

                        <a href="/contact" title=""
                            class=" nav-link text-base font-normal text-gray-400 transition-all duration-200 hover:text-white">
                            Contact </a>
                    </nav>

                    <div class="relative hidden md:items-center md:justify-center md:inline-flex group">
                        <div
                            class="absolute transition-all duration-200 rounded-full -inset-px bg-gradient-to-r from-cyan-500 to-purple-500 group-hover:shadow-lg group-hover:shadow-cyan-500/50">
                        </div>
                        <a href="https://github.com/ford69" title=""
                            class="relative inline-flex items-center justify-center px-6 py-2 text-base font-normal text-white bg-black border border-transparent rounded-full"
                            role="button" target="_blank"> Github </a>
                    </div>
                </div>

                {{-- <nav x-show="expanded" x-collapse>
                    <div class="flex flex-col pt-8 pb-4 space-y-6">
                        <a href="#" title="" class="text-base font-normal text-gray-400 transition-all duration-200 hover:text-white"> Products </a>

                        <a href="#" title="" class="text-base font-normal text-gray-400 transition-all duration-200 hover:text-white"> Features </a>

                        <a href="#" title="" class="text-base font-normal text-gray-400 transition-all duration-200 hover:text-white"> Pricing </a>

                        <a href="#" title="" class="text-base font-normal text-gray-400 transition-all duration-200 hover:text-white"> Support </a>

                        <div class="relative inline-flex items-center justify-center group">
                            <div class="absolute transition-all duration-200 rounded-full -inset-px bg-gradient-to-r from-cyan-500 to-purple-500 group-hover:shadow-lg group-hover:shadow-cyan-500/50"></div>
                            <a href="#" title="" class="relative inline-flex items-center justify-center w-full px-6 py-2 text-base font-normal text-white bg-black border border-transparent rounded-full" role="button"> Start free trial </a>
                        </div>
                    </div>
                </nav> --}}
            </div>
        </header>

        <section id="home" class="relative py-36 overflow-hidden bg-black sm:pb-16 lg:pb-20 xl:pb-24">
            <div class="px-4 mx-auto relativea sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid items-center grid-cols-1 gap-y-12 lg:grid-cols-2 gap-x-16">
                    <div>
                        <p class=" mt-2 text-lg font-normal text-gray-400 sm:mt-8">I AM..</p>
                        <h1 class=" text-4xl font-normal text-white sm:text-5xl lg:text-6xl xl:text-7xl">
                            Clifford Kwaku Kyereme
                            <span class="relative inline-flex sm:inline">
                                <span
                                    class="bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] blur-lg filter opacity-30 w-full h-full absolute inset-0"></span>
                                <span class="relative"> Manu </span>
                            </span>
                        </h1>
                        <p class="mt-4 text-lg font-normal text-gray-400 sm:mt-8">And I'll bring your software solution to life.
                        </p>

                        <form id="searchForm" action="#" method="GET" class="relative mt-8 rounded-full sm:mt-12">
                            <div class="relative">
                                <div
                                    class="absolute rounded-full -inset-px bg-gradient-to-r from-cyan-500 to-purple-500">
                                </div>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-6">
                                        <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </div>
                                    <input type="text" name="search" id="searchInput"
                                        placeholder="Find out about me ?"
                                        class="block w-full py-4 pr-6 text-white placeholder-gray-500 bg-black border border-transparent rounded-full pl-14 sm:py-5 focus:border-transparent focus:ring-0" />
                                        <div class="absolute z-10 bg-black bg-opacity-80 text-white border border-gray-600 shadow-lg rounded-b-lg max-h-40 overflow-y-auto w-[calc(100%-2rem)] ml-4 hidden transition-all duration-300 ease-in-out" id="suggestionsContainer"></div>
                                    </div>
                            </div>
                            <div class="sm:absolute flex sm:right-1.5 sm:inset-y-1.5 mt-4 sm:mt-0">
                                <button type="submit"
                                    class="inline-flex items-center justify-center w-full px-5 py-5 text-sm font-semibold tracking-widest text-black uppercase transition-all duration-200 bg-white rounded-full sm:w-auto sm:py-3 hover:opacity-90">Find
                                    out about me</button>
                            </div>
                        </form>

                        <div class="mt-8 sm:mt-12">
                            <p class="text-lg font-normal text-white">Trusted by 20+ Clients</p>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="absolute inset-0">
                            <svg class="blur-3xl filter opacity-70" style="filter: blur(64px)" width="444"
                                height="536" viewBox="0 0 444 536" fill="none"
                                xmlns="{{ asset('images/ico/tide.jpeg') }}">
                                <path
                                    d="M225.919 112.719C343.98 64.6648 389.388 -70.487 437.442 47.574C485.496 165.635 253.266 481.381 135.205 529.435C17.1445 577.488 57.9596 339.654 9.9057 221.593C-38.1482 103.532 107.858 160.773 225.919 112.719Z"
                                    fill="url(#c)" />
                                <defs>
                                    <linearGradient id="c" x1="82.7339" y1="550.792" x2="-39.945"
                                        y2="118.965" gradientUnits="userSpaceOnUse">
                                        <stop offset="0%" style="stop-color: var(--color-cyan-500)" />
                                        <stop offset="100%" style="stop-color: var(--color-purple-500)" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>



                        {{-- <div class="absolute inset-0">
                            <img class="object-cover w-full h-full opacity-50"
                                src="https://landingfoliocom.imgix.net/store/collection/dusk/images/noise.png"
                                alt="" />
                        </div> --}}

                        {{-- <img class="relative w-full max-w-md mx-auto" src="{{ asset('images/person-try.png') }}"
                            alt="" /> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- About Me -->
        <section id="about" class="pb-20  bg-gray-900 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-black bg-opacity-50 w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto ">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-cyan-500">
                                    <i class="fas fa-award"></i>
                                </div>
                                <h6 class="text-xl text-white font-semibold">
                                    <span
                                        class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-purple-600">
                                        Full Stack Developer </span>
                                </h6>
                                <p class="mt-2 mb-4 text-gray-400">
                                    Empowering users with seamless and responsive web applications, leveraging Vue.js,
                                    Alpine.js, and Laravel for efficient and dynamic frontend experiences.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-black bg-opacity-50 w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-cyan-500">
                                    <i class="fas fa-retweet"></i>
                                </div>
                                <h6 class="text-xl text-white font-semibold">
                                    <span
                                        class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-purple-600">
                                        Mobile App Developer </span>
                                </h6>
                                <p class="mt-2 mb-4 text-gray-400">
                                    Proficient in Flutter development.Creating sleek, cross-platform applications with
                                    stunning UI/UX and seamless functionality.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-black bg-opacity-50 w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-cyan-500">
                                    <i class="fas fa-fingerprint"></i>
                                </div>
                                <h6 class="text-xl text-white font-semibold">
                                    <span
                                        class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-purple-600">UX/UI
                                        Designer </span>
                                </h6>
                                <p class="mt-2 mb-4 text-gray-400">
                                    Crafting captivating digital experiences through intuitive design solutions that
                                    elevate user engagement and satisfaction.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center mt-32">
                    <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                        <div
                            class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-cyan-500">
                            <i class="fas fa-user-friends text-xl"></i>
                        </div>
                        <h3 class="text-3xl mb-2 text-white font-semibold leading-normal">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-purple-600">
                                Want to Know more about me ? </span>
                        </h3>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-400">
                            A versatile Full Stack Developer renowned for my exceptional Front-End
                            skills and expertise in the TALL stack: Tailwind CSS,
                             Alpine.js, Laravel / Vue.js, and MySQL.
                        </p>
                        <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-400">
                            With a background spanning fintech, automations, event management, banking, and security,
                            I specialize in crafting innovative solutions that drive efficiency and elevate user
                            experiences. Let's collaborate to bring your digital projects to life!
                        </p>
                        <a href="https://github.com/ford69"
                            class="font-bold text-gray-500 mt-8" target="_blank">Check Github!</a>
                    </div>
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-black">
                            <img alt="..."
                                src="{{ asset('images/me.jpeg') }}"
                                class="w-full align-middle rounded-t-lg" />
                            <blockquote class="relative p-8 mb-4">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 583 95" class="absolute left-0 w-full block"
                                    style="height: 95px; top: -94px;">
                                    <polygon points="-30,95 583,95 583,65" class="text-black fill-current">
                                    </polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-gray-400">
                                   About Me
                                </h4>
                                <p class="text-md font-light mt-2 text-gray-400">
                                    I am a Ghanaian living in accra.I hold a bachelor's degree in Information Technology.
                                    Since my college days, I've been dedicated to building diverse and innovative projects.
                                    I have nearly 4 years of professional experience,
                                    In my free time, you can often find me behind a console playing video games at the gym, playing football.
                                    Explore my portfolio to see some of the projects I've worked on,
                                    and feel free to reach out if you'd like to collaborate or learn more about my work.
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End -->
        <!--resume -->
        <section id="resume" class="relative bg-black py-20">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-black fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg"
                            src="{{ asset('images/goal.jpg') }}" />
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-12">
                            <div
                                class="text-cyan-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-cyan-300">
                                <i class="fas fa-rocket text-xl"></i>
                            </div>
                            <h3 class="text-3xl text-gray-200 font-semibold">Achievements</h3>
                            <p class="mt-4 text-lg leading-relaxed text-gray-400">
                                After some extensive training and practice here are some certifications
                                 I achieved over the years.
                            </p>
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-cyan-200 mr-3"><i
                                                    class="fas fa-fingerprint"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-400">
                                                API Security Architect Certification <b>(Issued by API Academy: January 2023)</b>
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-cyan-200 mr-3"><i
                                                    class="fab fa-html5"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-400">
                                                Principles of Secure Coding Certification <b>(Issued by Udemy:February 2024)</b>
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                {{-- <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-cyan-200 mr-3"><i
                                                    class="far fa-paper-plane"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-400">Dynamic components</h4>
                                        </div>
                                    </div>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- resume -->

        <!-- repos -->
        <section id="repos" class="relative bg-black px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-32">
            <div class="">
                <h2 class="text-3xl text-white leading-tight font-bold">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-purple-600">Projects
                    </span>
                </h2>
                <p class="text-gray-400 mt-2 md:max-w-lg">These are some projects i contributed to and built</p>

                <a href="#" title="" class="inline-block text-teal-500 font-semibold mt-6 mt:md-0">View
                    All Posts</a>
            </div>

            <div class="md:flex mt-12 md:-mx-4">
                <div class="md:px-4 md:w-1/2 xl:w-1/4">
                    <div class=" bg-gray-900 rounded border border-cyan-500 ">
                        <div class="w-full h-48 overflow-hidden bg-gray-300">
                            <img class="w-full h-48"
                                src="{{ asset('images/products-1.png') }}" alt="">
                        </div>
                        <div class="p-4">
                            <div class="flex items-center text-sm">
                                <span class="text-teal-500 font-semibold">Business</span>
                                <span class="ml-4 text-gray-200">29 Nov, 2021</span>
                            </div>
                            <p class="text-lg text-gray-100 font-semibold leading-tight mt-4">Vue.js and Laravel ecommerce application</p>
                            <p class="text-gray-200 mt-1">Ecommerce web application .
                            </p>
                            <div class="flex items-center mt-4">
                                <div class="w-8 h-8 rounded-full overflow-hidden bg-gray-300"></div>
                                <div class="ml-4">
                                    <p class="text-gray-600">By <span class="text-gray-200 font-semibold">Clifford
                                            Manu</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:px-4 md:w-1/2 xl:w-1/4 mt-4 md:mt-0">
                    <div class="bg-gray-900 rounded border border-cyan-500">
                        <div class="w-full h-48 overflow-hidden bg-gray-300">
                            <img class="h-48"
                                src="{{ asset('images/portfolio/product-2.png') }}"
                                alt="">
                        </div>
                        <div class="p-4">
                            <div class="flex items-center text-sm">
                                <span class="text-teal-500 font-semibold">Social</span>
                                <span class="ml-4 text-gray-100">1 April, 2024</span>
                            </div>
                            <p class="text-lg text-gray-100 font-semibold leading-tight mt-4">Php Laravel Framework
                                Website
                                application</p>
                            <p class="text-gray-200 mt-1">social chat wep application
                            </p>
                            <div class="flex items-center mt-4">
                                <div class="w-8 h-8 rounded-full overflow-hidden bg-gray-300"></div>
                                <div class="ml-4">
                                    <p class="text-gray-600">By <span class="text-gray-200 font-semibold">Clifford
                                            Manu</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:px-4 md:w-1/2 xl:w-1/4 mt-4 md:mt-0">
                    <div class="bg-gray-900 rounded border border-cyan-500 ">
                        <div class="w-full h-48 overflow-hidden bg-gray-300">
                            <img class="h-48"
                                src="{{ asset('images/portfolio/product-3.png') }}"
                                alt="">
                        </div>
                        <div class="p-4">
                            <div class="flex items-center text-sm">
                                <span class="text-teal-500 font-semibold">Business</span>
                                <span class="ml-4 text-gray-100">10 Nov, 2022</span>
                            </div>
                            <p class="text-lg text-gray-100 font-semibold leading-tight mt-4">Php Laravel Alpine.js
                                webapplication system
                            </p>
                            <p class="text-gray-200 mt-1">Real-estate management system
                            </p>
                            <div class="flex items-center mt-4">
                                <div class="w-8 h-8 rounded-full overflow-hidden bg-gray-300"></div>
                                <div class="ml-4">
                                    <p class="text-gray-600">By <span class="text-gray-200 font-semibold">Clifford
                                            Manu</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:px-4 md:w-1/2 xl:w-1/4 mt-4 md:mt-0">
                    <div class="bg-gray-900 rounded border border-cyan-500 ">
                        <div class="w-full h-48 overflow-hidden bg-gray-300">
                            <img class="h-48"
                                src="{{ asset('images/Screenshot 2024-01-18 at 12.13.14 PM (2).png') }}"
                                alt="">
                        </div>
                        <div class="p-4">
                            <div class="flex items-center text-sm">
                                <span class="text-teal-500 font-semibold">Social</span>
                                <span class="ml-4 text-gray-100">29 July, 2022</span>
                            </div>
                            <p class="text-lg text-gray-100 font-semibold leading-tight mt-4">Spotify Playlist
                                Generator</p>
                            <p class="text-gray-200 mt-1">application for sorting music preferences
                            </p>
                            <div class="flex items-center mt-4">
                                <div class="w-8 h-8 rounded-full overflow-hidden bg-gray-300"></div>
                                <div class="ml-4">
                                    <p class="text-gray-600">By <span class="text-gray-200 font-semibold">Clifford
                                            Manu</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- not -->
        <section class="pb-20 relative block bg-gray-900">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold text-white">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-purple-600">
                                Want to connect ? </span>
                        </h2>
                        <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                            I'm always open to new opportunities and collaborations. Whether you're interested in discussing innovative projects,
                             seeking a skilled software developer, or just want to network, feel free to reach out. Let's connect and explore how
                             we can work together to achieve great things!

                        </p>
                    </div>
                </div>
                {{-- <div class="flex flex-wrap mt-12 justify-center">
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <div
                            class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-cyan-500 inline-flex items-center justify-center">
                            <i class="fas fa-medal text-xl"></i>
                        </div>
                        <h6 class="text-xl mt-5 font-semibold text-white">
                            Excelent Services
                        </h6>
                        <p class="mt-2 mb-4 text-gray-500">

                        </p>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <div
                            class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-cyan-500 inline-flex items-center justify-center">
                            <i class="fas fa-poll text-xl"></i>
                        </div>
                        <h5 class="text-xl mt-5 font-semibold text-white">
                            Grow your market
                        </h5>
                        <p class="mt-2 mb-4 text-gray-500">

                        </p>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <div
                            class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-cyan-500 inline-flex items-center justify-center">
                            <i class="fas fa-lightbulb text-xl"></i>
                        </div>
                        <h5 class="text-xl mt-5 font-semibold text-white">Launch time</h5>
                        <p class="mt-2 mb-4 text-gray-500">

                        </p>
                    </div>
                </div> --}}
            </div>
        </section>
        <!--Contact -->
        <section id="contact" class="relative block py-24 lg:pt-0 bg-gray-900">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48 ">
                    <div class="w-full lg:w-6/12 px-4 ">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gradient-to-r from-cyan-500 to-purple-500 bg-gray-300">
                            <div class="flex-auto p-5 lg:p-10">
                                <h4 class="text-2xl text-white font-semibold">Want to work with me?</h4>
                                <p class="leading-relaxed mt-1 mb-4 text-gray-200">
                                    Complete this form and we will get back to you in 24 hours.
                                </p>

                                @if (session('success'))
                                    <div class="alert alert-success text-green-600 font-bold">
                                        {{ session('success') }}
                                    </div>
                                @elseif(session('error'))
                                    <div class="alert alert-danger text-red-600">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <form action="{{ url('/send') }}" method="POST">
                                    @csrf
                                    <div class="relative w-full mb-3 mt-8">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="full-name">Full Name</label><input type="text" id="full_name" name="full_name"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-100 bg-gray-900 rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="Full Name" style="transition: all 0.15s ease 0s;"  required/>
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="email">Email</label><input type="email" id="email" name="email"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-100 bg-gray-900 rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="Email" style="transition: all 0.15s ease 0s;" required />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="content">Message</label>
                                        <textarea id rows="4" cols="80" id="content" name="content"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-100 bg-gray-900 rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="Type a message..." required></textarea>
                                    </div>
                                    <div class="text-center mt-6">
                                        <button
                                            class="btn bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                            role="button" type="submit" style="transition: all 0.15s ease 0s;">
                                            Send Message
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer class="relative bg-black pt-8 pb-6">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-black fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4">
                        <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
                        <h5 class="text-lg mt-0 mb-2 text-gray-500">
                            Find me on any of these platforms, I respond within 24hrs.
                        </h5>
                        <div class="mt-6">
                            <button
                                class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                                type="button">
                                <i class="flex fab fa-twitter"></i></button><button
                                class="bg-white text-pink-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                                type="button">
                                <i class="flex fab fa-instagram"></i></button><button
                                class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                                type="button">
                                <i class="flex fab fa-linkedin-in"></i></button><button
                                class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                                type="button">
                                <i class="flex fab fa-github"></i>
                            </button>
                        </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                        <div class="flex flex-wrap items-top mb-6">
                            <div class="w-full lg:w-4/12 px-4 ml-auto">
                                <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Useful
                                    Links</span>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="text-gray-700 hover:text-gray-100 font-semibold block pb-2 text-sm"
                                            href="#">More About Me</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-700 hover:text-gray-100 font-semibold block pb-2 text-sm"
                                            href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-700 hover:text-gray-100 font-semibold block pb-2 text-sm"
                                            href="#">Github</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-700 hover:text-gray-100 font-semibold block pb-2 text-sm"
                                            href="#">Free Products</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Location & Contact
                                    </span>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="text-gray-700 hover:text-gray-100 font-semibold block pb-2 text-sm"
                                            href="#">Tema Community 15 Accra, Ghana</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-700 hover:text-gray-100 font-semibold block pb-2 text-sm"
                                            href="#">P.O Box 6665 Tema - Ghana</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-700 hover:text-gray-100 font-semibold block pb-2 text-sm"
                                            href="#">+233 544 02 3250 / +233 503 98 4976</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-700 hover:text-gray-100 font-semibold block pb-2 text-sm"
                                            href="#">cliffordmanu7@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-400" />
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                        <div class="text-sm text-gray-600 font-semibold py-1">
                            Copyright © 2024 My Portfolio Website by
                            <a href="https://www.creative-tim.com" class="text-gray-600 hover:text-gray-900">Clifford
                                Manu</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        // Add smooth scrolling behavior to the navigation links
        document.querySelectorAll('.nav-link').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        const searchInput = document.getElementById('searchInput');
        const suggestionsContainer = document.getElementById('suggestionsContainer');

        searchInput.addEventListener('input', async () => {
            const query = searchInput.value.toLowerCase();
            if (query) {
                try {
                    const response = await axios.get(`/search-suggestions?query=${query}`);
                    const suggestions = response.data;
                    suggestionsContainer.innerHTML = '';
                    if (suggestions.length > 0) {
                        suggestions.forEach(suggestion => {
                            const suggestionItem = document.createElement('div');
                            suggestionItem.classList.add('suggestion-item');
                            suggestionItem.textContent = suggestion;
                            suggestionItem.addEventListener('click', () => {
                                searchInput.value = suggestion;
                                suggestionsContainer.innerHTML = '';
                            });
                            suggestionsContainer.appendChild(suggestionItem);
                        });
                        suggestionsContainer.style.display = 'block';
                    } else {
                        suggestionsContainer.style.display = 'none';
                    }
                } catch (error) {
                    console.error('Error fetching suggestions:', error);
                    suggestionsContainer.style.display = 'none';
                }
            } else {
                suggestionsContainer.style.display = 'none';
            }
        });
        document.addEventListener('click', (e) => {
            if (!searchInput.contains(e.target) && !suggestionsContainer.contains(e.target)) {
                suggestionsContainer.style.display = 'none';
            }
        });
    </script>

</body>



</html>
