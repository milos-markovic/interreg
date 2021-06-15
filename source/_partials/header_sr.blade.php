<header>
    <div id="mobile nav" x-data="{ open: false }">

        <div x-show="open" @click.away="open = false" class="absolute top-0 bg-white w-full z-10">
            <ul>
                <li class="flex items-center justify-between border-b-2 border-white py-4 px-5" style="background: #FFD629;">
                    <span class="text-xl text-white font-medium">GLAVNI MENI</span>
                    <a @click.prevent="open = false" href="" class="font-semibold text-xl mr-5">X</a>
                </li>
                <li>
                    <a href="/index-sr" class="flex items-center py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/home.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">POČETNA</span>
                    </a>
                </li>
                <li>
                    <a href="/about-sr" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/about.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">O PROJEKTU</span>
                    </a>
                </li>
                <li>
                    <a href="/objectives-sr" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/objectives.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">CILJEVI</span>
                    </a>
                </li>
                <li>
                    <a href="/partners-sr" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/partners.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">PARTNERI</span>
                    </a>
                </li>
                <li>
                    <a href="/activities-sr" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/activities.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">AKTIVNOSTI</span>
                    </a>
                </li>
                <li>
                    <a href="/blog-sr" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/blog.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">BLOG</span>
                    </a>
                </li>
                <li>
                    <a href="/gallery-sr" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/gallery.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">AKTUELNOSTI I GALERIJA</span>
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
                    <a href="">
                        <i class="fas fa-search"></i>
                    </a>

                    <a href="" class="ml-5">
                        <i class="fas fa-share-alt"></i>
                    </a>
                </div>
            </div>

            <div>
                <div id="logo">
                    <a href="/">
                        <img src="/assets/img/programme-logo-sr.png" alt="Logo" style="width: 240px; height: 40px;">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="desktop nav" class="max-w-screen-desktop mx-auto hidden lg:block px-5 xl:px-0">
        <div id="topHeader" class="flex justify-between items-center" style="padding-top: 30px;">
            <div id="logo">
                <a href="/">
                    <img src="/assets/img/programme-logo-sr.png" alt="Logo" style="width: 300px;">
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

            <div id="language" class="flex" style="color: #999;">
                <a id="en" href="">EN</a>
                <a id="sr" href="" class="mx-5">SRB</a>
                <a id="hu" href="" >HU</a>
            </div>

            <div id="share">
                <a href="">
                    <i class="fas fa-search fa-lg"></i>
                </a>

                <a href="" class="ml-5">
                    <i class="fas fa-share-alt fa-lg"></i>
                </a>
            </div>
        </div>

        <nav id="navigation" style="margin-top: 60px; margin-bottom: 30px;">
            <ul class="flex">
                <li class="mr-10">
                    <!-- <a href="/index-sr" >POČETNA</a> -->
                    <a class="{{ $page->selected('index-sr') }}" href="{{ $page->baseUrl }}/index-sr">POČETNA</a>
                </li>
                <li class="mr-10">
                    <!-- <a href="/about-sr">O PROJEKTU</a> -->
                    <a class="{{ $page->selected('about-sr') }}" href="{{ $page->baseUrl }}/about-sr">O PROJEKTU</a>
                </li>
                <li class="mr-10">
                    <!-- <a href="/objectives-sr">CILJEVI</a> -->
                    <a class="{{ $page->selected('objectives-sr') }}" href="{{ $page->baseUrl }}/objectives-sr">CILJEVI</a>
                </li>
                <li class="mr-10">
                    <!-- <a href="/partners-sr">PARTNERI</a> -->
                    <a class="{{ $page->selected('partners-sr') }}" href="{{ $page->baseUrl }}/partners-sr">PARTNERI</a>
                </li>
                <li class="mr-10">
                    <!-- <a href="/activities-sr">AKTIVNOSTI</a> -->
                    <a class="{{ $page->selected('activities-sr') }}" href="{{ $page->baseUrl }}/activities-sr">AKTIVNOSTI</a>
                </li>
                <li class="mr-10">
                    <!-- <a href="/blog-sr">BLOG</a> -->
                    <a class="{{ $page->selected('blog-sr') }}" href="{{ $page->baseUrl }}/blog-sr">BLOG</a>
                </li>
                <li>
                    <!-- <a href="/gallery-sr">AKTUELNOSTI I GALERIJA</a> -->
                    <a class="{{ $page->selected('gallery-sr') }}" href="{{ $page->baseUrl }}/gallery-sr">AKTUELNOSTI I GALERIJA</a>
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
                Socijalno preduzetništvo<br> za žene iz ruralnih područja
                </h1>
                
            </div>

            <div class="py-1 pl-4 women" style="background-color: rgba(255,255,255, 0.6); clip-path: polygon(0 0, 93% 0, 100% 100%, 0% 100%);">
                <p class="font-secondary text-xs md:text-sm">WOMEN-TO-SAVE</p>
            </div>
            
        </div>
    </div>
</header>
