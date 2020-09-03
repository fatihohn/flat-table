<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>평상도록</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/layout.css?after" type="text/css" media="all" />
        @yield ('head')
    </head>
    <body>
        <div class="header">
            <div class="title header-margin">
                <div class="box actions">
                    <a href="#" class="menu x">
                        <span class="line top"></span>
                        <span class="line middle"></span>
                        <span class="line bottom"></span>
                    </a>
                </div>
                <div class="box links home-btn">
                    <a href="/">
                        평상도록
                    </a>
                </div>
            </div>
            @yield ('intro')
        </div>
    <!-- <div class="flex-center position-ref full-height">
    </div> -->
        <nav id="nav" class="nav fixed">
            <ul class="nav_group">
                <li class="nav_item">
                    <mark>.01</mark>
                    <a href="#">
                        평상들
                    </a>
                </li>
                <li class="nav_item">
                    <mark>.02</mark>
                    <a href="#">
                        평상지도
                    </a>
                </li>
                <li class="nav_item">
                    <mark>.03</mark>
                    <a href="#">
                        평상으로부터
                    </a>
                </li>
            </ul>
        </nav>
        <div id="overlay" class="overlay"></div>
        @yield ('content')

            
<script>
    function manageNav() {
        let menuBtn = document.querySelector(".menu");
        let navigation = document.getElementById("nav");
        let overlay = document.getElementById("overlay");

        function showNav() {
            navigation.classList.add("active");
            overlay.classList.add("active");
            menuBtn.classList.add("active");
        }
        function hideNav() {
            navigation.classList.remove("active");
            overlay.classList.remove("active");
            menuBtn.classList.remove("active");
        }
         menuBtn.addEventListener("click", function() {
             if(navigation.classList.contains("active")) {
                 hideNav();
             } else {
                 showNav();
             }
         });
    }
    manageNav();
</script>


    </body>
</html>
