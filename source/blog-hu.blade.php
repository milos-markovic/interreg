@extends('_layouts.hungary')

@section('body')

    <header class="relative bottom-10">
        <div class="max-w-screen-desktop mx-auto px-5 xl:px-0">
            <div class="border-l-2 border-gray-200 p-3">
                <div id="breadcrumb" class="mb-2">
                    <ul class="flex">
                        <li><a href="/" class="text-xs lg:text-base">Főoldal</a></li>
                        <li class="mx-3">/</li>
                        <li><a href="" class="text-xs lg:text-base text-gray-400">Aktualitások és galéria</a></li>
                    </ul>
                </div>
                    
                <h1 class="text-2xl lg:text-4xl font-secondary">Blog</h1>
            </div>
        </div>
    </header>

    <section class="mt-5">
        <div class="max-w-screen-desktop mx-auto px-5 lg:px-0">
        
            @foreach($blog_items->where('language','Hu') as $post)

                <div class="flex mb-12 lg:mb-20">
                    <img src="{{ $post->img }}" alt="{{ $post->title }}" class="w-16 h-16 lg:w-32 lg:h-32" >
                    
                    <div class="ml-3 lg:ml-10">
                        <div class="border-dashed border-b border-black mb-1 lg:mb-3">
                            <a href="{{ $post->getUrl() }}" class="text-lg lg:text-2xl">{!! $post->title !!}</a>
                        </div>
                        <p style="color: gray;">{{ $post->data }}</p>
                    </div>
                </div>

            @endforeach
        </div>
    </section>

@endsection