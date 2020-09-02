@extends ('layout')

@section ('intro')
    <div class="intro flex-center position-ref">
        <div class="intro_slide">

        </div>
    </div>
    <script>
        document.querySelector(".header").setAttribute("class", "header full-height");
        document.querySelector(".menu").style.visibility = "hidden";
        document.querySelector(".title").style.fontSize = "3.8rem";
        document.querySelector(".title").style.position = "relative";
        document.querySelector(".title").style.top = "50px";
    </script>
@endsection

@section ('content')

    <!-- <div class="flex-center position-ref full-height intro">
        <div>

        </div>
    </div> -->

@endsection

