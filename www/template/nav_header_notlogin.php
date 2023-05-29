<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary " data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">嘉大鞋子</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">首頁</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product_all.php">商品瀏覽</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product_search.php">商品查詢</a>
                </li>
                <li class="nav-item  dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        使用者中心
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item disabled" href="edit_profile_photo_page.php">修改頭貼</a></li>
                        <li><a class="dropdown-item disabled" href="#">修改密碼</a></li>
                        <li><a class="dropdown-item disabled" href="#">刪除帳號</a></li>
                    </ul>
                </li>
            </ul>
            <span class="navbar-text">
                <?php
                if ($welcome_back) {
                    echo '歡迎回來! ';
                }
                ?>
                <a href="login_page.php" style="text-decoration:none;">登入</a>
            </span>
        </div>
    </div>
</nav>