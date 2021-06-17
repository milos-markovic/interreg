<header>
    
    <div id="mobile nav" >

        <div x-show="open" @click.away="open = false" class="fixed top-0 bg-white w-full z-10 ">
            <ul>
                <li class="flex items-center justify-between border-b-2 border-white py-4 px-5" style="background: #FFD629;">
                    <span class="text-xl text-white font-medium">MAIN MENU</span>
                    <a @click.prevent="blackBackground = false, open = false" href="" class="font-semibold text-xl mr-5">X</a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}/" >
                        <div class="flex items-center py-4 px-5">
                            <img src="{{ '/assets/img/mobile_nav/home.png' }}" alt="Home" class="w-9 h-9">
                            <span class="text-sm ml-5">
                                <span x-show="len === 'En'">HOME</span>
                                <span x-show="len === 'Sr'">POČETNA</span>
                                <span x-show="len === 'Hu'">KEZDŐLAP</span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}/about">
                        <div class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                            <img src="{{ '/assets/img/mobile_nav/about.png' }}" alt="Home" class="w-9 h-9">
                            <span class="text-sm ml-5">
                                <span x-show="len === 'En'">ABOUT THE PROJECT</span>
                                <span x-show="len === 'Sr'">O PROJEKTU</span>
                                <span x-show="len === 'Hu'">A PROJEKTRŐL</span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}/objectives" >
                        <div class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                            <img src="{{ '/assets/img/mobile_nav/objectives.png' }}" alt="Home" class="w-9 h-9">
                            <span class="text-sm ml-5">
                                <span x-show="len === 'En'">OBJECTIVES</span>
                                <span x-show="len === 'Sr'">CILJEVI</span>
                                <span x-show="len === 'Hu'">CÉLKITŰZÉSEK</span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}/partners">
                        <div class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                            <img src="{{ '/assets/img/mobile_nav/partners.png' }}" alt="Home" class="w-9 h-9">
                            <span class="text-sm ml-5">
                                <span x-show="len === 'En'">PARTNERS</span>
                                <span x-show="len === 'Sr'">PARTNERI</span>
                                <span x-show="len === 'Hu'">PARTNEREK</span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}/activities">
                        <div class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                            <img src="{{ '/assets/img/mobile_nav/activities.png' }}" alt="Home" class="w-9 h-9">
                            <span class="text-sm ml-5">
                                <span x-show="len === 'En'">ACTIVITIES</span>
                                <span x-show="len === 'Sr'">AKTIVNOSTI</span>
                                <span x-show="len === 'Hu'">AKTIVITÁSOK</span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}/blog">
                        <div class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                            <img src="{{ '/assets/img/mobile_nav/blog.png' }}" alt="Home" class="w-9 h-9">
                            <span class="text-sm ml-5">BLOG</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ $page->baseUrl }}/gallery">
                        <div class="flex items-center border-dashed border-t border-gray-400 py-4 px-5">
                            <img src="{{ '/assets/img/mobile_nav/gallery.png' }}" alt="Home" class="w-9 h-9">
                            <span class="text-sm ml-5">
                                <span x-show="len === 'En'">NEWS AND GALLERY</span>
                                <span x-show="len === 'Sr'">AKTUELNOSTI I GALERIJA</span>
                                <span x-show="len === 'Hu'">AKTUALITÁSOK ÉS GALÉRIA</span>
                            </span>
                        </div>
                    </a>
                </li>
                
            </ul>
        </div>

        <div class="max-w-screen-lg mx-auto p-5 block lg:hidden px-5 relative z-0">
            <div class="flex justify-between pb-2 border-b border-black mb-5">
                <div id="hamburger_icon">
                    <a @click.prevent ="blackBackground = true, open = true" href="">
                        <i class="fas fa-bars fa-lg"></i>
                    </a>
                </div>

                <div id="language" class="flex" style="color: #999;">
                    <a @click.prevent="len = 'En'"  href="" :class="len === 'En' ? 'font-semibold text-black' : ''">EN</a>
                    <a @click.prevent="len = 'Sr'"  href="" :class="len === 'Sr' ? 'font-semibold text-black' : ''" class="mx-5">SRB</a>
                    <a @click.prevent="len = 'Hu'"  href="" :class="len === 'Hu' ? 'font-semibold text-black' : ''" >HU</a>
                </div>

                <div id="share">
                    <a @click.prevent ="searchModal = true" href="">
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
                        <img src="/assets/img/programme-logo-en.png" alt="Logo" style="width: 240px; height: 40px;">
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
                <a x-show="len === 'En'" href="/">
                    <img src="/assets/img/programme-logo-en.png" alt="Logo" style="width: 300px;">
                </a>

                <a x-show="len === 'Sr'" href="/">
                    <img src="/assets/img/programme-logo-sr.png" alt="Logo" style="width: 300px;">
                </a>

                <a x-show="len === 'Hu'" href="/">
                    <img src="/assets/img/programme-logo-hu.png" alt="Logo" style="width: 300px;">
                </a>
            </div>

            <div id="social_icons" class="flex">
                <a href="https://www.youtube.com/channel/UC7DKHBFy7CTilQpsy9vCXKQ?view_as=subscriber" target="_blank" class="bg-gray-600 rounded-full flex justify-center items-center text-white" style="width: 35px; height: 35px;">
                    <i class="fab fa-youtube fa-lg" class=""></i>
                </a>
                <a href="https://www.linkedin.com/authwall?trk=ripf&trkInfo=AQG3e8tvy2qKawAAAXoZV7QAMR20hu-kvysUiARG1fD-BHN3VnjDObtfCjfSt37vc8NBhc5YzBm9gp3o59UkAep-g9qFjFjhXyBdUGn6sDIhKQBHO3F4IUzLc1Q1tZh9M4rjpqw=&originalReferer=https://www.womentosave.org/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fwomen-to-save-women-to-save-389b5819b%2F" target="_blank" class="bg-gray-600 rounded-full flex justify-center items-center text-white mx-5" style="width: 35px; height: 35px;">
                    <i class="fab fa-linkedin-in fa-lg"></i>
                </a>
                <a href="https://www.facebook.com/womentosave/" target="_blank" class="bg-gray-600 rounded-full flex justify-center items-center text-white" style="width: 35px; height: 35px;">
                    <i class="fab fa-facebook-f fa-lg"></i>
                </a>
            </div>

            <div id="language" class="flex" >   
                <a @click.prevent="len = 'En'" :class="len === 'En' ? 'font-semibold text-black' : 'text-gray-primary'"  href="" >EN</a>
                <a @click.prevent="len = 'Sr'" :class="len === 'Sr' ? 'font-semibold text-black' : 'text-gray-primary'"  href="" class="mx-5">SRB</a>
                <a @click.prevent="len = 'Hu'" :class="len === 'Hu' ? 'font-semibold text-black' : 'text-gray-primary'"  href="" >HU</a>
            </div>

            <div x-data="{searchModal: false, shareModal: false }" id="share">
                <a @click.prevent ="searchModal = true" href="">
                    <i class="fas fa-search fa-lg"></i>
                </a>

                <a @click.prevent ="shareModal = true" href="" class="ml-5">
                    <i class="fas fa-share-alt fa-lg"></i>
                </a>

                @include('_partials.searchModal')
                @include('_partials.shareModal')
            </div>

        </div>

        <nav id="navigation" style="margin-top: 60px; margin-bottom: 30px;">
            <ul id="en" class="flex">
                <li class="mr-10">
                    <a href="/" >
                        <span x-show="len === 'En'">HOME</span>
                        <span x-show="len === 'Sr'">POČETNA</span>
                        <span x-show="len === 'Hu'">KEZDŐLAP</span>
                    </a>
                    <!-- <a class="{{ $page->selected('/') }}" href="{{ $page->baseUrl }}">HOME</a> -->
                </li>
                <li class="mr-10">
                    <a class="{{ $page->selected('about') }}" href="{{ $page->baseUrl }}/about">
                        <span x-show="len === 'En'">ABOUT THE PROJECT</span>
                        <span x-show="len === 'Sr'">O PROJEKTU</span>
                        <span x-show="len === 'Hu'">A PROJEKTRŐL</span>
                    </a>
                </li>
                <li class="mr-10">
                    <a class="{{ $page->selected('objectives') }}" href="{{ $page->baseUrl }}/objectives">
                        <span x-show="len === 'En'">OBJECTIVES</span>
                        <span x-show="len === 'Sr'">CILJEVI</span>
                        <span x-show="len === 'Hu'">CÉLKITŰZÉSEK</span>
                    </a>
                </li>
                <li class="mr-10">
                    <a class="{{ $page->selected('partners') }}" href="{{ $page->baseUrl }}/partners">
                        <span x-show="len === 'En'">PARTNERS</span>
                        <span x-show="len === 'Sr'">PARTNERI</span>
                        <span x-show="len === 'Hu'">PARTNEREK</span>
                    </a>
                </li>
                <li class="mr-10">
                    <a class="{{ $page->selected('activities') }}" href="{{ $page->baseUrl }}/activities">
                        <span x-show="len === 'En'">ACTIVITIES</span>
                        <span x-show="len === 'Sr'">AKTIVNOSTI</span>
                        <span x-show="len === 'Hu'">AKTIVITÁSOK</span>
                    </a>
                </li>
                <li class="mr-10">
                    <a class="{{ $page->selected('blog') }}" href="{{ $page->baseUrl }}/blog">BLOG</a>
                </li>
                <li>
                    <a class="{{ $page->selected('gallery') }}" href="{{ $page->baseUrl }}/gallery">
                        <span x-show="len === 'En'">NEWS AND GALLERY</span>
                        <span x-show="len === 'Sr'">AKTUELNOSTI I GALERIJA</span>
                        <span x-show="len === 'Hu'">AKTUALITÁSOK ÉS GALÉRIA</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    
    <div id="topImage" class="relative">
        <img src="/assets/img/lavander-1.jpg" alt="" class="h-96 md:h-full object-cover">

        <div class="max-w-screen-desktop mx-auto left-4 xl:inset-x-0 top-3  absolute">
            
            <p class="py-1 pl-4 text-xs lg:text-sm regNumber" style="clip-path: polygon(0 0, 93% 0, 100% 100%, 0% 100%); background: #FFD629;">HUSRB/1602/42/0073</p>
        
            <div class="pl-4 py-2  header" style="background-color: rgba(255,255,255, 0.3); clip-path: polygon(0 0, 93% 0, 100% 100%, 0% 100%);">
                    
                <h1 x-show="len === 'En'" class="text-3xl md:text-4xl lg:text-5xl  font-secondary text-white">
                Social entrepreneurship<br> for women in rural areas
                </h1>

                <h1 x-show="len === 'Sr'" class="text-3xl md:text-4xl lg:text-5xl  font-secondary text-white">
                Socijalno preduzetništvo<br> za žene iz ruralnih područja
                </h1>

                <h1 x-show="len === 'Hu'" class="text-3xl md:text-4xl lg:text-5xl  font-secondary text-white">
                Női társadalmi vállalkozások<br> a vidéki térségekben
                </h1>
                
            </div>

            <div class="py-1 pl-4 women" style="background-color: rgba(255,255,255, 0.6); clip-path: polygon(0 0, 93% 0, 100% 100%, 0% 100%);">
                <p class="font-secondary text-xs md:text-sm">WOMEN-TO-SAVE</p>
            </div>
            
        </div>
    </div>
    
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
