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
@section ('nav_item')
    <li class="nav_item">
        <mark>.flat tables</mark>
        <a href="/list">
            평상들
        </a>
    </li>
    <li class="nav_item">
        <mark>.about us</mark>
        <a href="/about">
            평상으로부터
        </a>
    </li>
@endsection
@section ('content')
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
@endsection

