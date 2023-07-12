<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="/images/logo.png">

    <!-- Page Title  -->
    <title>PPDB AL-AMIN PULOERANG</title>

    @livewireStyles

    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/assets/css/dashlite.css?ver=3.1.1">
    <link id="skin-default" rel="stylesheet" href="/assets/css/theme.css?ver=3.1.1">

    <!-- Addon Css -->
    @stack('style')

    @vite('resources/js/app.js')

</head>

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme dark-mode">
    <div class="nk-app-root">
        <div class="nk-main ">

            @include('includes.users.sidebar')

            <div class="nk-wrap ">

                @include('includes.users.topbar')
                
                @yield('content')

                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; <script>document.write(new Date().getFullYear())</script> PPDB App V2 by <a href="https://daniziadulmarwan.github.io/" target="_blank" class="text-success">
                                <em class="icon ni ni-terminal"></em>
                                Zeiteim Tech</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->

            </div>
        </div>
    </div>

    <!-- JavaScript -->
    @livewireScripts
    <script src="/assets/js/bundle.js?ver=3.1.1"></script>
    <script src="/assets/js/scripts.js?ver=3.1.1"></script>
    <script src="/assets/js/charts/chart-ecommerce.js?ver=3.1.1"></script>

    <!-- Addon Javascript -->
    @stack('script')
</body>

</html>