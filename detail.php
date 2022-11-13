<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/">


    <link rel="stylesheet" href="assets/css/style.css?v=<?= time() ?>">

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Thế giới thời trang</title>
</head>

<body>

    <!-- Require navbar -->
    <?php require_once("./views/navbar.php") ?>


    <main id="main">

        <div class="detail-page container">

            <div class="detail-box">
                <div class="image-side">
                    <img
                        src="https://cdn.glitch.global/5b8e9f4f-bfa7-4608-9c7b-e6bb1b71921b/a0d93203-9458-4104-a8ca-0634a849134f.image.png">
                </div>

                <div class="details-side">
                    <div class="head-side">
                        <h1 class="product-name">Giày_nike trắng custom dấu thập tự, Giày thể thao nam êm chân phong
                            cách
                            thánh giá hàng Trung full box bill</h1>
                        <p class="price-box">Giá: <span class="price">250.000đ</span></p>

                        <p class="title-detail">Chi tiết sản phẩm:</p>
                        <ul class="list-detail">
                            <li class="item-detail"> Chất liệu: Vải len </li>
                            <li class="item-detail"> Chất liệu: Vải len </li>
                            <li class="item-detail"> Chất liệu: Vải len </li>
                            <li class="item-detail"> Chất liệu: Vải len </li>
                            <li class="item-detail"> Chất liệu: Vải len </li>
                            <li class="item-detail"> Chất liệu: Vải len </li>
                            <li class="item-detail"> Chất liệu: Vải len </li>
                            <li class="item-detail"> Chất liệu: Vải len </li>
                        </ul>
                    </div>
                    <div class="buttons">
                        <button class="btn-add-to-card">Thêm vào giỏ hàng</button>
                    </div>
                </div>

            </div>


            <div class="recommend-box">
                <!-- Panel box -->
                <div class="box-category">
                    <div class="header">
                        <h2 class="box-title">Co thể bạn quan tâm</h2>
                    </div>
                    <div class="body">

                        <?php for ($i = 0; $i < 5; $i++): ?>

                        <a href="detail.php" class="box-item">
                            <img src="https://cdn.glitch.global/5b8e9f4f-bfa7-4608-9c7b-e6bb1b71921b/a0d93203-9458-4104-a8ca-0634a849134f.image.png"
                                class="box-item-image">

                            <div class="box-item-detail">
                                <h3 class="item-name">Áo thể thao Nữ</h3>

                                <div class="star-box">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>

                                <div class="item-price">253.000 đ</div>
                            </div>
                        </a>
                        <?php endfor ?>


                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Require footer -->
    <?php require_once("./views/footer.php") ?>


    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="assets/js/script.js?v=<?= time() ?>"></script>
</body>

</html>