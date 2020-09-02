@extends ('layout')

@section ('intro')
<!-- <script>
    document.querySelector(".header").setAttribute("class", "header full-height");
    document.querySelector(".menu").style.visibility = "hidden";
    document.querySelector(".title").setAttribute("class", "title header-margin title_super");
    // document.querySelector(".title").style.fontSize = "3.8rem";
    // document.querySelector(".title").style.position = "relative";
    // document.querySelector(".title").style.top = "30px";
</script> -->
@endsection

@section ('content')

<div class="intro flex-center position-ref">
    <div class="intro_slide">
        <div class="intro_slide_img">
            <div class="intro_slide_btn down_btn">
                <a href="#">
                    <img src="/img/down_btn.png" alt="down_btn">
                </a>
            </div>
        </div>
    </div>
</div>
    <!--  -->

@endsection

