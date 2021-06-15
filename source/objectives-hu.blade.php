@extends('_layouts.hungary')

@section('body')

    <header class="relative bottom-10">
        <div class="max-w-screen-desktop mx-auto px-5 xl:px-0">
            <div class="border-l-2 border-gray-200 p-3">
                <div id="breadcrumb" class="mb-2">
                    <ul class="flex">
                        <li><a href="/index-hu" class="text-xs lg:text-base">Főoldal</a></li>
                        <li class="mx-3">/</li>
                        <li><a href="" class="text-xs lg:text-base text-gray-400">Célok</a></li>
                    </ul>
                </div>
                    
                <h1 class="text-2xl lg:text-4xl font-secondary">Célkitűzések </h1>
            </div>
        </div>
    </header>

    <section>
        <div class="max-w-screen-desktop mx-auto px-5 xl:px-0">
            @foreach($objectives->where('language','Hu')->first()->posts as $post)

                <div style="margin-bottom: 3.125rem;">
                    <h2 class="lg:text-xl mb-5 p-1 pr-5 inline-flex" style="background: #FFF2BF; clip-path: polygon(0 0, 97% 0, 100% 100%, 0% 100%);">{{ $post['title'] }}</h2>

                    <p class="text-sm lg:text-base leading-loose lg:leading-loose">
                        {{ $post['paragraph'] }}
                    </p>
                </div>

            @endforeach
        </div>
    </section>

@endsection