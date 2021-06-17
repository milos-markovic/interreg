<header x-data="{ searchModal: false, shareModal: false }">
    <div id="mobile nav" x-data="{ open: false, searchModal: false, shareModal: false }">

        <div x-show="open" @click.away="open = false" class="absolute top-0 bg-white w-full z-10">
            <ul>
                <li class="flex items-center justify-between border-b-2 border-white py-4 px-5" style="background: #FFD629;">
                    <span class="text-xl text-white font-medium">FŐMENÜ</span>
                    <a @click.prevent="open = false" href="" class="font-semibold text-xl mr-5">X</a>
                </li>
                <li>
                    <a href="/index-hu" class="flex items-center py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/home.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">FŐOLDAL</span>
                    </a>
                </li>
                <li>
                    <a href="/about-hu" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/about.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">A PROJEKTRŐL</span>
                    </a>
                </li>
                <li>
                    <a href="/objectives-hu" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/objectives.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">CÉLKITŰZÉSEK</span>
                    </a>
                </li>
                <li>
                    <a href="/partners-hu" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/partners.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">PARTNEREK</span>
                    </a>
                </li>
                <li>
                    <a href="/activities-hu" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/activities.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">AKTIVITÁSOK</span>
                    </a>
                </li>
                <li>
                    <a href="/blog-hu" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/blog.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">BLOG</span>
                    </a>
                </li>
                <li>
                    <a href="/gallery-hu" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/gallery.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">AKTUALITÁSOK ÉS GALÉRIA</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="max-w-screen-lg mx-auto p-5 block lg:hidden px-5 relative z-0">
            <div class="flex justify-between pb-2 border-b border-black mb-5">
                <div id="hamburger_icon">
                    <a @click.prevent ="open = true" href="">
                        <i class="fas fa-bars fa-lg"></i>
                    </a>
                </div>

                <div id="language" class="flex" style="color: #999;">
                    <a id="en" href="">EN</a>
                    <a id="sr" href="" class="mx-5">SRB</a>
                    <a id="hu" href="" >HU</a>
                </div>

                <div id="share">
                    <a @click.prevent="searchModal = true" href="">
                        <i class="fas fa-search"></i>
                    </a>

                    <a @click.prevent ="shareModal = true" href="" class="ml-5">
                        <i class="fas fa-share-alt"></i>
                    </a>
                </div>
            </div>

            <div>
                <div id="logo">
                    <a href="/">
                        <img src="/assets/img/programme-logo-hu.png" alt="Logo" style="width: 240px; height: 40px;">
                    </a>
                </div>
            </div>
        </div>

        <!-- search modal -->
        @include('_partials.searchModal')

        <!-- share modal -->
        @include('_partials.shareModal')
    </div>

    <div id="desktop nav" class="max-w-screen-desktop mx-auto hidden lg:block px-5 xl:px-0">
        <div id="topHeader" class="flex justify-between items-center" style="padding-top: 30px;">
            <div id="logo">
                <a href="/">
                    <img src="/assets/img/programme-logo-hu.png" alt="Logo" style="width: 300px;">
                </a>
            </div>

            <div id="social_icons" class="flex">
                <a href="" class="bg-gray-600 rounded-full flex justify-center items-center text-white" style="width: 35px; height: 35px;">
                    <i class="fab fa-youtube fa-lg" class=""></i>
                </a>
                <a href="" class="bg-gray-600 rounded-full flex justify-center items-center text-white mx-5" style="width: 35px; height: 35px;">
                    <i class="fab fa-linkedin-in fa-lg"></i>
                </a>
                <a href="" class="bg-gray-600 rounded-full flex justify-center items-center text-white" style="width: 35px; height: 35px;">
                    <i class="fab fa-facebook-f fa-lg"></i>
                </a>
            </div>

            @include('_partials.language')

            <div id="share">
                <a @click.prevent="searchModal = true" href="">
                    <i class="fas fa-search fa-lg"></i>
                </a>

                <a  @click.prevent="shareModal = true" href="" class="ml-5">
                    <i class="fas fa-share-alt fa-lg"></i>
                </a>
            </div>

                <!-- search modal -->
            @include('_partials.searchModal')

            <!-- share modal -->
            @include('_partials.shareModal')
        </div>

        <nav id="navigation" style="margin-top: 60px; margin-bottom: 30px;">
            <ul class="flex">
                <li class="mr-10">
                    <!-- <a href="/index-hu" >KEZDŐLAP</a> -->
                    <a class="{{ $page->selected('index-hu') }}" href="{{ $page->baseUrl }}/index-hu">KEZDŐLAP</a>
                </li>
                <li class="mr-10">
                    <!-- <a href="/about-hu">A PROJEKTRŐL</a> -->
                    <a class="{{ $page->selected('about-hu') }}" href="{{ $page->baseUrl }}/about-hu">A PROJEKTRŐL</a>
                </li>
                <li class="mr-10">
                    <!-- <a href="/objectives-hu">CÉLKITŰZÉSEK</a> -->
                    <a class="{{ $page->selected('objectives-hu') }}" href="{{ $page->baseUrl }}/objectives-hu">CÉLKITŰZÉSEK</a>
                </li>
                <li class="mr-10">
                    <!-- <a href="/partners-hu">PARTNEREK</a> -->
                    <a class="{{ $page->selected('partners-hu') }}" href="{{ $page->baseUrl }}/partners-hu">PARTNEREK</a>
                </li>
                <li class="mr-10">
                    <!-- <a href="/activities-hu">AKTIVITÁSOK</a> -->
                    <a class="{{ $page->selected('activities-hu') }}" href="{{ $page->baseUrl }}/activities-hu">AKTIVITÁSOK</a>
                </li>
                <li class="mr-10">
                    <!-- <a href="/blog-hu">BLOG</a> -->
                    <a class="{{ $page->selected('blog-hu') }}" href="{{ $page->baseUrl }}/blog-hu">BLOG</a>
                </li>
                <li>
                    <!-- <a href="/gallery-hu">AKTUALITÁSOK ÉS GALÉRIA</a> -->
                    <a class="{{ $page->selected('gallery-hu') }}" href="{{ $page->baseUrl }}/gallery-hu">AKTUALITÁSOK ÉS GALÉRIA</a>
                </li>
            </ul>
        </nav>
    </div>
    
    <div id="topImage" class="relative">
        <img src="/assets/img/lavander-1.jpg" alt="" class="h-96 md:h-full object-cover">

        <div class="max-w-screen-desktop mx-auto left-4 xl:inset-x-0 top-3  absolute">
            
            <p class="py-1 pl-4 text-xs lg:text-sm regNumber" style="clip-path: polygon(0 0, 93% 0, 100% 100%, 0% 100%); background: #FFD629;">HUSRB/1602/42/0073</p>
        
            <div class="pl-4 py-2  header" style="background-color: rgba(255,255,255, 0.3); clip-path: polygon(0 0, 93% 0, 100% 100%, 0% 100%);">
                    
                <h1 class="text-3xl md:text-4xl lg:text-5xl  font-secondary text-white">
                Női társadalmi vállalkozások<br> a vidéki térségekben
                </h1>
                
            </div>

            <div class="py-1 pl-4 women" style="background-color: rgba(255,255,255, 0.6); clip-path: polygon(0 0, 93% 0, 100% 100%, 0% 100%);">
                <p class="font-secondary text-xs md:text-sm">WOMEN-TO-SAVE</p>
            </div>
            
        </div>
    </div>
</header>
