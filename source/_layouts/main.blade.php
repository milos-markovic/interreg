<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="icon" href="/favicons.ico">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> 
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <!-- fontawesome icons -->
        <script src="https://kit.fontawesome.com/f6db652956.js" crossorigin="anonymous"></script>
        <!-- alpine js -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <body class="text-gray-900 font-primary antialiased">

        <div x-data="{ len: localStorage.getItem('len'), open: false, searchModal: false, shareModal: false, blackBackground: false }" 
             x-init="$watch('len', (val) => localStorage.setItem('len', val))"
        >
            
            <div :class="blackBackground ? 'transparent' : ''" class="overflow-y-auto" >
                @include('_partials.header_en')

                @yield('body')
    
                @include('_partials.footer_en')
            </div>

        </div>
    </body>
</html>
