@extends ('layout')


@section ('head')
<link rel="stylesheet" href="/css/admin.css?after" type="text/css" media="all" />
@endsection

@section ('intro')
    <div class="title header-margin">
        <div class="box actions">
            <a class="menu x">
                <span class="line top"></span>
                <span class="line middle"></span>
                <span class="line bottom"></span>
            </a>
        </div>
        <div class="box links home-btn">
            <a href="/admin">
                평상도록
            </a>
        </div>
        <div class="box actions login_link">
            <a class="menu login" href="/admin_login">
                LogIn
            </a>
        </div>
    </div>
@endsection

@section ('content')

    
        <!-- 평상 리스트 -->
    <section class="front_main">
        <div class="main">
            <div class="container group">
                <header class="container_header">
                    <div class="spacer login_spacer"></div>
                    <img src="/img/flat_table_icon.svg" alt="flat_table_icon">
                    <h1>로그인</h1>
                </header>
                
                <div class="container_login">
                    <form class='login_form' method='post' action='admin_login_action.php'>
                        <p>ID: <input class="login_input" name="username" type="text" required></p>
                        <p>PW: <input class="login_input" name="password" type="password" required></p>
                        <button class="login_btn" type="submit" value="로그인">
                            <p class="gg-batang">
                                로그인
                            </p>
                        </button>
                        <button id="join" class="login_btn" onclick="location.href='./admin_create_user'">
                            <p class="gg-batang">
                                회원가입
                            </p>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        function scrollDown() {
            let downBtn = document.querySelector(".down_btn");
            let pageHeight = window.innerHeight;
            downBtn.addEventListener("click", function() {
                window.scrollBy(0, pageHeight);
            });
        }
        scrollDown();

        function opacityByScroll() {
            let scrollPosition = window.pageYOffset;
            let pageHeight = window.innerHeight;
            let slideImg = document.querySelector(".intro_slide_img");
            slideImg.style.opacity = 1 - scrollPosition/pageHeight;
        }
        window.onscroll = function() {
            opacityByScroll();
        };

        function setIntroImg() {
            let introSlide = document.querySelector(".intro_slide_img");
            let slideImgSrc = document.querySelectorAll(".slide_img_src");
            let prevBtn = document.querySelector(".prev_btn");
            let nextBtn = document.querySelector(".next_btn");
            let introTitleHeader = document.querySelector(".intro_slide_title");
            let introTitle = document.querySelector(".slide_title a");

            prevBtn.classList.add(slideImgSrc.length-1);
            nextBtn.classList.add("1");

            for(let i = 0; i < slideImgSrc.length; i++) {
                slideImgSrc[i].classList.add(i);
            }

            introSlide.style.backgroundImage = "url('"+slideImgSrc[0].src+"')";
            // setTimeout(() => {
            //     showIntroTitle(slideImgSrc[0]);
                
            // }, 800);
            setTimeout(function() {
                showIntroTitle(slideImgSrc[0]);
            }, 600);

            prevBtn.onclick = function() {
                showPrevImg(prevBtn.classList.item(2));
            }
            nextBtn.onclick = function() {
                showNextImg(nextBtn.classList.item(2));
            }
            setInterval(function() {
                setTimeout(function() {
                    showNextImg(nextBtn.classList.item(2));
                }, 600);
            }, 20000);

            function showNextImg(srcNumber) {
                let nextImg = document.querySelector(".slide_img_src."+CSS.escape(srcNumber));
                hideIntroTitle();
                
                introSlide.style.backgroundImage = "url('"+nextImg.src+"')";
                prevBtn.classList.remove(prevBtn.classList.item(2));
                nextBtn.classList.remove(nextBtn.classList.item(2));

                if(srcNumber > 0 && srcNumber < slideImgSrc.length -1) {
                    prevBtn.classList.add(parseInt(srcNumber)-1);
                    nextBtn.classList.add(parseInt(srcNumber)+1);
                } else if(srcNumber == "0") {
                    prevBtn.classList.add(slideImgSrc.length-1);
                    nextBtn.classList.add(parseInt(srcNumber)+1);
                } else if(srcNumber == slideImgSrc.length -1) {
                    prevBtn.classList.add(parseInt(srcNumber)-1);
                    nextBtn.classList.add("0");
                }
                // setTimeout(() => {
                //     showIntroTitle(nextImg);
                // }, 800);
                setTimeout(function() {
                    showIntroTitle(nextImg);
                }, 600);
            }
            function showPrevImg(srcNumber) {
                let prevImg = document.querySelector(".slide_img_src."+CSS.escape(srcNumber));
                hideIntroTitle();
                
                introSlide.style.backgroundImage = "url('"+prevImg.src+"')";

                prevBtn.classList.remove(prevBtn.classList.item(2));
                nextBtn.classList.remove(nextBtn.classList.item(2));
                if(srcNumber > 0 && srcNumber < slideImgSrc.length -1) {
                    prevBtn.classList.add(parseInt(srcNumber)-1);
                    nextBtn.classList.add(parseInt(srcNumber)+1);
                } else if(srcNumber == "0") {
                    prevBtn.classList.add(slideImgSrc.length-1);
                    nextBtn.classList.add(parseInt(srcNumber)+1);
                } else if(srcNumber == slideImgSrc.length -1) {
                    prevBtn.classList.add(parseInt(srcNumber)-1);
                    nextBtn.classList.add("0");
                }
                // setTimeout(() => {
                //     showIntroTitle(prevImg);
                // }, 800);
                setTimeout(function() {
                    showIntroTitle(prevImg);
                }, 600);

            }
            

            function showIntroTitle(imgSrc) {
                introTitleHeader.classList.add("active");
                introTitle.innerHTML = imgSrc.title;
            }
            function hideIntroTitle() {
                introTitleHeader.classList.remove("active");
            }


        }
        setIntroImg();

        


    </script>
@endsection

