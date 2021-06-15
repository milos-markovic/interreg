@extends('_layouts.main')

@section('body')

    <header class="relative bottom-10">
        <div class="max-w-screen-desktop mx-auto px-5 xl:px-0">
            <div class="border-l-2 border-gray-200 p-3">
                <div id="breadcrumb" class="mb-2">
                    <ul class="flex">
                        <li><a href="/" class="text-sm lg:text-base">Home</a></li>
                        <li class="mx-3">/</li>
                        <li><a href="" class="text-sm lg:text-base text-gray-400">News and gallery</a></li>
                    </ul>
                </div>
                    
                <h1 class="text-2xl lg:text-4xl font-secondary">News and gallery</h1>
            </div>
        </div>
    </header>

    <section>
        <div class="max-w-screen-desktop mx-auto px-5 xl:px-0">
            
            <video width="450" height="256" controls>
                <source src="/assets/video/Sombor Lavanda eng.mp4" type="video/mp4">
                <source src="/assets/video/Sombor Lavanda eng.mp4" type="video/ogg">
                Your browser does not support the video tag.
            </video> 
            
        </div>

        <div class="max-w-screen-desktop mx-auto mt-16 lg:mt-32 px-5 xl:px-0 ">
            
             @foreach($gallery->where('language','En') as $post)

                <div class="flex mb-20">
                    <img src="{{ $post->mob_img }}" alt="" class="w-16 h-16 lg:w-32 lg:h-32" />

                    <div class="ml-2 lg:ml-10">
                        <div>
                            <a href="{{ $post->getUrl() }}" class="text-xl lg:text-2xl border-dashed border-b border-black mb-3">{{ $post->title }}</a>
                            <p class="mt-1 lg:mt-3 text-sm lg:text-base" style="color: gray;">{{ $post->data }}</p>
                        </div>
                        <div class="flex flex-col lg:flex-row mt-2 lg:mt-8">
                            <div class="flex items-center mr-5 mb-3 lg:mb-0">
                                <img src="https://www.womentosave.org/images/photo.svg" alt="" class="w-5 h-5 lg:w-8 lg:h-8" />
                                <p class="ml-3 text-sm lg:text-base" style="color: gray;">{{ $post->photo_number }} photos</p>
                            </div>
                            <div class="flex items-center">
                                <img src="https://www.womentosave.org/images/video.svg" alt="" class="w-5 h-5 lg:w-8 lg:h-8" />
                                <p class="ml-3 text-sm lg:text-base" style="color: gray;">{{ $post->video_number }} videos</p>
                            </div>
                        </div>
                    </div>
                
                </div>


             @endforeach
            
        </div>
    </section>

@stop