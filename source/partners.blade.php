@extends('_layouts.main')

@section('body')

    <header class="relative bottom-10">
        <div class="max-w-screen-desktop mx-auto px-5 xl:px-0">
            <div class="border-l-2 border-gray-200 p-3">
                <div id="breadcrumb" class="mb-2">
                    <ul class="flex">
                        <li x-show="len === 'En'"><a href="/" class="text-sm lg:text-base">Home</a></li>
                        <li x-show="len === 'Sr'"><a href="/index-sr" class="lg:text-base">Početna</a></li>
                        <li x-show="len === 'Hu'"><a href="/index-hu" class="text-xs lg:text-base">Főoldal</a></li>

                        <li class="mx-3">/</li>

                        <li x-show="len === 'En'"><a href="" class="lg:text-base text-gray-400">Partners</a></li>
                        <li x-show="len === 'Sr'"><a href="" class="lg:text-base text-gray-400">Partneri</a></li>
                        <li x-show="len === 'Hu'"><a href="" class="text-xs lg:text-base text-gray-400">Partnerek</a></li>                        
                    </ul>
                </div>
                    
                <h1 x-show="len === 'En'" class="text-2xl lg:text-4xl font-secondary">Partners</h1>
                <h1 x-show="len === 'Sr'" class="text-2xl lg:text-4xl font-secondary">Partneri</h1>
                <h1 x-show="len === 'Hu'" class="text-2xl lg:text-4xl font-secondary">Partnerek</h1>
            </div>
        </div>
    </header>

    <section id="partners" class="mt-10">
        <div class="max-w-screen-desktop mx-auto text-sm lg:text-base px-5 xl:px-0">

            <div x-show="len === 'En'">
                @foreach($partners->where('language','En')->first()->posts as $post)
                    
                    <div class="flex flex-col lg:flex-row mb-16">
                        <div>
                            <img src="{{ $post['logo'] }}" alt="" class="w-36 h-36 lg:w-44 lg:h-44">
                        </div>

                        <div class="lg:ml-16">
                            <header>
                                <h2 class="text-xl lg:text-2xl">{{ $post['title'] }}</h2>
                                <p style="color: gray;">{{ $post['title-sr'] }}</p>
                            </header>

                            <div class="space-y-6 lg:space-y-8 mt-8 lg:mt-10 leading-loose">
                                <div class="flex">
                                    <img src="{{ $post['institution-img'] }}" alt="" class="w-6 h-6 lg:w-9 lg:h-9" >

                                    <div class="ml-5 flex flex-col lg:flex-row lg:space-x-10">
                                        <div class="mb-3 lg:mb-0">
                                            <p class="text-xs lg:text-sm" style="color: gray;">{{ $post['institution-title'] }}</p>
                                            <p>{{ $post['institution-type'] }}</p>
                                        </div>
                                        <div class="mb-3 lg:mb-0">
                                            <p class="text-xs lg:text-sm" style="color: gray;">{{ $post['tax-title'] }}</p>
                                            <p>{{ $post['tax-number'] }}</p>
                                        </div>
                                        <div class="mb-3 lg:mb-0">
                                            <p class="text-xs lg:text-sm" style="color: gray;">{{ $post['register-title'] }}</p>
                                            <p>{{ $post['register-number'] }}</p>
                                        </div>

                                        @if($post['eu-tax-title'])
                                        <div class="mb-5 lg:mb-0">
                                            <p class="text-xs lg:text-sm" style="color: gray;">{{ $post['eu-tax-title'] }}</p>
                                            <p>{{ $post['eu-tax-number'] }}</p>
                                        </div>
                                        @endif

                                        @if($post['tax-identification-title'])
                                        <div>
                                            <p class="text-xs lg:text-sm" style="color: gray;">{{ $post['tax-identification-title'] }}</p>
                                            <p>{{ $post['tax-identification-number'] }}</p>
                                        </div>
                                        @endif

                                    </div>
                                </div>

                                <div class="flex">
                                    <img src="{{ $post['location-img'] }}" alt="" class="w-6 h-6 lg:w-9 lg:h-9">

                                    <div class="ml-5">
                                        <p>
                                            {!! $post['address'] !!}
                                        </p>
                                        <span>
                                            <a href="{{ $post['location-address'] }}" target="_blank" class="text-gray-400 text-sm location_link">
                                                Show on Google maps
                                            </a>
                                            <a href="{{ $post['location-address'] }}" target="_blank" class="ml-1 relative bottom-1">
                                                <i class="fas fa-external-link-alt fa-xs"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>

                                <div class="flex items-center">
                                    <img src="{{ $post['site-img'] }}" alt="" class="w-6 h-6 lg:w-9 lg:h-9" >

                                    <div class="ml-5">
                                        <span>
                                            <a href="{{ $post['site-address'] }}" target="_blank" class="site_link">{{ $post['site-name'] }}</a>
                                            <a href="{{ $post['site-address'] }}" target="_blank" class="relative bottom-1 ml-1">
                                                <i class="fas fa-external-link-alt fa-xs"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>

                                <div class="flex">
                                    <img src="{{ $post['cloud-img'] }}" alt="" class="w-6 h-6 lg:w-9 lg:h-9" >

                                    <div class="ml-5" style="width: 905px;">
                                        {!! $post['description'] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>

            <div x-show="len === 'Sr'">
                @foreach($partners->where('language','Sr')->first()->posts as $post)
                    
                    <div class="flex flex-col lg:flex-row mb-16">
                        <div>
                            <img src="{{ $post['logo'] }}" alt="" class="w-36 h-36 lg:w-44 lg:h-44">
                        </div>

                        <div class="lg:ml-16">
                            <header>
                                <h2 class="text-xl lg:text-2xl">{{ $post['title'] }}</h2>
                                <p style="color: gray;">{{ $post['title-sr'] }}</p>
                            </header>

                            <div class="space-y-6 lg:space-y-8 mt-8 lg:mt-10 leading-loose">
                                <div class="flex">
                                    <img src="{{ $post['institution-img'] }}" alt="" class="w-6 h-6 lg:w-9 lg:h-9" >

                                    <div class="ml-5 flex flex-col lg:flex-row lg:space-x-10">
                                        <div class="mb-3 lg:mb-0">
                                            <p class="text-xs lg:text-sm" style="color: gray;">{{ $post['institution-title'] }}</p>
                                            <p>{{ $post['institution-type'] }}</p>
                                        </div>
                                        <div class="mb-3 lg:mb-0">
                                            <p class="text-xs lg:text-sm" style="color: gray;">{{ $post['tax-title'] }}</p>
                                            <p>{{ $post['tax-number'] }}</p>
                                        </div>
                                        <div class="mb-3 lg:mb-0">
                                            <p class="text-xs lg:text-sm" style="color: gray;">{{ $post['register-title'] }}</p>
                                            <p>{{ $post['register-number'] }}</p>
                                        </div>

                                        @if($post['eu-tax-title'])
                                        <div class="mb-5 lg:mb-0">
                                            <p class="text-xs lg:text-sm" style="color: gray;">{{ $post['eu-tax-title'] }}</p>
                                            <p>{{ $post['eu-tax-number'] }}</p>
                                        </div>
                                        @endif

                                        @if($post['tax-identification-title'])
                                        <div>
                                            <p class="text-xs lg:text-sm" style="color: gray;">{{ $post['tax-identification-title'] }}</p>
                                            <p>{{ $post['tax-identification-number'] }}</p>
                                        </div>
                                        @endif

                                    </div>
                                </div>

                                <div class="flex">
                                    <img src="{{ $post['location-img'] }}" alt="" class="w-6 h-6 lg:w-9 lg:h-9">

                                    <div class="ml-5">
                                        <p>
                                            {!! $post['address'] !!}
                                        </p>
                                        <span>
                                            <a href="{{ $post['location-address'] }}" target="_blank" class="text-gray-400 text-sm location_link">
                                                Show on Google maps
                                            </a>
                                            <a href="{{ $post['location-address'] }}" target="_blank" class="ml-1 relative bottom-1">
                                                <i class="fas fa-external-link-alt fa-xs"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>

                                <div class="flex items-center">
                                    <img src="{{ $post['site-img'] }}" alt="" class="w-6 h-6 lg:w-9 lg:h-9" >

                                    <div class="ml-5">
                                        <span>
                                            <a href="{{ $post['site-address'] }}" target="_blank" class="site_link">{{ $post['site-name'] }}</a>
                                            <a href="{{ $post['site-address'] }}" target="_blank" class="relative bottom-1 ml-1">
                                                <i class="fas fa-external-link-alt fa-xs"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>

                                <div class="flex">
                                    <img src="{{ $post['cloud-img'] }}" alt="" class="w-6 h-6 lg:w-9 lg:h-9" >

                                    <div class="ml-5" style="width: 905px;">
                                        {!! $post['description'] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>

            <div x-show="len === 'Hu'">
                @foreach($partners->where('language','Hu')->first()->posts as $post)
                    
                    <div class="flex flex-col lg:flex-row mb-16">
                        <div>
                            <img src="{{ $post['logo'] }}" alt="" class="w-36 h-36 lg:w-44 lg:h-44">
                        </div>

                        <div class="lg:ml-16">
                            <header>
                                <h2 class="text-xl lg:text-2xl">{{ $post['title'] }}</h2>
                                <p style="color: gray;">{{ $post['title-sr'] }}</p>
                            </header>

                            <div class="space-y-6 lg:space-y-8 mt-8 lg:mt-10 leading-loose">
                                <div class="flex">
                                    <img src="{{ $post['institution-img'] }}" alt="" class="w-6 h-6 lg:w-9 lg:h-9" >

                                    <div class="ml-5 flex flex-col lg:flex-row lg:space-x-10">
                                        <div class="mb-3 lg:mb-0">
                                            <p class="text-xs lg:text-sm" style="color: gray;">{{ $post['institution-title'] }}</p>
                                            <p>{{ $post['institution-type'] }}</p>
                                        </div>
                                        <div class="mb-3 lg:mb-0">
                                            <p class="text-xs lg:text-sm" style="color: gray;">{{ $post['tax-title'] }}</p>
                                            <p>{{ $post['tax-number'] }}</p>
                                        </div>
                                        <div class="mb-3 lg:mb-0">
                                            <p class="text-xs lg:text-sm" style="color: gray;">{{ $post['register-title'] }}</p>
                                            <p>{{ $post['register-number'] }}</p>
                                        </div>

                                        @if($post['eu-tax-title'])
                                        <div class="mb-5 lg:mb-0">
                                            <p class="text-xs lg:text-sm" style="color: gray;">{{ $post['eu-tax-title'] }}</p>
                                            <p>{{ $post['eu-tax-number'] }}</p>
                                        </div>
                                        @endif

                                        @if($post['tax-identification-title'])
                                        <div>
                                            <p class="text-xs lg:text-sm" style="color: gray;">{{ $post['tax-identification-title'] }}</p>
                                            <p>{{ $post['tax-identification-number'] }}</p>
                                        </div>
                                        @endif

                                    </div>
                                </div>

                                <div class="flex">
                                    <img src="{{ $post['location-img'] }}" alt="" class="w-6 h-6 lg:w-9 lg:h-9">

                                    <div class="ml-5">
                                        <p>
                                            {!! $post['address'] !!}
                                        </p>
                                        <span>
                                            <a href="{{ $post['location-address'] }}" target="_blank" class="text-gray-400 text-sm location_link">
                                                Show on Google maps
                                            </a>
                                            <a href="{{ $post['location-address'] }}" target="_blank" class="ml-1 relative bottom-1">
                                                <i class="fas fa-external-link-alt fa-xs"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>

                                <div class="flex items-center">
                                    <img src="{{ $post['site-img'] }}" alt="" class="w-6 h-6 lg:w-9 lg:h-9" >

                                    <div class="ml-5">
                                        <span>
                                            <a href="{{ $post['site-address'] }}" target="_blank" class="site_link">{{ $post['site-name'] }}</a>
                                            <a href="{{ $post['site-address'] }}" target="_blank" class="relative bottom-1 ml-1">
                                                <i class="fas fa-external-link-alt fa-xs"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>

                                <div class="flex">
                                    <img src="{{ $post['cloud-img'] }}" alt="" class="w-6 h-6 lg:w-9 lg:h-9" >

                                    <div class="ml-5" style="width: 905px;">
                                        {!! $post['description'] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        
        </div>
    </section>

@endsection