---
extends: _layouts.main
section: body
page: Blog
language: En
url: 'blog3'
img: https://www.womentosave.org/images/blog.svg
title: Final Activities of the Project
data: '19.02.2020.'            
---

    <div>
        <header class="relative bottom-10">
            <div class="max-w-screen-desktop mx-auto px-5 xl:px-0">
                <div class="border-l-2 border-gray-200 p-3">
                    <div id="breadcrumb" class="mb-3 text-xs lg:text-base">
                        <ul class="flex" style="color: #555555;">
                            <li><a href="/">Home</a></li>
                            <li class="mx-3">/</li>
                            <li><a href="/blog">Blog</a></li>
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

        <div class="max-w-screen-desktop mx-auto px-5 xl:px-0">
        
            <img src="https://www.womentosave.org/images/blog/blog03.jpg" alt="" />

            <div class="mt-16 lg:mt-20 text-sm lg:text-base">
                <p class="mb-6 leading-loose">
                    One important project activity is scheduled to take place at the end of this month or The study trip of the cluster members to southern Hungary is an important step in strengthening the cluster as a non-profit institution that unites women in the rural areas of the city of Sombor around the cultivation and processing of lavender. 
                </p>

                <p class="mb-6 leading-loose">
                    The members of the Sombor cluster gathered around the "Women to save" project are going to visit the experimental lavender field in Hungary to exchange experiences about growing the plant. In this way, the project, which gathered more than 50 women from Bezdan, Conoplja, Backi Monostor and other rural and farm settlements around Sombor, as well as from Hungary, in order to strengthen them economically and socially, is slowly coming to an end.
                </p>

                <p class="mb-6 leading-loose">
                    One of the most frequently asked questions in the cluster was how this essentially Mediterranean plant could withstand winter conditions. The experimental field of lavender in Hungary best shows how this perennial plant behaves in the territory of Southern Hungary, which has almost the same climate as the rural areas of Sombor.
                </p>

                <p class="mb-6 leading-loose">
                    The first analyzes after sowing autumn lavender in our area show that the plants need to be regenerated on about 10% of the planted areas, which was expected and predicted by both the Sombor Agricultural Expert Service and the Sombor project team. Spring replanting of lavender will begin immediately after thawing, as climatic conditions allow. It is important to note that according to the contract, the supplier selected for the installation of lavender on the project, the cooperative "Agrodunav" in Karavukovo, provided a sufficient number of seedlings for replanting this spring. It is also important that neither the members of the cluster nor the city of Sombor will incur additional costs when renovating lavender seedlings.
                </p>
            </div>
            
        </div>

    </div>