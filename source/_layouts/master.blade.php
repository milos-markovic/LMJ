<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

        <title>L&M&J doo - Iznajmlivanje šatora i organizacija događaja</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <!-- <link rel="icon" href="/favicon.ico"> -->
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/logo/lmy-32x32.png">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet"> -->
        <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <!-- alpine js -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-gray-50 text-gray-700 leading-normal font-sans">
        <header class="flex items-center shadow bg-white border-b h-24 py-4" role="banner">
            <div class="container flex items-center max-w-6xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <img class="h-16" src="/assets/img/logo/lmy.png" alt="{{ $page->siteName }} logo" />
                    </a>
                </div>

                <div id="vue-search" class="flex flex-1 justify-end items-center">
                    @include('_nav.menu')

                    <!-- @include('_nav.menu-toggle') -->
                </div>
            </div>
        </header>

        <div id="mainHeader" class="py-10 border-b-8 border-gray-300" style="background: #171717;">
            <div class="flex-auto max-w-6xl w-full container mx-auto px-6 leading-normal">
                 <h1 class="text-2xl text-yellow-500 m-0">Industrijski šatori</h1>
                 <h3 class="text-base text-gray-500 m-0 italic">Šatori i hale za sve prilike</h3>
            </div>
        </div>

        @include('_nav.menu-responsive')

        <main role="main" class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
            @yield('body')
        </main>

        <footer>
            <div id="topFooter" style="background: #222222;" >
                <div class="flex-auto w-full container max-w-6xl mx-auto px-6 py-16">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                        <div>
                            <h3 class="text-2xl font-semibold text-gray-500 italic">Kontakt</h3>
                            <ul class="list-none text-gray-500 m-0">
                                <li class="flex items-center mb-3">
                                    <span>
                                        <svg class="h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </span>
                                    <span class="text-xs ml-1">Mišeluk III/10, Sremska Kamenica</span>
                                </li>
                                <li class="flex items-center mb-3">
                                    <span>
                                        <svg class="h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                    </span>
                                    <span class="text-xs ml-1">+381 63/80-21-902</span>
                                </li>
                                <li class="flex items-center mb-3">
                                    <span>
                                        <svg class="h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                    </span>
                                    <span class="text-xs ml-1">+381 65/80-21-902</span>
                                </li>
                                <li class="flex items-center">
                                    <span>
                                        <svg class="h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </span>
                                    <span class="text-xs text-white ml-1">lmj2doo@gmail.com</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-2xl text-gray-500 font-semibold italic">Radno vrijeme</h3>
                            <ul class="list-none text-gray-500 m-0">
                                <li class="flex items-center mb-3">
                                    <span>
                                        <svg class="h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <span class="text-xs ml-1">Pon - Pet: 08:00h - 16:00h</span>
                                </li>
                                <li class="flex items-center mb-3">
                                    <span>
                                        <svg class="h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <span class="text-xs ml-1">Subota: Zatvoreno</span>
                                </li>
                                <li class="flex items-center mb-3">
                                    <span>
                                        <svg class="h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <span class="text-xs ml-1">Nedjelja: Zatvoreno</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-2xl font-semibold text-gray-500 italic">Najnovije obavijesti</h3>
                            <ul class="list-none m-0">
                                <li>
                                    <a href="" class="text-xs text-gray-500">Industrijski skladišni šator PVC/LIM - TIP 2</a>
                                </li>
                                <li>
                                    <a href="" class="text-xs text-gray-500">Industrijski skladišni šator PVC/PVC - TIP 1</a>
                                </li>
                            </ul>
                        </div>
                        <div class="md:pl-10">
                            <h3 class="text-2xl font-semibold text-gray-500 italic">Pratite nas</h3>

                            <div class="flex items-center">
                                <a href="" class="mr-2">
                                    <img class="h-10" src="/assets/img/social_icons/facebook.webp" alt="facebook icon">
                                </a>
                                
                                <a href="" class="ml-1">
                                    <img class="h-10" src="/assets/img/social_icons/youtube.png" alt="facebook icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bottomFooter" class="py-5 md:py-0" style="background: #0e0e0e;"  >
                <div class="flex-auto w-full container max-w-6xl mx-auto px-6">
                    <div class="flex flex-col md:flex-row md:items-center justify-between">
                        <div class="md:flex items-center">
                            <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                                <img class="h-12 md:h-10 mr-3" src="/assets/img/logo/lmy.png" alt="{{ $page->siteName }} logo" />
                            </a>
                            <p class="text-xs text-white sm:ml-3">
                                © Copyright 2021. Sva prava pridržana.
                            </p>
                        </div>
                        <div class="self-end md:self-start">
                            <p class="text-white text-xs">
                                Web development by <a href="" class="text-blue-400">NSWebDevelopment</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
