@extends ('admin_layout')

@section ('content')

    <section class="article_main">
        <div class="main">
            <div class="article_container container">
                <header class="article_header">
                    <form action="/new_article" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <!-- <h2>
                            성보주택 평상
                        </h2> -->
                        <input type="text" name="title" placeholder="제목" required/>
                        <div class="article_info">
                            <p class="article_address">
                                {{-- 경기도 동두천시 상봉암동 153-15 --}}
                                <input type="text" name="address" placeholder="주소" required />
                            </p>
                            <p class="category">
                                <!-- <a href="#">
                                    주민모임형
                                </a> -->
                                <input type="text" id="hashtags" autocomplete="off">
                                <div class="tag-container"></div>
                                <input id="category_container" type="text" name="category" value="" />
                            </p>
                        </div>
                    </form>
                </header>
                <!-- <div class="article_pics">
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
                </div> -->
                <div class="article_text">
                    <div class="article_comment">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo temporibus consequuntur quibusdam quos! Maxime quam dicta quas, fugit velit eaque rem consequuntur, labore distinctio amet odio asperiores veritatis odit nesciunt?
                        </p>
                    </div>
                    <div class="article_text_spacer"></div>
                    <div class="article_cont">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quae sequi aperiam, adipisci exercitationem! Facere, doloribus neque quasi rem exercitationem dignissimos temporibus illum modi dolore labore fugit totam cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quae sequi aperiam, adipisci exercitationem! Facere, doloribus neque quasi rem exercitationem dignissimos temporibus illum modi dolore labore fugit totam cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quae sequi aperiam, adipisci exercitationem! Facere, doloribus neque quasi rem exercitationem dignissimos temporibus illum modi dolore labore fugit totam cumque?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quae sequi aperiam, adipisci exercitationem! Facere, doloribus neque quasi rem exercitationem dignissimos temporibus illum modi dolore labore fugit totam cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quae sequi aperiam, adipisci exercitationem! Facere, doloribus neque quasi rem exercitationem dignissimos temporibus illum modi dolore labore fugit totam cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quae sequi aperiam, adipisci exercitationem! Facere, doloribus neque quasi rem exercitationem dignissimos temporibus illum modi dolore labore fugit totam cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quae sequi aperiam, adipisci exercitationem! Facere, doloribus neque quasi rem exercitationem dignissimos temporibus illum modi dolore labore fugit totam cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius quae sequi aperiam, adipisci exercitationem! Facere, doloribus neque quasi rem exercitationem dignissimos temporibus illum modi dolore labore fugit totam cumque?
                        </p>
                    </div>
                    <footer class="article_footer">
                        <div class="article_auth">
                            <p class="photo">
                                사진
                                <span>
                                    박상환
                                </span>
                            </p>
                            <p class="words">
                                글
                                <span>
                                    이경렬
                                </span>
                            </p>
                        </div>
                        <!-- <div class="article_share">
                            <span>
                                공유:
                            </span>
                            <a href="">Facebook</a>
                            <a href="">Tweeter</a>
                        </div> -->
                    </footer>
                </div>
                <div class="article_pics_mobile"></div>
            </div>
        </div>
    </section>


    <script>
        let input, category_container, hashtagArray, container, t;

        input = document.querySelector('#hashtags');
        category_container = document.querySelector('#category_container');
        container = document.querySelector('.tag-container');
        hashtagArray = [];

        input.addEventListener('keyup', () => {
            if (event.which == 13 && input.value.length > 0) {
                var text = document.createTextNode(input.value);
                var p = document.createElement('p');
                container.appendChild(p);
                p.appendChild(text);
                p.classList.add('tag');
                input.value = '';
                
                let deleteTags = document.querySelectorAll('.tag');
                
                for(let i = 0; i < deleteTags.length; i++) {
                    deleteTags[i].addEventListener('click', () => {
                    container.removeChild(deleteTags[i]);
                    });
                }
            }
        });
    </script>

    <script>
        function organizePics() {
        let articleImgs = document.querySelectorAll(".article_pics figure");
        let mobileImgs = document.querySelector(".article_pics_mobile");
            for(let m=0; m < articleImgs.length; m++) {
                articleImgs[m].style.display = "block";
                articleImgs[m].childNodes[1].style.width = "100%";
                if(window.innerWidth > 1080) {
                    if(mobileImgs.childNodes.length > 0) {
                        for(let n=0; n < mobileImgs.childNodes.length; n++) {
                            mobileImgs.childNodes[n].remove();
                        }
                    }
                    
                    if(articleImgs[m].childNodes[1].width > articleImgs[m].childNodes[1].height) {
                        articleImgs[m].style.maxWidth = "96.5%";
                        articleImgs[m].style.height = "auto";
                        articleImgs[m].childNodes[1].style.height = "auto";
                        articleImgs[m].childNodes[1].style.width = "100%";
                        articleImgs[m].style.margin = "10px 0.75%";
                    } else {
                        articleImgs[m].style.maxWidth = "47.5%";
                        articleImgs[m].style.height = "auto";
                        articleImgs[m].childNodes[1].style.height = "auto";
                        articleImgs[m].childNodes[1].style.width = "100%";
                        articleImgs[m].style.margin = "10px 0.5%";
                        articleImgs[m].style.display = "inline-flex";
                    }
                } else if(window.innerWidth <= 1080 && window.innerWidth >= 720) {
                    if(m > 0 && document.querySelectorAll(".article_pics_mobile figure").length < document.querySelectorAll(".article_pics figure").length - 1) {
                        replaceImg(articleImgs[m]);
                        if(articleImgs[m].childNodes[1].width >= articleImgs[m].childNodes[1].height) {
                            document.querySelectorAll(".mobile_img")[m-1].style.maxWidth = "96.5%";
                            document.querySelectorAll(".mobile_img")[m-1].style.width = "96.5%";
                            document.querySelectorAll(".mobile_img")[m-1].style.height = "auto";
                            document.querySelectorAll(".mobile_img")[m-1].childNodes[0].style.width = "100%";
                            document.querySelectorAll(".mobile_img")[m-1].childNodes[0].style.height = "auto";
                            document.querySelectorAll(".mobile_img")[m-1].style.margin = "10px 0.25%";
                        } else {
                            document.querySelectorAll(".mobile_img")[m-1].style.maxWidth = "47.5%";
                            document.querySelectorAll(".mobile_img")[m-1].style.width = "47.5%";
                            document.querySelectorAll(".mobile_img")[m-1].style.height = "auto";
                            document.querySelectorAll(".mobile_img")[m-1].childNodes[0].style.width = "100%";
                            document.querySelectorAll(".mobile_img")[m-1].childNodes[0].style.height = "auto";
                            document.querySelectorAll(".mobile_img")[m-1].style.margin = "10px 0.5%";
                            document.querySelectorAll(".mobile_img")[m-1].style.display = "inline-flex";
                        }
                    }
                    
                } else if(window.innerWidth < 720) {
                    if(m > 0 && document.querySelectorAll(".article_pics_mobile figure").length < document.querySelectorAll(".article_pics figure").length - 1) {
                        replaceImg(articleImgs[m]);
                        document.querySelectorAll(".mobile_img")[m-1].style.maxWidth = "100% !important";
                        document.querySelectorAll(".mobile_img")[m-1].style.height = "auto";
                        document.querySelectorAll(".mobile_img")[m-1].childNodes[0].style.width = "100% !important";
                        document.querySelectorAll(".mobile_img")[m-1].childNodes[0].style.height = "auto";
                        document.querySelectorAll(".mobile_img")[m-1].style.margin = "0 0 20px 0 !important";
                        document.querySelectorAll(".mobile_img")[m-1].style.display = "block";
                        
                    }
                }
                
            }
            function replaceImg(imgSrc) {
                let imgUrl = imgSrc.childNodes[1].src;
                let mobileImgWrap = document.createElement("figure");
                mobileImgWrap.className = "mobile_img";
                mobileImgWrap.style.width = "100%";
                mobileImgWrap.style.margin = "0 0 20px 0";
                document.querySelector(".article_pics_mobile").appendChild(mobileImgWrap);
                let mobileImg = document.createElement("img");
                mobileImg.src = imgUrl;
                mobileImg.style.width = "100%";
                mobileImgWrap.appendChild(mobileImg);
            }
        }
        let picControl = setInterval(organizePics, 200);
        organizePics();
        setTimeout(function() {
            organizePics();
        }, 300);
        
        window.addEventListener("resize", function() {
            setTimeout(function() {
                if(window.innerWidth > 1080) {
                    setTimeout(() => {
                        clearInterval(picControl);
                        organizePics();
                    }, 200);
                } else {
                    organizePics();
                }
            }, 300);
        });
    </script>

@endsection