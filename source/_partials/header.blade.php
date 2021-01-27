<div>
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
</div>