@extends('_layouts.serbian')

@section('body')

    <header class="relative bottom-10">
        <div class="max-w-screen-desktop mx-auto px-5 xl:px-0">
            <div class="border-l-2 border-gray-200 p-3">
                <div id="breadcrumb" class="mb-2">
                    <ul class="flex">
                        <li><a href="/index-sr" class="text-xs lg:text-base">Početna</a></li>
                        <li class="mx-3">/</li>
                        <li><a href="" class="text-xs lg:text-base text-gray-400">Aktivnosti</a></li>
                    </ul>
                </div>
                    
                <h1 class="text-2xl lg:text-4xl font-secondary">Aktivnosti</h1>
            </div>
        </div>
    </header>

    <section>
        <div class="max-w-screen-desktop mx-auto mb-20">
        
           @foreach($activities->where('language','Sr')->first()->posts as $post)
                
                <div class="flex flex-col lg:flex-row mb-16 lg:mb-24">

                    <div class="flex items-center lg:w-1/2 relative bottom-6 lg:bottom-12 px-5 lg:px-0">
                        <img src="{{ $post['img'] }}" alt="" class="mt-10 w-24 h-24 lg:w-36 lg:h-36" >

                        <p class="text-gray-500 text-sm lg:text-base mt-10 ml-5">
                            {!! $post['text'] !!}
                        </p>
                    </div>

                    <div class="px-5 lg:px-8 py-6 lg:py-12 w-full transform skew-y-3" style="background: #fff2bf;">
                        <div class="transform -skew-y-3">
                            <ul>
                                @foreach($post['list'] as $item)
                                <li class="flex items-center mb-2">
                                    <span class="flex-none w-8 h-8 bg-yellow-300 flex items-center justify-center text-lg lg:text-xl text-white font-semibold" style="background: #FFD629;">{{ $item['number'] }}</span>
                                    <span class="ml-5 text-sm lg:text-base">{{ $item['text'] }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                
           @endforeach

        </div>
    </section>

@endsection