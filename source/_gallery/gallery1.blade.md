---
extends: _layouts.main
section: body
page: Gallery
language: En
title: Opening conference
url: 'gallery1'
mob_img: https://www.womentosave.org/images/gallery.svg 
data: '25.10.2019' 
photo_img: https://www.womentosave.org/images/photo.svg
video_img: https://www.womentosave.org/images/video.svg
photo_number: 19
video_number: 1 
photos:
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_3940.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_3968.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_3999.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_3941.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_3971.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_4002.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_3946.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_3975.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_4010.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_3947.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_3982.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_4012.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_3959.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_3989.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_4017.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_3961.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_3992.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_3963.JPG
    - url: https://www.womentosave.org/images/galleries/1/images/DSC_3994.JPG
---

    <div>
        <header class="relative bottom-10">
            <div class="max-w-screen-desktop mx-auto px-5 xl:px-0">
                <div class="border-l-2 border-gray-200 p-3">
                    <div id="breadcrumb" class="mb-3 text-xs lg:text-base">
                        <ul class="flex" style="color: #555555;">
                            <li><a href="/">Home</a></li>
                            <li class="mx-3">/</li>
                            <li><a href="/gallery">News and gallery</a></li>
                            <li class="mx-3">/</li>
                            <li><a href="" style="color: #b3b3b3;">{!! $page->title !!}</a></li>
                        </ul>
                    </div>
                        
                    <div class="leading-9">
                        <h2 class="text-2xl lg:text-4xl">{{ $page->title }}</h2>
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

        <div class="max-w-screen-desktop mx-auto px-5 xl:px-0 mt-10 lg:mt-0">
        
            <div class="flex text-sm" style="color: gray;">
                <div class="flex items-center mr-5">
                    <img src="https://www.womentosave.org/images/photo.svg" alt="" style="width: 30px; height: 30px;" />
                    <p class="ml-3">{{ $page->photo_number }} photos</p>
                </div>

                <div class="flex items-center">
                    <img src="https://www.womentosave.org/images/video.svg" alt="" style="width: 30px; height: 30px;" />
                    <p class="ml-3">{{ $page->video_number }} video</p>
                </div>
            </div>

            <section id="photo galery" class="mt-20">
                <p class="yellow bg-yellow-300 p-1 pl-4 pr-20 mb-3 inline-flex" style="clip-path: polygon(0 0, 97% 0, 100% 100%, 0% 100%); background: #FFF2BF;">Photos ({{ $page->photo_number }})</p>
            
                <div x-data="{ imgModal : false, imgModalSrc : '', imgModalDesc : '' }">
                    <template @img-modal.window="imgModal = true; imgModalSrc = $event.detail.      imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;" x-if="imgModal">
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

            <section id="video galery" class="mt-10 mb-16 xl:mb-0">
                <p class="yellow bg-yellow-300 p-1 pl-4 pr-20 mb-3 inline-flex" style="clip-path: polygon(0 0, 97% 0, 100% 100%, 0% 100%); background: #FFF2BF;">Videos</p>

                <div class="flex justify-center">
                    <iframe style="width: 480px; height: 360px;" src="https://www.youtube.com/embed/y8hTJNREpcg" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
                </div>
            </section>
        </div>

    </div>


    






