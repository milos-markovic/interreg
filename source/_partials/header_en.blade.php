<header x-data="{ searchModal: false, shareModal: false }">
    <div id="mobile nav" x-data="{ open: false }">

        <div x-show="open" @click.away="open = false" class="absolute top-0 bg-white w-full z-10">
            <ul>
                <li class="flex items-center justify-between border-b-2 border-white py-4 px-5" style="background: #FFD629;">
                    <span class="text-xl text-white font-medium">MAIN MENU</span>
                    <a @click.prevent="open = false" href="" class="font-semibold text-xl mr-5">X</a>
                </li>
                <li>
                    <a href="/" class="flex items-center py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/home.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">HOME</span>
                    </a>
                </li>
                <li>
                    <a href="/about" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/about.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">ABOUT THE PROJECT</span>
                    </a>
                </li>
                <li>
                    <a href="/objectives" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/objectives.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">OBJECTIVES</span>
                    </a>
                </li>
                <li>
                    <a href="/partners" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/partners.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">PARTNERS</span>
                    </a>
                </li>
                <li>
                    <a href="/activities" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/activities.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">ACTIVITIES</span>
                    </a>
                </li>
                <li>
                    <a href="/blog" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/blog.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">BLOG</span>
                    </a>
                </li>
                <li>
                    <a href="/gallery" class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                        <img src="{{ '/assets/img/mobile_nav/gallery.png' }}" alt="Home" class="w-9 h-9">
                        <span class="text-sm ml-5">GALLERY</span>
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
                        <img src="/assets/img/programme-logo-en.png" alt="Logo" style="width: 240px; height: 40px;">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="desktop nav" class="max-w-screen-desktop mx-auto hidden lg:block px-5 xl:px-0">
        <div id="topHeader" class="flex justify-between items-center" style="padding-top: 30px;">

            <div id="logo">
                <a href="/">
                    <img src="/assets/img/programme-logo-en.png" alt="Logo" style="width: 300px;">
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
                <a @click.prevent ="searchModal = true" href="">
                    <i class="fas fa-search fa-lg"></i>
                </a>

                <a @click.prevent ="shareModal = true" href="" class="ml-5">
                    <i class="fas fa-share-alt fa-lg"></i>
                </a>
            </div>
        </div>

        <nav id="navigation" style="margin-top: 60px; margin-bottom: 30px;">
            <ul class="flex">
                <li class="mr-10">
                    <a href="/" >HOME</a>
                    <!-- <a class="{{ $page->selected('/') }}" href="{{ $page->baseUrl }}">HOME</a> -->
                </li>
                <li class="mr-10">
                    <a class="{{ $page->selected('about') }}" href="{{ $page->baseUrl }}/about">ABOUT</a>
                    <!-- <a href="/about">ABOUT THE PROJECT</a> -->
                </li>
                <li class="mr-10">
                    <a class="{{ $page->selected('objectives') }}" href="{{ $page->baseUrl }}/objectives">OBJECTIVES</a>
                    <!-- <a href="/objectives">OBJECTIVES</a> -->
                </li>
                <li class="mr-10">
                    <a class="{{ $page->selected('partners') }}" href="{{ $page->baseUrl }}/partners">PARTNERS</a>
                    <!-- <a href="/partners">PARTNERS</a> -->
                </li>
                <li class="mr-10">
                    <a class="{{ $page->selected('activities') }}" href="{{ $page->baseUrl }}/activities">ACTIVITIES</a>
                    <!-- <a href="/activities">ACTIVITIES</a> -->
                </li>
                <li class="mr-10">
                    <a class="{{ $page->selected('blog') }}" href="{{ $page->baseUrl }}/blog">BLOG</a>
                    <!-- <a href="/blog">BLOG</a> -->
                </li>
                <li>
                    <a class="{{ $page->selected('gallery') }}" href="{{ $page->baseUrl }}/gallery">NEWS AND GALLERY</a>
                    <!-- <a href="/gallery">NEWS AND GALLERY</a> -->
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
                Social entrepreneurship<br> for women in rural areas
                </h1>
                
            </div>

            <div class="py-1 pl-4 women" style="background-color: rgba(255,255,255, 0.6); clip-path: polygon(0 0, 93% 0, 100% 100%, 0% 100%);">
                <p class="font-secondary text-xs md:text-sm">WOMEN-TO-SAVE</p>
            </div>
            
        </div>
    </div>

    <!-- search modal -->
    @include('_partials.searchModal')

    <!-- share modal -->
    @include('_partials.shareModal')

</header>

<!-- <script>
    let navLinks = document.querySelectorAll("nav a");

    navLinks.forEach(function(el){
        el.addEventListener('click',function(e){

            e.preventDefault();

            this.style.border = "1px solid blue";

            let url = this.href;

            window.location.href = url;
        });
    });
</script> -->
