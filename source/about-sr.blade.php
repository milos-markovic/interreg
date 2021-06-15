@extends('_layouts.serbian')

@section('body')
    
    <header class="relative bottom-10">
        <div class="max-w-screen-desktop mx-auto px-5">
            <div class="border-l-2 border-gray-200 p-3">
                <div id="breadcrumb" class="mb-2">
                    <ul class="flex">
                        <li><a href="/index-sr" class="text-sm lg:text-base">Početna</a></li>
                        <li class="mx-3">/</li>
                        <li><a href="/" class="text-sm lg:text-base text-gray-400">O projektu</a></li>
                    </ul>
                </div>
                    
                <h1 class="text-2xl lg:text-4xl font-secondary">O projektu</h1>
            </div>
        </div>
    </header>

    <section class="lg:mt-10">
        <div class="max-w-screen-desktop mx-auto px-5">
 
            @foreach($about_project->where('language','Sr')->first()->posts as $post)
                <div style="margin-bottom: 3.125rem;">
                    <h2 class="lg:text-xl mb-5 p-1 pr-5 inline-flex" style="background: #FFF2BF; clip-path: polygon(0 0, 97% 0, 100% 100%, 0% 100%);">{{ $post['title'] }}</h2>

                    <p class="text-sm lg:text-base leading-loose lg:leading-loose">
                        {{ $post['content'] }}
                    </p>
                </div>
            @endforeach 

        </div>
    </section>

@endsection