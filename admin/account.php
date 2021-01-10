<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <title>Trang quản lý admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./style/account.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <div class="wrapper">
        <div class="sidebar">
            <a href="./../index.php"><img src="../images/logo.png" width="150px"></a>
            <h5>Admin Page</h5>
            <ul>
                <li>
                    <a href="add.php"><i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i>
                        Thêm đơn hàng
                    </a>
                </li>
                <li>
                    <a href="admin.php"><i class="fa fa-bar-chart-o fa-fw" aria-hidden="true"></i>
                        Quản lý đơn hàng
                    </a>
                </li>
                <li>
                    <a href="account.php"><i class="fa fa-id-card fa-fw" aria-hidden="true"></i>
                        Tài khoản
                    </a>
                </li>
            </ul>
        </div>

        <div class="main-content">
            <div class="header-bar">
                <div class="user-account">
                    <!-- Gud day, <?php echo $_SESSION['name']; ?>! -->
                </div>
                <div class="btn-exit">
                    <a href="./php/handler-logout.php"><strong>Đăng xuất</strong>
                        <i class="fa fa-sign-out fa-lg" aria-hidden="true" style="margin-left: 10px;"></i>
                    </a>
                </div>
            </div>
            <div class="title">
                <p>
                    Tài khoản
                </p>
            </div>
            <!-- <div class="form-group">
                <label for="email">Email</label>
                <input style="border-radius: 20px;" type="email" class="form-control" name="email" id=""
                    aria-describedby="helpId" placeholder="your-mail@example.com" require>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input style="border-radius: 20px;" type="password" class="form-control" name="password" id=""
                    aria-describedby="helpId" placeholder="***********" require>
            </div> -->
            <div class="content">
                <?php 
                require_once $_SERVER['DOCUMENT_ROOT'].'/delivery/model/user.php';
                $user = new User(); 
                $userArr = $user->getUserByID($_SESSION['id']);
                ?>
                <form action="./php/handler-update-info.php" method="POST">
                    <div class="form-group">
                        <label for="name">Tên</label>
                        <input style="border-radius: 20px;" type="text" class="form-control" name="name" id=""
                            aria-describedby="helpId" value="<?php echo $userArr['name'] ?>" require>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input style="border-radius: 20px;" type="email" class="form-control" name="email" id=""
                            aria-describedby="helpId" value="<?php echo $userArr['email'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input style="border-radius: 20px;" type="text" class="form-control" name="address" id="address"
                            aria-describedby="helpId" value="<?php echo $userArr['address'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Số điện thoại</label>
                        <input style="border-radius: 20px;" type="text" class="form-control" name="phoneNumber"
                            id="phoneNumber" aria-describedby="helpId" value="<?php echo $userArr['phoneNumber'] ?>">
                    </div>
                    <button id="update-info" name="update-info" type="submit" class="btn-update">Cập nhật thông
                        tin</button>
                    <br>
                    <br>
                    <br>
                    <div class="title">
                        <p>
                            Cập nhật mật khẩu
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="old-password">Mật khẩu cũ</label>
                        <input style="border-radius: 20px;" type="password" class="form-control" name="old-password"
                            id="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="new-password">Mật khẩu mới</label>
                        <input style="border-radius: 20px;" type="password" class="form-control" name="new-password"
                            id="" aria-describedby="helpId">
                    </div>
                    <button id="update-password" name="update-password" type="submit" class="btn-update">Cập nhật mật
                        khẩu</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>