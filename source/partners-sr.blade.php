@extends('_layouts.serbian')

@section('body')

    <header class="relative bottom-10">
        <div class="max-w-screen-desktop mx-auto px-5 xl:px-0">
            <div class="border-l-2 border-gray-200 p-3">
                <div id="breadcrumb" class="mb-2 text-xs">
                    <ul class="flex">
                        <li><a href="/index-sr" class="lg:text-base">Početna</a></li>
                        <li class="mx-3">/</li>
                        <li><a href="" class="lg:text-base text-gray-400">Partneri</a></li>
                    </ul>
                </div>
                    
                <h1 class="text-2xl lg:text-4xl font-secondary">Partneri</h1>
            </div>
        </div>
    </header>

    <section id="partners" class="xl:mt-10">
        <div class="max-w-screen-desktop mx-auto text-sm lg:text-base px-5 xl:px-0">

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

            <!-- <div class="flex mb-20">
                <div>
                    <img src="https://www.womentosave.org/images/halas-media.png" alt="" style="width: 180px; height: 180px;">
                </div>

                <div class="ml-20">
                    <header>
                        <h2 class="text-2xl">Halasi Média és Kultúra Nonprofit Kft.</h2>
                        <p>(Halasi Média és Kultúra Nonprofit Kft.)</p>
                    </header>

                    <div class="mt-10 space-y-5">
                        <div class="flex">
                            <img src="https://www.womentosave.org/images/company-profile.svg" alt="" style="width: 35px; height: 35px;">

                            <div class="ml-5 flex space-x-10">
                                <div>
                                    <p>Type of institution</p>
                                    <p>Public non-profit company</p>
                                </div>
                                <div>
                                    <p>National tax number</p>
                                    <p>18350692-2-03</p>
                                </div>
                                <div>
                                    <p>EU tax number</p>
                                    <p>HU18350692</p>
                                </div>
                                <div>
                                    <p>Tax identification number</p>
                                    <p>03-09-115853</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex">
                            <img src="https://www.womentosave.org/images/location.svg" alt="" style="width: 35px; height: 35px;">

                            <div class="ml-5">
                                <p>
                                    Bethlen G. square 7.D<br> 6400 Kiskunhalas, Hungary
                                </p>
                                <a href="" class="text-gray-400">
                                    Show on Google maps
                                </a>
                            </div>
                        </div>

                        <div class="flex">
                            <img src="https://www.womentosave.org/images/website.svg" alt="" style="width: 35px; height: 35px;">

                            <div class="ml-5">
                                <a href="">www.halasmedia.hu</a>
                            </div>
                        </div>

                        <div class="flex">
                            <img src="https://www.womentosave.org/images/company-description.svg" alt="" style="width: 35px; height: 35px;">

                            <div class="ml-5" style="width: 905px">
                                <p>
                                Halasi Media takes part in this project as Beneficiary 3. Using in-house staff and external experts will provide project participants with the necessary practical trainings on the process of farming lavender, from planting to processing into essential oil. They will also use their experience in creating media content to take part in communications, PR, and media activities on the project.
                                </p>

                                <p>
                                Halasi Media has 24 employees. Halasi Media has in-house staff whose experience in providing trainings spans years. With reference to this project, Halasi Media has engaged an outside expert consultant aiming to provide the necessary knowledge on lavender farming and processing, on top of their in-house agricultural engineer. Given the rich experience and specialized knowledge referring procedures of lavender sowing and processing, Halasi media’s team has sufficient operational capacities for Project realization. The other major component of their work is creating media contents: newspapers, TV, radio, online. They run the city information website covering primarily social and cultural issues, with developed promotional portfolio, particularly important for project activities implementation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        
        </div>
    </section>

@endsection