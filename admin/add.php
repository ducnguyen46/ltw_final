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
    <link rel="stylesheet" href="./style/edit-order.css">

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
            <img src="../images/logo.png" width="150px">
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
                    Gud day, <?php echo $_SESSION['name']; ?>!
                </div>
                <div class="btn-exit">
                    <a href="./php/handler-logout.php"><strong>Đăng xuất</strong>
                        <i class="fa fa-sign-out fa-lg" aria-hidden="true" style="margin-left: 10px;"></i>
                    </a>
                </div>
            </div>
            <div class="title">
                <p>
                    Thêm đơn hàng
                </p>
            </div>
            <div class="content">
                <form action="./php/handler-add.php" method="POST">
                    <div class="form-group">
                        <label for="idSender">ID người gửi</label>
                        <select class="form-control" name="idSender" id="idSender">
                            <?php
                            require_once $_SERVER['DOCUMENT_ROOT']. '/delivery/model/dao.php';
                            $db = new DAO();
                            $sql = "SELECT * FROM `user` WHERE role != 'admin';";
                            $result = $db->fetchAll($sql);
                            foreach($result as $row){
                                echo '<option>'.$row['id'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ:</label>
                        <input type="text" class="form-control" name="address" id="address">
                    </div>
                    <div class="form-group">
                        <label for="distance">Khoảng cách: km</label>
                        <input type="text" class="form-control" name="distance" id="distance">
                    </div>
                    <div class="form-group">
                        <label for="weight">Khối lượng: kg</label>
                        <input type="text" class="form-control" name="weight" id="weight">
                    </div>
                    <div class="form-group">
                        <label for="fee">Tiền vận chuyển: VND</label>
                        <input type="text" class="form-control" name="fee" id="fee">

                    </div>
                    <div class="form-group">
                        <label for="status">Trạng thái</label>
                        <select class="form-control" name="status" id="status">
                            <option>Đang lấy hàng</option>
                            <option>Đang giao hàng</option>
                            <option>Đã giao hàng</option>
                        </select>
                    </div>
                    <tr>
                        <button type="button" class="btn-cancle" onclick='window.location="./admin.php"'>Hủy</button>
                        <button id="add" name="add" type="submit" class="btn-update">Thêm đơn hàng</button>
                    </tr>
                </form>

            </div>
        </div>
    </div>

</body>

</html>