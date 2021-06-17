<footer>
    <div class="hidden xl:flex justify-between items-end">
        <div class="w-1/2">
            <p x-show="len === 'En'" class="text-xs p-4 mr-16" style="border-left: 40px solid #F2F2F2; color: gray;">
            This website has been produced with the financial assistance of the European Union through the Interreg-IPA Cross-border Cooperation Programme Hungary-Serbia. The content of the website is the sole responsibility of City of Sombor and can under no circumstances be regarded as reflecting the position of the European Union and/or the Managing Authority of the Programme.
            </p>

            <p x-show="len === 'Sr'" class="text-xs p-4 mr-16" style="border-left: 40px solid #F2F2F2; color: gray;">
            Ova internet stranica je izrađena uz finansijsku podršku Evropske unije kroz Interreg-IPA program prekogranične saradnje Mađarska-Srbija. Za sadržaj ove internet stranice je odgovoran isključivo Grad Sombor i sadržaj ove internet stranice ne odražava zvanično mišljenje Evropske unije i/ili Upravljačkog tela Programa. 
            </p>

            <p x-show="len === 'Hu'" class="text-xs p-4 mr-16" style="border-left: 40px solid #F2F2F2; color: gray;">
            Ez a weboldal az Európai Unió pénzügyi támogatásával valósult meg a Interreg-IPA Határon Átnyúló Együttműködési Program Magyarország-Szerbia által. A weboldal tartalmáért teljes mértékben Zombor város vállalja a felelősséget, és az semmilyen körülmények között nem tekinthető az Európai Unió és / vagy a programot Irányító Hatóságnak állásfoglalását tükröző tartalomnak. 
            </p>
        </div>

        <div>
            <img x-show="len === 'En'" src="/assets/img/ribbon-en.png" alt="ribbon">
            <img x-show="len === 'Sr'" src="/assets/img/ribbon-sr.png" alt="ribbon">
            <img x-show="len === 'Hu'" src="/assets/img/ribbon-hu.png" alt="ribbon">
        </div>
    </div>

    <div class="block xl:hidden">
        <div id="social_icons" class="flex justify-center">
            <a href="" class="bg-gray-600 rounded-full flex justify-center items-center text-white" style="width: 35px; height: 35px;">
                <i class="fab fa-youtube fa-lg" class=""></i>
            </a>
            <a href="" class="bg-gray-600 rounded-full flex justify-center items-center text-white mx-5" style="width: 35px; height: 35px;">
                <i class="fab fa-linkedin-in fa-lg"></i>
            </a>
            <a href="" class="bg-gray-600 rounded-full flex justify-center items-center text-white" style="width: 35px; height: 35px;">
                <i class="fab fa-facebook-f fa-lg"></i>
            </a>
        </div>
        
        <div>
            <img x-show="len === 'En'" src="/assets/img/ribbon-en.png" alt="ribbon">
            <img x-show="len === 'Sr'" src="/assets/img/ribbon-sr.png" alt="ribbon">
            <img x-show="len === 'Hu'" src="/assets/img/ribbon-hu.png" alt="ribbon">
        </div>
        
        <div>
            <p x-show="len === 'En'" class="text-xs p-4" style="background: #f2f2f2; color: #808080;">
            This website has been produced with the financial assistance of the European Union through the Interreg-IPA Cross-border Cooperation Programme Hungary-Serbia. The content of the website is the sole responsibility of City of Sombor and can under no circumstances be regarded as reflecting the position of the European Union and/or the Managing Authority of the Programme.
            </p>
        
            <p x-show="len === 'Sr'" class="text-xs p-4" style="background: #f2f2f2; color: #808080;">
            Ova internet stranica je izrađena uz finansijsku podršku Evropske unije kroz Interreg-IPA program prekogranične saradnje Mađarska-Srbija. Za sadržaj ove internet stranice je odgovoran isključivo Grad Sombor i sadržaj ove internet stranice ne odražava zvanično mišljenje Evropske unije i/ili Upravljačkog tela Programa. 
            </p>

            <p x-show="len === 'Hu'" class="text-xs p-4" style="background: #f2f2f2; color: #808080;">
            Ez a weboldal az Európai Unió pénzügyi támogatásával valósult meg a Interreg-IPA Határon Átnyúló Együttműködési Program Magyarország-Szerbia által. A weboldal tartalmáért teljes mértékben Zombor város vállalja a felelősséget, és az semmilyen körülmények között nem tekinthető az Európai Unió és / vagy a programot Irányító Hatóságnak állásfoglalását tükröző tartalomnak. 
            </p>
        </div>
    </div>
</footer>