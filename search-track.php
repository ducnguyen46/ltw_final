<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
    <title>Tra cứu vận đơn</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="styles/search-track.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
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
        <div class="nav-bar">
            <nav class="navbar navbar-expand-sm navbar-light bg-light nav-right sticky-top">
                <a class="navbar-brand" href="index.php">
                    <img class="navbar-logo" src="images/logo.png" alt="Logo Brand">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><strong>Giới thiệu</strong> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="search-track.php"><strong>Tra cứu vận đơn</strong></a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="search-price.php"><strong>Tra cứu giá cước</strong></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="newsId" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><strong>Thông tin</strong></a>
                            <div class="dropdown-menu" aria-labelledby="newsId">
                                <a class="dropdown-item" href="#">News</a>
                                <a class="dropdown-item" href="#">Blog - Tâm sự</a>
                            </div>
                        </li>

                        <?php
                        if(isset($_SESSION['name'])){ ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/php/handler-logout.php">Đăng
                                xuất khỏi <strong><?php echo $_SESSION['name']; ?></strong></a>
                        </li>
                        <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php"><strong>Đăng nhập</strong></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- navbar -->

        <!-- content -->

        <div class="container">
            <form action="search-track.php" method="GET">
                <div class="row form-group justify-content-center" style="margin-top: 30px;">

                    <div class="col-9 shadow" style="margin: 0 auto; border-radius: 10px;">
                        <textarea class="form-control" name="id-track" id="trackNumber" rows="3"
                            placeholder="Mã vận đơn" style="margin: 20px 0; border-radius: 10px;"></textarea>

                        <button type="submit" class="btn" name="search-track"
                            style="width: 100%; margin: 20px auto; font-weight: bold; background-color: deepskyblue; color: white; border-radius: 10px;">
                            Tra cứu vận đơn
                        </button>

                    </div>
                </div>
            </form>
        </div>

        <hr style="border: 1px solid deepskyblue; width: 30%; margin: 20px auto">

        <?php 
            require_once $_SERVER['DOCUMENT_ROOT'] .'/delivery/model/order.php';
             require_once $_SERVER['DOCUMENT_ROOT'] .'/delivery/model/user.php';
            $order = new Order();
            $user = new User();

            if(isset($_GET['search-track'])){
            $id=$_GET['id-track'];
            $orderArr = $order->getOrderByID($id);
            $idSender = $orderArr[0]['idSender'];
            $senderArr = $user->getUserByID($idSender); 
            }?>
        <div style="text-align: center; ">
            <p style="font-size: 20px; font-weight: 400; color: deepskyblue;">Mã vận đơn:
                <span
                    style="font-size: 20px; font-weight: 600; color: black;"><?php if(isset($_GET['id-track'])){ echo $id; }?>
                </span>
            </p>
        </div>

        <!-- bảng vận đơn -->
        <div class="container" style="margin-bottom: 50px;">
            <table class="table  table-inverse table-responsive-md table-hover" style="width: 100%;">
                <thead class="thead-inverse" style="color: white; background-color: deepskyblue;">
                    <tr>
                        <th>Người gửi</th>
                        <th>Thông tin người nhận</th>
                        <th>Tiền vận chuyển</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

                    if(isset($_GET['id-track'])){
                        foreach($orderArr as $row){
                        ?>
                    <tr>
                        <td scope="row"><?php echo $senderArr['address'] ?></td>
                        <td>
                            <?php echo $row['receiverAddress'] ?>
                        </td>
                        <td>
                            <?php echo $row['fee'] ?>
                        </td>
                        <td>
                            <?php echo $row['status'] ?>
                        </td>
                        <!--  -->
                    </tr>

                    <?php
                        }
                    }

                    ?>

                </tbody>
            </table>
        </div>

        <!-- footer -->
        <div class="page-footer mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-6 text-left">
                        <a class="navbar-brand" href="index.php">
                            <img src="images/logo.png" alt="delivery" width="250px">
                        </a>
                        <div class="company-name">
                            <p>
                                <strong>DELIVERY LOGISTIC COMPANY</strong>
                            </p>
                        </div>

                        <div class="info">
                            <div class="title">
                                Địa chỉ
                            </div>
                            <div class="detail">
                                Số nhà 22, đường 10, phường Cổ Thành, thành phố Chí Linh, tỉnh Hải Dương
                            </div>
                        </div>

                        <div class="info">
                            <div class="title">
                                Email
                            </div>
                            <div class="detail">
                                example@delivery.com
                            </div>
                        </div>

                        <div class="info">
                            <div class="title">
                                Số điện thoại
                            </div>
                            <div class="detail">
                                0961465453
                            </div>
                        </div>

                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/monikey.page">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-facebook fa-stack-1x"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://youtu.be/n6Pnzi6r9NU">
                                    <span class="fa fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-youtube-play fa-stack-1x"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/_cooms/">
                                    <span class="fa fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-instagram fa-stack-1x"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class="col-6">
                        <form class="input-group" style="margin-left: auto; margin-top: 20px; width: 100%;">
                            <input type="email" class="form-control" name="followUsEmail" id="followUsEmail"
                                placeholder="Your email">
                            <div id="btnFollow" class="input-group-append">
                                <button type="button" class="btn"
                                    style="color: white; background-color:deepskyblue;">Theo
                                    dõi</button>
                            </div>
                        </form>
                        <br>

                        <div class="fast-link">
                            <p style="font-size: 14px; font-weight: bolder;">
                                Liên kết nhanh</p>

                            <ul style="list-style-type: none;">
                                <li>
                                    <a class="link-footer" href="#">Giới thiệu</a>
                                </li>
                                <li>
                                    <a class="link-footer" href="search-track.php">Tra cứu vận đơn</a>
                                </li>
                                <li>
                                    <a class="link-footer" href="/search-price.php">Tra cứu giá cước</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-copyright text-center py-1" style="background-color: skyblue;">
                <p class="text-center py-1" style="font-size: 12px;">
                    Made by <strong>ducnguyen.46</strong> with <i class="fa fa-heart" aria-hidden="true"
                        style="color: red;"></i>
                </p>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- wrapper -->
</body>

</html>