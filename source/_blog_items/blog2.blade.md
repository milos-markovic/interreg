---
extends: _layouts.main
section: body
page: Blog
language: En
url: 'blog2'
img: https://www.womentosave.org/images/blog.svg
title_en: Social Entrepreneurship and Women from Rural Areas of Sombor
title_sr: Socijalno preduzetništvo i žene iz ruralnih područja grada Sombora
title_hu: Társadalmi vállalkozás és Zombor vidéki területén élő nő
data: '17.12.2019.'            
---
    <div>
        <header class="relative bottom-10">
            <div class="max-w-screen-desktop mx-auto px-5 xl:px-0">
                <div class="border-l-2 border-gray-200 p-3">
                    <div id="breadcrumb" class="mb-3 text-xs lg:text-base">
                        <ul class="flex" style="color: #555555;">
                            <li x-show="len === 'En'"><a href="/">Home</a></li>
                            <li x-show="len === 'Sr'"><a href="/">Poćetna</a></li>
                            <li x-show="len === 'Hu'"><a href="/">Főoldal</a></li>

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
        
            <img src="https://www.womentosave.org/images/blog/blog02.jpg" alt="" />

            <div x-show="len === 'En'" class="mt-16 lg:mt-20 text-sm lg:text-base">
                <p class="mb-6 leading-loose">
                    The project "Social Entrepreneurship for Women from Rural Areas" co-financed through the Interreg IPA cross-border cooperation program Hungary-Serbia 2014-2020 consists of a range of mutually conditioned and carefully coordinated project activities. One of these activities is directly related to the cultivation of lavender, for which 60,000 euros were allocated from EU donor funds for the purchase of not less than 60,000 lavender seedlings. All lavender seedlings will be planted in the cross-border program area of the Interreg IPA cross-border cooperation program Hungary-Serbia for the period 2014-2020. Half of the planned seedlings will be planted in rural areas of the city of Sombor. 
                </p>

                <p class="mb-6 leading-loose">
                    This innovative project approach leads to real economic and social empowerment of women in the countryside, through a multi-year project of growing lavender and its processing. It can be the first step towards a better and safer life for femail citizens of Sombor and their femail neighbors in the surrounding areas. A project will gather at least 28 women from Bezdan, Conoplja, Backi Monostor, as well as other rural and farm settlements around Sombor. The cluster of women from rural areas is expected to exceed 50 members by the end of the project.
                </p>

                <p class="mb-6 leading-loose">
                    Through this project, which is known by its acronym "Women to save", new opportunities and capacity building for the development of social entrepreneurship will be established through new innovative models for the transfer of knowledge and skills for women in rural areas, improving social and thus business opportunities for unemployed women in these areas.
                </p>

                <p class="mb-6 leading-loose">
                    The model of realization of social entrepreneurship for women in the rural program area of the Interreg IPA cross-border cooperation program Hungary-Serbia for the period 2014-2020 is a combination of new institutions such as clusters of women entrepreneurs, which is in the founding phase, and direct support through planting lavender on plots owned or used by cluster members. This approach is supported by innovative solutions in the field of information and communication technologies that directly support the work of the cluster and help its growth and development.
                </p>
            </div>

            <div x-show="len === 'Sr'" class="mt-16 lg:mt-20 text-sm lg:text-base">
                <p class="mb-6 leading-loose">
                    Projekat “Socijalno preduzetništvo za žene iz ruralnih područja“ koji se sufinansira kroz Interreg IPA program prekogranične saradnje Mađarska-Srbija 2014-2020 se sastoji iz čitave lepeze međusobno uslovljenih i pažljivo koordiniranih projektnih aktivnosti. Jedna od tih aktivnosti je direktno povezana za uzgoj lavande za koju je donatorskih sredstava EU izdvojeno 60.000 evra za nabavku ne manje od 60.000 sadnica lavande. Sve sadnice lavande će se posaditi u prekograničnom programskom području Interreg IPA programa prekogranične saradnje Mađarska-Srbija za period 2014-2020. Polovina od planiranih sadnica će se posaditi u ruralnim područjima grada Sombora. 
                </p>

                <p class="mb-6 leading-loose">
                    Ovakav inovativni projektni pristup vodi ka realnom ekonomskom i socijalnom osnaživanje žena na selu, kroz višegodišnji projekat uzgajanja lavande i njene obrade, može biti prvi korak ka kvalitetnijem i sigurnijem životu građanki Sombora i njihovih susetki u okolnim mestima. Projekat koji će okupiti najmanje 28 žena iz Bezdana, Čonoplje, Bačkog Monoštora, kao i ostalih ruralnih i salaških naselja oko Sombora. Očekuje se da klaster žena iz ruralnih područja do kraja projekta premaši brojku od 50 članica.
                </p>

                <p class="mb-6 leading-loose">
                    Putem ovog projekta, koji je poznat i sa svojim akronimom „Women to save“ biće uspostavljene nove mogućnosti i povećanje kapaciteta za razvoj socijalnog preduzetništva kroz nove inovativne modele za transfer znanja i veština za žene u ruralnom području, poboljšanje socijalnih, a samim tim i poslovnih mogućnosti za nezaposlene žene iz tih oblasti.
                </p>

                <p class="mb-6 leading-loose">
                    Model realizacije socijalnog preduzetništva za žene u ruralnom programskog području Interreg IPA programa prekogranične saradnje Mađarska-Srbija za period 2014-2020 je kombinacija stvaranja novih institucija kao što su klasteri žena preduzetnica i direktna podrška kroz sadnju Lavande na parcelama čije su vlasnice ili korisnice upravo članice klastera koji je u fazi osnivanja. Ovakav pristup je potpomognut inovativnim rešenjima u oblasti informaciono-komunikacionih tehnologija koje direktno podržavaju rad klastera i pomažu njegov rast i razvoj.
                </p>
            </div>

            <div x-show="len === 'Hu'" class="mt-16 lg:mt-20 text-sm lg:text-base">
                <p class="mb-6 leading-loose">
                    Az Interreg IPA Magyarország-Szerbia 2014–2020 határon átnyúló együttműködési program keresztül társfinanszírozott projekt, mely címe „Szociális vállalkozás a vidéki nőkért” egy sor kölcsönösen feltételezett és gondosan összehangolt projekt tevékenységből áll össze. 
                </p>

                <p class="mb-6 leading-loose">
                    Ezen tevékenységek egyike közvetlenül kapcsolódik a levendula termesztéséhez, amelyhez az EU adományozói forrásaiból 60 000 eurót különítettek el legalább 60 000 levendula palánta megvásárlására. Az összes levendula palántát az Interreg IPA Magyarország-Szerbia határon átnyúló együttműködési programterületére ültetik a 2014-2020 időszakban. A tervezett palánták felét Zombor város vidéki területein ültetik el.
                </p>

                <p class="mb-6 leading-loose">
                    Egy ilyen innovatív projekt megközelítés a vidéki nők valódi gazdasági és társadalmi szerepvállalásához vezet a levendula termesztésének és feldolgozásának többéves projektje révén. Ez lehet az első lépés a zombori nők és a környező területeken élő szomszédasszonyaik jobb és biztonságosabb életéhez. A projekt legalább 28 nőt fog összehozni Bezdanból, Csonoplyából, Bács Monostorból, valamint Zombor környéki egyéb vidéki és tanyasi településekről. A vidéki nők csoportja várhatóan meghaladja az 50 tagot a projekt végére.
                </p>

                <p class="mb-6 leading-loose">
                    A "Women to save" rövidítéssel is ismert projekt révén új lehetőségek és kapacitásépítés jön létre a szociális vállalkozás fejlesztése érdekében, új innovatív tudás és készségek átadási modellek révén a vidéki térségekben élő nők számára, a társadalmi élet és ezáltal az üzleti lehetőségek javítására az ezeken a területeken élő munkanélküli nők számára.
                </p>

                <p class="mb-6 leading-loose">
                    A nők társadalmi vállalkozói szellemének megvalósításának modellje az Interreg IPA határon átnyúló Magyarország-Szerbia 2014–2020 vidéki programterületén kombinációja az új intézmények létrehozásának (például női vállalkozók klaszterei) és közvetlen levendula ültetésre vonatkozó támogatásnak a klaszter (amely az alapítási szakaszban van) tagjai tulajdonában lévő vagy használt telkeken. Ezt a megközelítést innovatív megoldások támogatják az információs és kommunikációs technológiák területén, amelyek közvetlenül támogatják a klaszter munkáját, és segítik annak növekedését és fejlődését.
                </p>
            </div>
            
        </div>

    </div>