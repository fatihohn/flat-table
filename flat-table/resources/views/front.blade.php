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
                    <a>
                        <img src="/img/prev_btn.png" alt="prev_btn">
                    </a>
                </div>
                <div class="intro_slide_btn next_btn">
                    <a>
                        <img src="/img/next_btn.png" alt="next_btn">
                    </a>
                </div>
                <div class="intro_slide_btn down_btn">
                    <a>
                        <img src="/img/down_btn.png" alt="down_btn">
                    </a>
                </div>
            </div>
        </div>
        <aside class="tagline">
            <div class="container">
                <div class="col-1">
                    <h1>
                        동두천
                        <em>의</em>
                        평상
                    </h1>
                </div>
                <div class="col-2">
                    <h2>변방평상</h2>
                    <p>
                        평상을 이용하는 사람들의 문화를 관찰합니다. <br> 
                        평상이 품은 역사와 특유의 문화를 배웁니다.
                    </p>
                </div>
            </div>
        </aside>
    </div>
        <!-- 평상 리스트 -->
    <div class="main">
        <div class="container">
            <header class="container_header">
                <img src="/img/flat_table_icon.png" alt="flat_table_icon">
                <h1>평상들</h1>
            </header>
            <nav class="container_nav">
            </nav>
            <div class="container_inner">
                <ul>
                    <li>
                        <div>

                        </div>
                    </li>
                </ul>
            </div>
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

