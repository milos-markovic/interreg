---
extends: _layouts.main
section: body
page: Blog
language: En
img: https://www.womentosave.org/images/blog.svg
url: 'blog1'
title_en: City of Sombor - Host of the Opening Conference of the Project "Social Entrepreneurship for Women from Rural Areas"
title_sr: Grad Sombor – domaćin otvarajuće konferencije projekta "Socijalno preduzetništvo za žene iz ruralnih područja"
title_hu: Zombor Városa a "Társadalmi vállalkozás a vidéki nők számára" című projekt nyitókonferenciájának házigazdája

data: '02.12.2019.'            
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

        <div class="max-w-screen-desktop mx-auto px-5 xl:px-0 ">
        
            <img src="https://www.womentosave.org/images/blog/blog01.jpg" alt="" />


            <div x-show="len === 'En'" class="mt-16 lg:mt-20 text-sm lg:text-base">
                <p class="mb-6 leading-loose">
                    On Friday, October 25, the opening conference of the project "Social Entrepreneurship for Women from Rural Areas" was held in Sombor, which is co-financed through the Interreg IPA Hungary-Serbia 2014-2020 cross-border cooperation program. The conference was attended by representatives of the project team of the city of Sombor, which is also the leading partner in the project, as well as representatives of all project partners on both sides of the border in the Interreg IPA Hungary-Serbia cross-border cooperation program.
                </p>

                <p class="mb-6 leading-loose">
                    The City of Sombor is implementing this project through a partnership with three other institutions: the Center for Social Work of the City of Sombor, the Center for the Production of Knowledge and Skills from Novi Sad and the cross-border partner "Halasi Media" from Kiskunhalas.
                </p>

                <p class="mb-6 leading-loose">
                    Antonio Ratković, as the official representative of the city of Sombor, addressed the present guests at the Opening Conference of this project. The city of Sombor has traditionally supported cross-border and transnational projects in Interreg IPA territorial cooperation programs for several years. It was pointed out that this project with planned project activities for the city of Sombor is of great importance from the aspect of strengthening socially vulnerable categories from rural areas. Empowerment is realized through a clear policy of support for women from the surrounding farms and settlements in the city of Sombor.
                </p>

                <p class="mb-6 leading-loose">
                    At the Opening Conference, information on the financial effects of this project, whose total budget exceeds the figure of 200,000 Euros, was also highlighted. In accordance with the European rules on sources of funding in the projects of the Interreg IPA Hungary-Serbia cross-border cooperation program for the period 2014-2020, the European Union, as a donor provides 85% of the allocated funds, while project partners provide the remaining 15%. The project team of the city of Sombor provided its participation of 15% in the project budget from the Secretariat for Finance of the Provincial Government of the Autonomous Province of Vojvodina, so that from the aspect of financial management of this project, no grants are allocated from the city budget.
                </p>
            </div>
    

            <div x-show="len === 'Sr'" class="mt-16 lg:mt-20 text-sm lg:text-base">
                <p class="mb-6 leading-loose">
                    U petak 25. oktobra u Somboru je održana otvarajuća konferencija projekta “Socijalno preduzetništvo za žene iz ruralnih područja“ koji se sufinansira kroz Interreg IPA program prekogranične saradnje Mađarska-Srbija 2014-2020. Na konferenciji su bili prisutni predstavnici projektnog tima grada Sombora koji je ujedno i vodeći partner na projektu, kao i predstavnici svih partnera na projektu sa obe strane granice u programskom području Interreg IPA programa prekogranične saradnje Mađarska-Srbija.
                </p>

                <p class="mb-6 leading-loose">
                    Grad Sombor ovaj projekat realizuje kroz partnerstvo sa još tri institucije: Centrom za socijalni rad Grada Sombora, Centrom za proizvodnju znanja i veština iz Novog Sada i prekograničnim partnerom „Halaši medija“ iz Kiškunhalaša.
                </p>

                <p class="mb-6 leading-loose">
                    Na Otvarajućoj konferenciji ovog projekta se obratio prisutnim gostima Antonio Ratković, kao zvanični predstavnik grada Sombora. Grad Sombor tradicionalno već više godina podržava prekogranične i transnacionalne projekte u Interreg IPA programima teritorijalne saradnje. Istaknuto je da ovaj projekat sa planiranim projektnim aktivnostima za grad Sombor ima veliki značaj sa aspekta osnaživanja socijalno ugroženih kategorija iz ruralnih područja. Osnaživanje se realizuje kroz jasnu politiku podrške ženama iz okolnih salašarskih naselja i naseljenih mesta u gradu Somboru.
                </p>

                <p class="mb-6 leading-loose">
                    Na Otvarajućoj konferenciji su istaknute i informacije o finansijskim efektima ovog projekta, čiji ukupan budžet premašuju cifru od 200.000 Eura. U skladu sa Evropskim pravilima o izvorima finansiranja u projektima Interreg IPA programa prekogranične saradnje Mađarska-Srbija za period 2014-2020, Evropska unija, kao donator obezbeđuje 85% opredeljenih finansijskih sredstava, dok projektni partneri obezbeđuju preostalih 15%. Svojih 15% procenata učešća i ovom projektu je projektni tim grada Sombora obezbedio od Sekretarijata za finansije Pokrajinske vlade Autonomne pokrajine Vojvodine, tako da se posmatrano sa aspekta finansijskog menadžmenta ovog projekta iz budžeta grada se uopšte ne izdvajaju nepovratna sredstva za realizaciju projektnih aktivnosti.
                </p>
            </div>
        


            <div x-show="len === 'Hu'" class="mt-16 lg:mt-20 text-sm lg:text-base">

                <p class="mb-6 leading-loose">
                    Október 25-én, pénteken, Zomborban tartották meg a "Társadalmi vállalkozás a vidéki nők számára" projekt nyitókonferenciáját, amelyet az Interreg IPA Magyarország-Szerbia 2014-2020 közötti határokon átnyúló együttműködési program társfinanszíroz. A konferencián részt vettek Zombor város projektcsapatának képviselői, amely egyben a projekt vezető partnere, valamint az Interreg IPA Magyarország-Szerbia határon átnyúló együttműködési programban a határ mindkét oldalán található összes projektpartner képviselője. Zombor városa három másik intézménnyel valósítja meg ezt a projektet: Zombor Város Szociális Munka Központjával, az újvidéki Tudás és készségek előállításának központjával és a határon átnyúló kiskunhalasi "Halasi Média" partnerrel.
                </p>

                <p class="mb-6 leading-loose">
                    Antonio Ratković, mint Zombor város hivatalos képviselője, a projekt nyitó konferenciáján szólt a jelenlévő vendégekhez. Zombor városa több éve hagyományosan támogatja a határokon átnyúló és transznacionális projekteket az Interreg IPA területi együttműködési programjaiban. Felhívták a figyelmet arra, hogy ez a projekt Zombor városának tervezett projekt tevékenységeivel nagy jelentőséggel bír a vidékről származó, szociálisan veszélyeztetett kategóriák megerősítése szempontjából. Az erősítés a projekt világos támogatáspolitikája révén valósul meg a Zombor várost környező tanyasi településein élő nők számára.
                </p>

                <p class="mb-6 leading-loose">
                    A nyitókonferencián kiemelték a projekt pénzügyi hatásaival kapcsolatos információkat is, amelynek teljes költségvetése meghaladja a 200 000 eurót. Az Interreg IPA 2014–2020 közötti időszakra vonatkozó Magyarország – Szerbia határon átnyúló együttműködési program finanszírozási forrásaival kapcsolatos európai szabályainak megfelelően az Európai Unió adományozóként a kiosztott források 85% -át biztosítja, míg a fennmaradó 15% -ot a projektpartnerek biztosítják. Zombor város projektcsapata a Vajdaság Autonóm Tartomány Kormányának Pénzügyi Titkárságától megadta a projektben való 15% -os részvételt, így a projekt pénzügyi irányításának szempontjából a város költségvetéséből semmilyen támogatást nem osztanak ki.
                </p>
                
            </div>
                
            
        
        </div>

    </div>




