    
    <div id="searchModal" x-show="searchModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
         
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div class="inline-block align-bottom bg-white text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div>
                    <header class="flex items-center justify-between p-3 px-5" style="background: #ffd629;">
                        <h3 class="text-2xl">Search</h3>
                        <a @click.prevent="searchModal = false" href="" class="text-2xl font-bold">X</a>
                    </header>
                    <div class="p-6 flex items-center">
                        <input type="text" name="" placeholder="ENCHANCHED by Google" class="p-2 border flex-1 border-gray-300 h-9">
                        
                        <a href="" class="h-8 w-16 ml-5 flex items-center justify-center" style="background: #ffd629;">
                            <i class="fas fa-search fa-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>