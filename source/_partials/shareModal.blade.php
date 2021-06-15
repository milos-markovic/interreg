
<div id="share" x-show="shareModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div>
                <header class="flex items-center justify-between p-3 px-5" style="background: #ffd629;">
                    <h3 class="text-2xl">Share</h3>
                    <a @click="shareModal = false" href="" class="text-2xl font-bold">X</a>
                </header>
                <div class="p-6 flex justify-center items-center space-x-10">
                    <a href="https://www.viber.com/en/?utm_source=Partner&utm_medium=Sharebutton&utm_campaign=Defualt" target="_blank" class="w-16 h-16">
                        <img src="https://www.womentosave.org/images/share/viber.svg" alt="">
                    </a>
                    <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=966242223397117&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fshare.php%3Fu%3Dhttp%253A%252F%252Fwww.womentosave.org%252F&cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Fclose_window%2F%3Fapp_id%3D966242223397117%26connect%3D0%23_%3D_&display=popup&locale=sr_RS" target="_blank" class="w-16 h-16">
                        <img src="https://www.womentosave.org/images/share/fb.svg" alt="">
                    </a>
                    <a href="https://www.linkedin.com/signup/cold-join?session_redirect=https%3A%2F%2Fwww%2Elinkedin%2Ecom%2FshareArticle%2F%3Furl%3Dhttp%3A%2F%2Fwww%2Ewomentosave%2Eorg%2F&trk=login_reg_redirect" target="_blank" class="w-16 h-16">
                        <img src="https://www.womentosave.org/images/share/linkedin.svg" alt="">
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=http://www.womentosave.org/" target="_blank" class="w-16 h-16">
                        <img src="https://www.womentosave.org/images/share/twitter.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>