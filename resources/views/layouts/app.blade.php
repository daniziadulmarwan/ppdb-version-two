<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="/images/favicon.png">

    <!-- Page Title  -->
    <title>PPDB AL-AMIN PULOERANG</title>

    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/assets/css/dashlite.css?ver=3.1.1">
    <link id="skin-default" rel="stylesheet" href="/assets/css/theme.css?ver=3.1.1">

    <!-- Addon Css -->
    @stack('style')

</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-main ">

            @include('includes.admin.sidebar')

            <div class="nk-wrap ">

                @include('includes.admin.topbar')
                
                @yield('content')

                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; <script>document.write(new Date().getFullYear())</script> PPDB Team. App by <a href="https://daniziadulmarwan.github.io/" target="_blank" class="text-primary">Zeiteim Tech</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->

            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="/assets/js/bundle.js?ver=3.1.1"></script>
    <script src="/assets/js/scripts.js?ver=3.1.1"></script>
    <script src="/assets/js/charts/chart-ecommerce.js?ver=3.1.1"></script>

    <!-- Addon Javascript -->
    @stack('script')
</body>

</html>