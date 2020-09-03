@extends ('layout')


@section ('content')

    <div class="intro">
        <div class="intro_slide">
            <!--대표 평상 이미지 목록-->
                <div class="intro_slide_imgs" style="visibility:hidden; height:0;">
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                </div>
                <!--대표 평상 이미지 목록 끝-->
            <div class="intro_slide_img"><!--배경 이미지 넣기-->
                <div class="intro_slide_btn prev_btn">
                    <a href="#">
                        <img src="/img/prev_btn.png" alt="prev_btn">
                    </a>
                </div>
                <div class="intro_slide_btn next_btn">
                    <a href="#">
                        <img src="/img/next_btn.png" alt="next_btn">
                    </a>
                </div>
                <div class="intro_slide_btn down_btn">
                    <a href="#">
                        <img src="/img/down_btn.png" alt="down_btn">
                    </a>
                </div>
            </div>
        </div>
    </div>
        <!-- 평상 리스트 -->
    <div class="main" style="height=1000px;">
        <div class="container">
            <ul>
                <li>
                    <div>

                    </div>
                </li>
            </ul>
        </div>
    </div>

    <script>
        function scrollDown() {
            let downBtn = document.querySelector(".down_btn");
            let pageHeight = window.innerHeight;
            downBtn.addEventListener("click", function() {
                window.scrollBy(0, pageHeight);
            });
        }
        scrollDown();
    </script>
@endsection

