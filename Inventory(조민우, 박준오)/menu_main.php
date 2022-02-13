<!-- skin/menu_main.php 시작 -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark px-3">
  <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" data-target="#navbars" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbars">
            <ul class="navbar-nav ml-md-auto">
                <!-- 상단 우측 로그인 링크 출력 -->
                <?php
                if (isset($_SESSION['uno'])) {
                    if ($_SESSION['level']==10) {
                        echo '<li class="nav-item"><a class="nav-link" href="' .USER_PATH. '/admin.php">관리자</a></li>' ;
                        echo '<li class="nav-item"><a class="nav-link" href="' .USER_PATH. '/logout.php">로그아웃</a></li>' ;
                    } else {
                        echo '<li class="nav-item"><a class="nav-link" href="' .USER_PATH. '/index.php">정보변경</a></li>' ;
                        echo '<li class="nav-item"><a class="nav-link" href="' .USER_PATH. '/logout.php">로그아웃</a></li>' ;
                    }
                } else {
                    echo '<li class="nav-item"><a class="nav-link" href="' .USER_PATH. '/login.php">로그인</a></li>' ;
                }
                ?>
                <!-- 상단 우측 회원가입 링크 출력 -->
                <?php
                    echo '<li class="nav-item"><a class="nav-link" href="' .USER_PATH. '/signup.php">회원가입</a></li>' ;
                ?>
           </ul>
  </div>
</nav>
<!-- skin/menu_main.php 끝 -->
