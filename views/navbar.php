<?php session_start(); ?>
<nav id="navbar">
    <div class="container">
        <div class="nav-side">
            <a href="/" class="item-navbar">
                Trang chủ
            </a>

            <div class="item-navbar">
                Danh mục sản phẩm
                <div class="sub-nav">
                    <a href="#" class="item-sub-nav">Nam</a>
                    <a href="#" class="item-sub-nav">Nữ</a>
                    <a href="#" class="item-sub-nav">Trẻ em</a>
                </div>
            </div>

            <a href="#" class="item-navbar">
                Giỏ hàng
            </a>

            <a href="#" class="item-navbar">
                Thông báo
            </a>


            <div class="item-navbar">
                Hỗ trợ
                <div class="sub-nav">
                    <a href="https://zalo.me/0969917720" class="item-sub-nav">
                        Zalo
                    </a>
                    <a href="https://www.facebook.com/haothuyhien.CO" class="item-sub-nav">
                        Facebook
                    </a>
                </div>
            </div>
        </div>

        <div class="auth-side">
            <?php if (isset($_SESSION['name'])): ?>
            <?= $_SESSION['name'] ?>
                <a href="logout.php" class="auth-side-item-navbar">
                    Đăng xuất
                </a>
                <?php else: ?>
                <a href="register.php" class="auth-side-item-navbar">
                    Đăng ký
                </a>
                <span>/</span>
                <a href="login.php" class="auth-side-item-navbar">
                    Đăng nhập
                </a>
                <?php endif ?>
        </div>
    </div>


</nav>

<?php print_r($_POST) ?>