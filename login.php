<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8f4ddd016f.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/style.js"></script>

    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <title>Login</title>
</head>
<body>
    <div class="all">
        <div class="login-main">
            <div class="header-logo">
                <a href="http://localhost/myshop/index.php">
                    <img src="img/Logo.png">
                </a>
            </div>
            <div class="login-content">
                <div class="login-left">
                    <img src="img/login-banner.PNG">
                </div>
                <div class="login-right">
                    <div class="login-form">
                        <div class="login-form-header">
                            <div class="login-form-header-header">MYSHOP - ĐĂNG NHẬP</div>
                            <div class="login-form-header-title">
      Xin chào, vui lòng nhập thông tin đăng nhập
      </div>
                    </div>
                        <form method="post">
                            <div class="account-control">
                                <input type="text" class="account-control-input"  name = "name" autocapitalize="none" autofocus="" placeholder="Tên đăng nhập" data-val="true" data-val-required="Vui lòng nhập thông tin Tên đăng nhập." id="username" name="username" value="">
                            </div>
                            <div class="account-control">
                                <input type="password" class="account-control-input" name = "pass" placeholder="Mật khẩu" autocomplete="off" data-val="true" data-val-required="Vui lòng nhập thông tin Mật khẩu." id="Password" name="Password">
                            </div>
                            <div class="account-control-submit">
                                <button type="submit" id="btn-submit-login" class="account-control-button" name="submit" value="login">Đăng nhập</button>
                            </div>
                        </form>
                        <?php
                            include 'api_login.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>