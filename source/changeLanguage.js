
let anchers = document.querySelectorAll('#language a');

anchers.forEach(function(el){
    el.addEventListener("click", function(e){
        e.preventDefault();

        let lenguage = this.id;

        //let hostName = window.location.host;
        let pathName = window.location.pathname.slice(0, -1);

        if(pathName.includes('-')){
            pathName = pathName.split('-')[0];
        }

        let path = '';

        if(lenguage === 'en'){

            if(pathName === '/index'){
                path = 'http://localhost:3000';
            }else{
                path = 'http://localhost:3000' + pathName;
            }

        }else{

            if(pathName === ''){
                path = 'http://localhost:3000/index-' + lenguage;
            }else{
                path = 'http://localhost:3000' + pathName + '-' + lenguage;
            }
        }

        window.location.href = path;                    

    }); 
});


