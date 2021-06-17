---
extends: _layouts.main
section: body
page: Blog
language: En
url: 'blog3'
img: https://www.womentosave.org/images/blog.svg
title_en: Final Activities of the Project
title_sr: Završne projektne aktivnosti
title_hu: A projekt befejező tevékenységei
data: '19.02.2020.'            
---

    <div>
        <header class="relative bottom-10">
            <div class="max-w-screen-desktop mx-auto px-5 xl:px-0">
                <div class="border-l-2 border-gray-200 p-3">
                    <div id="breadcrumb" class="mb-3 text-xs lg:text-base">
                        <ul class="flex" style="color: #555555;">
                            <li x-show="len === 'En'"><a href="">Home</a></li>
                            <li x-show="len === 'Sr'"><a href="">Početna</a></li>
                            <li x-show="len === 'Hu'"><a href="">Főoldal</a></li>

                            <li class="mx-3">/</li>
                            <li><a href="/blog">Blog</a></li>
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

        <div class="max-w-screen-desktop mx-auto px-5 xl:px-0">
        
            <img src="https://www.womentosave.org/images/blog/blog03.jpg" alt="" />

            <div x-show="len === 'En'" class="mt-16 lg:mt-20 text-sm lg:text-base">
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

            <div x-show="len === 'Sr'" class="mt-16 lg:mt-20 text-sm lg:text-base">
                <p class="mb-6 leading-loose">
                    Jedna od važnih projektnih aktivnosti se planira da realizuje krajem ovog ili početkom narednog meseca. Studijsko putovanje članica klastera u južnu Mađarsku je važan korak u osnaživanju klastera kao neprofitne institucije koja okuplja žene oko uzgoja i prerade lavande u ruralnim područjima grada Sombora.
                </p>

                <p class="mb-6 leading-loose">
                    Članice klastera iz Sombora okupljene oko projekta „Women to save“ posetiće ogledno polje lavande u Mađarskoj kako bi razmenile iskustva o uzgoju ove biljke. Na ovaj način projekat koji je okupio više od 50 žena iz Bezdana, Čonoplje, Bačkog Monoštora, kao i ostalih ruralnih i salašarskih naselja oko Sombora i žene iz Mađarske, kako bi ih ekonomski i socijalno osnažio, polako privodi kraju svoje projektne aktivnosti.
                </p>

                <p class="mb-6 leading-loose">
                    Jedno od najčešće postavljenih pitanja u klasteru je bilo kako ova u suštini mediteranska biljka može da prezimi. Ogledno polje lavande u Mađarskoj će najbolje pokazati kako se ova višegodišnja biljka ponaša u području južne Mađarske koje je klimatski gotovo identično sa ruralnim područjima grada Sombora. Prve analize nakon jesenje setve lavande na našem području pokazuju da je potrebno obnoviti biljke na oko 10% posađenih površina, što je bilo i očekivano i predviđeno u analizama koje je izvršila Poljoprivredna stručna služba u Somboru, kao i članovi projektnog tima grada Sombora. Ponovnom prolećnom sađenju Lavande će se pristupiti odmah nakon otopljavanja, čim klimatski uslovi dozvole.
                </p>

                <p class="mb-6 leading-loose">
                    Važno je napomenuti da je, u skladu sa ugovorom, odabrani dobavljač za sadnju lavande na projektu, zadruga “Agrodunav” iz Karavukova obezbedila dovoljan broj sadnica za ponovnu sadnju ovog proleća. Isto tako je važno da ni članice klastera ni grad Sombor neće imati dodatnih troškova prilikom obnavljanje sadnica lavande tokom ovog proleća.
                </p>
            </div>

            <div x-show="len === 'Hu'" class="mt-16 lg:mt-20 text-sm lg:text-base">
                <p class="mb-6 leading-loose">
                    Az egyik fontos projekt tevékenység a tervek szerint ennek a hónap végén vagy a jövő hónap elején valósul meg. A klasztertagok dél-magyarországi tanulmányútja fontos lépés a klaszter, mint nonprofit intézmény megerősítésében, amely Zombor város vidéki területein a nőket egyesíti a levendula termesztése és feldolgozása körül.
                </p>

                <p class="mb-6 leading-loose">
                    A "Women to save" projekt köré gyűlt zombori klaszter tagjai meglátogatják a magyarországi kísérleti levendulamezőt, hogy tapasztalatokat cseréljenek a növény termesztéséről. Ily módon a projekt, amely Bezdanból, Csonoplyából, Bacs Monostorból, valamint a Zombor környéki egyéb vidéki és tanyasi településekből, valamint Magyarországról származó nőkből több mint 50 nőt gyűjtött össze, gazdasági és társadalmi erősítésük érdekében, lassan befejezi projekt tevékenységét.
                </p>

                <p class="mb-6 leading-loose">
                    A klaszter egyik leggyakrabban feltett kérdése az volt, hogy ez a lényegében mediterrán növény hogyan tudja elviselni a téli körülményeket.
                </p>

                <p class="mb-6 leading-loose">
                    A levendula magyarországi kísérleti területe megmutatja a legjobban, hogyan viselkedik ez az évelő növény Dél-Magyarország területén, amely éghajlatában szinte megegyezik Zombor város vidéki területeivel. Az első elemzések a területünkön levő őszi levendula vetés után azt mutatják, hogy a növényeket az ültetett területek körülbelül 10% -án meg kell újítani, amire mind a zombori Mezőgazdasági Szakértői Szolgálat, mind a Zombor projektcsapat tagjai számítottak és jósoltak. A levendula tavaszi újratelepítése azonnal megolvadás után kezdődik, amint az éghajlati körülmények lehetővé teszik.
                </p>

                <p class="mb-6 leading-loose">
                    Fontos megjegyezni, hogy a szerződésnek megfelelően a levendula telepítéséhez kiválasztott szállító a projekten, a karavukovói "Agrodunav" szövetkezet elegendő számú palántát biztosított az újratelepítéshez idén tavasszal. Fontos az is, hogy sem a klaszter tagjainak, sem Zombor városának nem lesznek többletköltségei a levendula palánták felújításakor.
                </p>
            </div>
            
        </div>

    </div>