<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
        <title></title>
        <!-- Fonts and icons -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

        <link href="css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />

        <!-- Nepcha Analytics (nepcha.com) -->
        <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
        <script defer data-site="Evento" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
  <x-navbar/>

    <main class="mt-0 transition-all duration-200 ease-soft-in-out ">
        <section class="space-y-12 mb-5 min-h-75-screen">
            <div class="relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-center bg-cover h-full  rounded-xl" style="background-image: url('https://img.freepik.com/free-photo/black-prism-concept-ai-generated_268835-7011.jpg?w=996&t=st=1709339399~exp=1709339999~hmac=0471a0426f238dcfee16db6a411ba51e05f51bfb12b530e634fda0ecd8cf7002   ')">
                <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-60"></span>
                <div class="container z-10">
                    <div class="flex flex-wrap justify-center -mx-3">
                        <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                            <h1 class="mt-12 mb-2 text-white font-bold text-6xl">Welcome!</h1>
                            <p class="text-white"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
                    <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                        <div class="relative z-0 flex flex-col min-w-0 break-words  rounded-2xl bg-clip-border">

                            <div class="flex-auto px-6 pb-6">

                                <div class="w-[1200px] mx-auto sm:max-w-md  px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                                    {{ $slot }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <x-footer/>
    </main>
    </body>
    <!-- plugin for scrollbar  -->
    <script src="js/plugins/perfect-scrollbar.min.js" async></script>
    <!-- main script file  -->
    <script src="js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
</html>
