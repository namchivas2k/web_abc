<?php
$msg = "";

if (isset($_POST['username'])) {

    require_once("./Database.php");

    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";


    if (empty($username) || empty($password)) {
        $msg = "Vui lòng nhập đủ thông tin";
    } else {


        $user = [];
        $data = Database::getInstance()->exec("SELECT * FROM `user` WHERE `username`='$username' LIMIT 1");
        if (Database::getInstance()->num_rows($data) > 0) {
            while ($row = $data->fetch_object()) {
                array_push($user, $row);
            }
        }

        if ($user != null) {
            $user = $user[0];
            if (password_verify($password, $user->password)) {
                session_start();
                $_SESSION['userid'] = $user->id;
                $_SESSION['username'] = $user->username;
                $_SESSION['name'] = $user->name;
                header('location: /'); //redirect to home page
            } else {
                $msg = "Thông tin đăng nhập không chính xác";
            }
        } else {
            $msg = "Thông tin đăng nhập không chính xác";
        }


    }

}

?>

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

    <title>Đăng nhập</title>
</head>

<body>

    <!-- Require navbar -->
    <?php require_once("./views/navbar.php") ?>


    <main id="main">

        <div class="register-page container">
            <form id="login-form" class="auth-dialog" method="post">
                <h1 class="title">Đăng nhập</h1>

                <div class="body">

                    <div class="box-input">
                        <label>Tên đăng nhập</label>
                        <input name="username" type="text" placeholder="Tên đăng nhập" autocomplete="off">
                    </div>

                    <div class="box-input">
                        <label>Mật khẩu</label>
                        <input name="password" type="password" placeholder="Mật khẩu" autocomplete="off">
                    </div>

                    <span class="msg">
                        <?= $msg ?>
                    </span>

                </div>



                <div class="buttons">
                    <button type="submit" class="btn">Đăng nhập</button>
                    <button type="reset" class="btn btn-cancel"><a href="/">Huỷ</a></button>
                </div>

            </form>
        </div>
    </main>


    <!-- Require footer -->
    <?php require_once("./views/footer.php") ?>


    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="assets/js/script.js?v=<?= time() ?>"></script>
</body>

</html>