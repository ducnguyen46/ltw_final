<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Trang chủ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="styles/index.css">

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
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><strong>Giới thiệu</strong> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="search-track.php"><strong>Tra cứu vận đơn</strong></a>
                        </li>

                        <li class="nav-item">
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
        <div class="slider">
            <div class="container-fluid text-center">
                <div id="slideWelcome" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slideWelcome" data-slide-to="0" class="active"></li>
                        <li data-target="#slideWelcome" data-slide-to="1"></li>
                        <li data-target="#slideWelcome" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="images/slide-chuyenhang.jpg" alt="First slide" width="100%" height="500px">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Tận tâm</h3>
                                <p>Gói ghém và cẩn thận với từng món hàng</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/slide-tauthuy.jpg" alt="Second slide" width="100%" height="500px">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Nhanh chóng</h3>
                                <p>Nhanh nhất có thể, chúng tôi luôn mong muốn bạn nhận được hàng sớm nhất</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/slide-khobai.jpg" alt="Third slide" width="100%" height="500px">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Kho bãi phủ sóng toàn quốc</h3>
                                <p>Phủ sóng tại 63 tỉnh, thành phố, chúng tôi mong muốn cung cấp dịch vụ tốt nhất</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slideWelcome" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slideWelcome" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="introduction">
            <div class="container">
                <div class="shadow">
                    <p>
                        <br>
                        Chúng tôi là công ty giao hàng siêu nhanh nhất vũ trụ. Chúng tôi cam kết giao hàng nhanh như ánh
                        sáng.
                        Ánh sáng gì thì tôi không biết. Nói chung là nhanh lắm luôn. Chúng tôi là công ty giao hàng siêu
                        nhanh
                        nhất vũ trụ. Chúng tôi cam kết giao hàng nhanh như ánh sáng. Ánh sáng gì thì tôi không biết. Nói
                        chung
                        là nhanh lắm luôn.
                        Chúng tôi là công ty giao hàng siêu nhanh nhất vũ trụ.
                        Chúng tôi cam kết giao hàng nhanh như ánh sáng.
                        Ánh sáng gì thì tôi không biết. Nói chung là nhanh lắm luôn.<?php echo $_SESSION['email'] ?>
                        <br>Với mức độ phủ sóng các nước Đông Nam Á, <strong
                            style="color: #9900ff; font-size: 20px; font-style:italic; font-weight: bold;">delivery</strong>
                        tự
                        hào đã và đang phát triển
                        để mang đến khách hàng sự trải nghiệm tốt nhất
                        <br><br>
                    </p>
                </div>
            </div>
        </div>

        <div class="flag-introducion container">
            <div class="row">
                <div class="col-3" style="text-align: center;">
                    <img id="flag-circle" class="rounded-circle" src="images/flag/vietnam-flag.png" alt="Vietnam"
                        width="100px">
                    <p style="margin: 10px;"><strong>Việt Nam</strong></p>
                </div>
                <div class="col-3" style="text-align: center;">
                    <img id="flag-circle" class="rounded-circle " src="images/flag/laos-flag.png" alt="Laos"
                        width="100px">
                    <p style="margin: 10px;"><strong>Lào</strong></p>
                </div>
                <div class="col-3" style="text-align: center;">
                    <img id="flag-circle" class="rounded-circle" src="images/flag/singapore-flag.png" alt="Singapore"
                        width="100px">
                    <p style="margin: 10px;"><strong>Singapo</strong></p>
                </div>
                <div class="col-3" style="text-align: center;">
                    <img id="flag-circle" class="rounded-circle" src="images/flag/japan-flag.png" alt="Japan"
                        width="100px">
                    <p style="margin: 10px;"><strong>Nhật Bản</strong></p>
                </div>
            </div>
        </div>

        <div class="card-introduction container-fluid">
            <div class="row" style="margin-bottom: 50px;">
                <div class="col-md" style="margin: 20px 10px;">
                    <div class="shadow" style="border-radius: 20px;">
                        <div class="card" style="border-radius: 20px;">
                            <img class="card-img-top" src="images/nhanhangtunguoigui.jpg" alt="" width="200px"
                                height="200px">
                            <div class="card-body">
                                <h5 class="card-title">Nhận hàng tận nơi từ người gửi</h5>
                                <p class="card-text">
                                    Nhận hàng tận nơi từ người gửi trong vòng 24h. Đảm bảo mọi đơn hàng
                                    của bạn luôn được thông suốt và vận chuyển đến người nhận nhanh nhất
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md" style="margin: 20px 10px;">
                    <div class="shadow" style="border-radius: 20px;">
                        <div class="card" style="border-radius: 20px;">
                            <img class="card-img-top" src="images/giaohangsieunhanh.jpg" alt="" width="200px"
                                height="200px">
                            <div class="card-body">
                                <h5 class="card-title">Giao hàng với tốc độ siêu tốc</h5>
                                <p class="card-text">Ngày 1, ngày 2, ngày 4, em có quên mất ngày nào không? Không phải
                                    chờ đợi
                                    đến ngày 2 với tốc độ giao hàng siêu nhanh trong 24 giờ với dịch vụ giao hàng
                                    của <strong>delivery</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md" style="margin: 20px 10px;">
                    <div class="shadow " style="border-radius: 20px;">
                        <div class="card" style="border-radius: 20px;">
                            <img class="card-img-top" src="images/giaohangtannoi.jpg" alt="" width="200px"
                                height="200px">
                            <div class="card-body">
                                <h5 class="card-title">Nhận hàng tận nơi với <strong>delivery</strong></h5>
                                <p class="card-text">
                                    Không chỉ nhanh nhất, còn là chính xác nhất. Với delivery, bạn không cần đi đâu cả
                                    chúng tôi sẽ giao hàng tận nơi với địa chỉ chính xác của bạn. Thật tiện nơi mà phải
                                    không?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md" style="margin: 20px 10px;">
                    <div class="shadow " style="border-radius: 20px;">
                        <div class="card" style="border-radius: 20px;">
                            <img class="card-img-top" src="images/khobaiphusong.jpg" alt="" width="200px"
                                height="200px">
                            <div class="card-body">
                                <h5 class="card-title">Kho hàng phủ sóng toàn quốc</h5>
                                <p class="card-text">Để đạt được điều đó, kho hàng của <strong>delivery</strong>
                                    phủ sóng tại 63 tỉnh, thành phố trên cả nước
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                <button type="button" class="btn" onclick='window.location.replace("login.php")'
                                    style="color: white; background-color:deepskyblue;">Theo dõi</button>
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

    </div>

</body>

</html>