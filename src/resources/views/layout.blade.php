<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>

        <link href="{{ URL::asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"> <!-- Bootstrap -->
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet" type="text/css" />

        <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/swiper.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/dark.css')}}" rel="stylesheet" type="text/css">

        <link href="{{ URL::asset('css/font-icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/animate.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css">

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="{{ URL::asset('css/custom.css')}}" rel="stylesheet" type="text/css">

        <link href="{{ URL::asset('css/colors.php?color=222222')}}" rel="stylesheet" type="text/css"> <!-- Theme Color -->
        <link href="{{ URL::asset('css/fonts.css')}}" rel="stylesheet" type="text/css"> <!-- Theme Font -->
        <link href="{{ URL::asset('css/puuuff.css')}}" rel="stylesheet" type="text/css"> <!-- Theme Custom CSS -->

        @yield('RS_headincludes')  <!-- Revolution slider includes for main -->
    </head>
<body class="stretched modal-subscribe-bottom">
    <!-- Wrapper -->
    <div id="wrapper" class="clearfix">
        <!-- Header -->
        <?php include ('include/header.php'); ?>
        <!-- Header END-->

        <!-- Content -->
        <div class="container">
            <section id="content">
                <div class="content-wrap pb-0">
                    @yield('content')
                </div>
            </section>
        </div>
        <!-- Content END -->
    </div>
    <!-- Wrapper END -->

    <!-- Go To Top Button
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <?php include ('include/includeFooterJS.php'); ?>

</body>
</html>
