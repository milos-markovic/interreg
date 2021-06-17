---
extends: _layouts.main
section: body
page: Gallery
language: En
title_en: Lavender planting
title_sr: Sadnja lavande
title_hu: Levendulaültetés 
url: 'gallery2'
mob_img: https://www.womentosave.org/images/gallery.svg 
data: 'November, 2019' 
photo_img: https://www.womentosave.org/images/photo.svg
video_img: https://www.womentosave.org/images/video.svg
photo_number: 39
video_number: 6 
photos:
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2010.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2112.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2266.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2020.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2137.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2270.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2022.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2139.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2284.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2045.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2140.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2293.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2050.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2144.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2294.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2057.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2150.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2300.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2079.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2163.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2305.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2091.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2167.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2306.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2093.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2186.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2310.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2104.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2188.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2315.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2106.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2193.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2332.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2110.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2259.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2334.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2111.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2265.JPG
    - url: https://www.womentosave.org/images/galleries/2/images/DSCF2342.JPG
    
---

    <div>
        <header class="relative bottom-10">
            <div class="max-w-screen-desktop mx-auto px-5 xl:px-0">
                <div class="border-l-2 border-gray-200 p-3">
                    <div id="breadcrumb" class="mb-3 text-xs lg:text-base">
                        <ul class="flex" style="color: #555555;">
                            <li x-show="len === 'En'"><a href="/">Home</a></li>
                            <li x-show="len === 'Sr'"><a href="/">Početna</a></li>
                            <li x-show="len === 'Hu'"><a href="/">Főoldal</a></li>

                            <li class="mx-3">/</li>
                            <li x-show="len === 'En'"><a href="/gallery">News and gallery</a></li>
                            <li x-show="len === 'Sr'"><a href="/gallery">Aktuelnosti i galerija</a></li>
                            <li x-show="len === 'Hu'"><a href="/gallery">Aktualitások és galéria</a></li>
                            <li class="mx-3">/</li>

                            <li x-show="len === 'En'"><a href="" style="color: #b3b3b3;">{!! $page->title_en !!}</a></li>
                            <li x-show="len === 'Sr'"><a href="" style="color: #b3b3b3;">{!! $page->title_sr !!}</a></li>
                            <li x-show="len === 'Hu'"><a href="" style="color: #b3b3b3;">{!! $page->title_hu !!}</a></li>
                        </ul>
                    </div>
                        
                    <div class="leading-9">
                        <h2 x-show="len === 'En'" class="text-2xl lg:text-4xl">{{ $page->title_en }}</h2>
                        <h2 x-show="len === 'Sr'" class="text-2xl lg:text-4xl">{{ $page->title_sr }}</h2>
                        <h2 x-show="len === 'Hu'" class="text-2xl lg:text-4xl">{{ $page->title_hu }}</h2>

                        <div class="flex items-bottom">
                            <span>
                                <i class="far fa-calendar-alt"></i>
                            </span>
                            <p class="ml-2 text-sm mt-2" style="color: gray;">{{ $page->data }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="max-w-screen-desktop mx-auto px-5 xl:px-0 mt-10 mt-0">
            
            <div class="flex text-sm" style="color: gray;">
                <div class="flex items-center mr-5">
                    <img src="https://www.womentosave.org/images/photo.svg" alt="" style="width: 30px; height: 30px;" />
                    <p class="ml-3">{{ $page->photo_number }} 
                        <span x-show="len === 'En'">photos</span>
                        <span x-show="len === 'Sr'">fotografija</span>
                        <span x-show="len === 'Hu'">fénykép</span>
                    </p>
                </div>

                <div class="flex items-center">
                    <img src="https://www.womentosave.org/images/video.svg" alt="" style="width: 30px; height: 30px;" />
                    <p class="ml-3">{{ $page->video_number }} 
                        <span x-show="len === 'En'">videos</span>
                        <span x-show="len === 'Sr'">videa</span>
                        <span x-show="len === 'Hu'">videó</span>
                    </p>
                </div>
            </div>

            <section id="photo galery" class="mt-20">
                 <p class="yellow bg-yellow-300 p-1 pl-4 pr-20 mb-3 inline-flex" style="clip-path: polygon(0 0, 97% 0, 100% 100%, 0% 100%); background: #FFF2BF;">
                    <span x-show="len === 'En'" class="mr-2">Photos</span> 
                    <span x-show="len === 'Sr'" class="mr-2">Fotografije</span> 
                    <span x-show="len === 'Hu'" class="mr-2">fénykép</span> 
                 ({{ $page->photo_number }})</p>
            
                <div x-data="{ imgModal : false, imgModalSrc : '', imgModalDesc : '' }">
                    <template @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;" x-if="imgModal">
                    <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''" class="p-2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75">
                        <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full overflow-auto">
                        <div class="z-50">
                            <button @click="imgModal = ''" class="float-right pt-2 pr-2 outline-none focus:outline-none">
                            <svg class="fill-current text-white " xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                </path>
                            </svg>
                            </button>
                        </div>
                        <div class="p-2">
                            <img :alt="imgModalSrc" class="object-contain h-1/2-screen" :src="imgModalSrc">
                            <p x-text="imgModalDesc" class="text-center text-white"></p>
                        </div>
                        </div>
                    </div>
                    </template>
                </div>
                
                <div x-data="{}" >
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-2">
                            
                        @foreach($page->photos as $photo)
                            <div class="bg-gray-400">
                                <a @click="$dispatch('img-modal', {  imgModalSrc: '{{ $photo['url'] }}', imgModalDesc: 'Random Image One Description' })" class="cursor-pointer">
                                    <img alt="Placeholder" class="object-fit w-full" src="{{ $photo['url'] }}">
                                </a>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </section>
        
            <section id="video galery" class="mt-10 mb-12 lg:mb-0">
                <p class="yellow bg-yellow-300 p-1 pl-4 pr-20 mb-3 inline-flex" style="clip-path: polygon(0 0, 97% 0, 100% 100%, 0% 100%); background: #FFF2BF;">
                    <span x-show="len === 'En'" class="mr-1">Videos</span> 
                    <span x-show="len === 'Sr'" class="mr-1">Video</span> 
                    <span x-show="len === 'Hu'" class="mr-1">Video</span> 
                    ({{ $page->video_number }})
                </p>

                <div class="grid grid-cols-1 lg:grid-cols-2 justify-items-center mb-5">
                    
                    <iframe class="w-96 h-48 lg:h-80 mb-6 lg:mb-0" src="https://www.youtube.com/embed/y8hTJNREpcg" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
                    
                    <iframe class="w-96 h-48 lg:h-80 mb-6 lg:mb-0" src="https://www.youtube.com/embed/y8hTJNREpcg" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
                    
                    <iframe class="w-96 h-48 lg:h-80 mb-6 lg:mb-0" src="https://www.youtube.com/embed/y8hTJNREpcg" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
                    
                    <iframe class="w-96 h-48 lg:h-80 mb-6 lg:mb-0" src="https://www.youtube.com/embed/y8hTJNREpcg" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
                    
                    <iframe class="w-96 h-48 lg:h-80 mb-6 lg:mb-0" src="https://www.youtube.com/embed/y8hTJNREpcg" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
                    
                    <iframe class="w-96 h-48 lg:h-80" src="https://www.youtube.com/embed/y8hTJNREpcg" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
                </div>
            </section>
        </div>

    </div>





