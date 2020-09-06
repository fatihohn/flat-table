@extends ('layout')


@section ('content')

    <section class="article_main">
        <div class="main">
            <div class="article_container container">
                <header class="article_header">
                    <h2>
                        quae sequi aperiam
                    </h2>
                    <div class="article_info">
                        <p class="category">
                            <a href="#">
                                종류
                            </a>
                        </p>
                        <p class="article_address">
                            dolor sit amet consectetur adipisicing
                        </p>
                    </div>
                    <div class="thumb"></div>
                </header>
                <div class="article_pics">
                    <figure>
                        <img src="https://www.doongdoong.org/se2/upload/c37_202008090731431935073975%25EC%2588%2598%25EC%25A0%2595%25EB%2590%25A8_Copy%2Bof%2BHUN_DSC_1089.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="https://www.doongdoong.org/se2/upload/c37_202008090733272041502992%25EC%2588%2598%25EC%25A0%2595%25EB%2590%25A8_FUN_4279_001.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="https://www.doongdoong.org/se2/upload/c37_20200809073306970504637%25EC%2588%2598%25EC%25A0%2595%25EB%2590%25A8_FUN_4580_001.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="https://www.doongdoong.org/se2/upload/c37_202008090733501338812052%25EC%2588%2598%25EC%25A0%2595%25EB%2590%25A8_Copy%2Bof%2BHUN_DSC_1180.jpg" alt="">
                    </figure>
                </div>
                <div class="article_text">
                    <div class="article_comment">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo temporibus consequuntur quibusdam quos! Maxime quam dicta quas, fugit velit eaque rem consequuntur, labore distinctio amet odio asperiores veritatis odit nesciunt?
                        </p>
                    </div>
                    <div class="article_cont">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quae sequi aperiam, adipisci exercitationem! Facere, doloribus neque quasi rem exercitationem dignissimos temporibus illum modi dolore labore fugit totam cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quae sequi aperiam, adipisci exercitationem! Facere, doloribus neque quasi rem exercitationem dignissimos temporibus illum modi dolore labore fugit totam cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quae sequi aperiam, adipisci exercitationem! Facere, doloribus neque quasi rem exercitationem dignissimos temporibus illum modi dolore labore fugit totam cumque?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quae sequi aperiam, adipisci exercitationem! Facere, doloribus neque quasi rem exercitationem dignissimos temporibus illum modi dolore labore fugit totam cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quae sequi aperiam, adipisci exercitationem! Facere, doloribus neque quasi rem exercitationem dignissimos temporibus illum modi dolore labore fugit totam cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quae sequi aperiam, adipisci exercitationem! Facere, doloribus neque quasi rem exercitationem dignissimos temporibus illum modi dolore labore fugit totam cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quae sequi aperiam, adipisci exercitationem! Facere, doloribus neque quasi rem exercitationem dignissimos temporibus illum modi dolore labore fugit totam cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quae sequi aperiam, adipisci exercitationem! Facere, doloribus neque quasi rem exercitationem dignissimos temporibus illum modi dolore labore fugit totam cumque?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function organizePics() {
            let articleImgs = document.querySelectorAll(".article_pics figure");
            for(let m=0; m < articleImgs.length; m++) {
                if(articleImgs[m].childNodes[1].width > articleImgs[m].childNodes[1].height) {
                    articleImgs[m].style.maxWidth = "98%";
                    articleImgs[m].style.margin = "10px 0.75%";
                } else {
                    articleImgs[m].style.maxWidth = "47.5%";
                    articleImgs[m].style.margin = "10px 1%";
                    articleImgs[m].style.display = "inline-block";
                }
                
            }
        }
        setTimeout(() => {
            organizePics();
        }, 300);
    </script>

@endsection

