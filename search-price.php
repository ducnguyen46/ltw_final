<!doctype html>
<html lang="en">

<head>
    <title>Tra cứu giá cước</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="styles/search-price.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


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
                            <a class="nav-link" href="search-track.php"><strong>Tra cứu vận đơn</strong></a>
                        </li>

                        <li class="nav-item active">
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

                        <li class="nav-item">
                            <a class="nav-link" href="login.php"><strong>Đăng nhập</strong></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- navbar -->

        <div class="container">
            <div class="text-center" style="margin: 20px auto">
                <h3>BẢNG TRA CỨU GIÁ CƯỚC</h3>
            </div>
            <table class="table table-bordered table-inverse table-responsive-md text-center">
                <thead class="thead-inverse">
                    <tr class="text-center">
                        <th rowspan="2">Khối lượng (kg)</th>
                        <th colspan="4">Vùng trả hàng</th>
                    </tr>
                    <tr>
                        <th>Nội tỉnh</th>
                        <th>
                            < 100km</th>
                        <th>100 - 300km</th>
                        <th>> 300km</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">0.05</td>
                        <td>12 000</td>
                        <td>19 700</td>
                        <td>20 500</td>
                        <td>24 500</td>
                    </tr>
                    <tr>
                        <td scope="row">0.25</td>
                        <td>12 000</td>
                        <td>19 700</td>
                        <td>20 500</td>
                        <td>24 500</td>
                    </tr>
                    <tr>
                        <td scope="row">0.50</td>
                        <td>12 000</td>
                        <td>22 100</td>
                        <td>25 800</td>
                        <td>27 700</td>
                    </tr>

                    <tr>
                        <td scope="row">1.00</td>
                        <td>12 000</td>
                        <td>22 100</td>
                        <td>33 000</td>
                        <td>36 700</td>
                    </tr>
                    <tr>
                        <td scope="row">1.50</td>
                        <td>12 000</td>
                        <td>30 500</td>
                        <td>40 000</td>
                        <td>45 500</td>
                    </tr>
                    <tr>
                        <td scope="row">0.05</td>
                        <td>12 000</td>
                        <td>34 000</td>
                        <td>45 500</td>
                        <td>53 000</td>
                    </tr>
                    <tr>
                        <td scope="row">Mỗi 0.5kg tiếp theo</td>
                        <td>1 800</td>
                        <td>3 500</td>
                        <td>4 300</td>
                        <td>8 500</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <div class="calculate-price container"
                style="padding: 20px 10px 20px 10px; border-radius: 10px; border-width: 1px; border-color: lightgray; border-style: solid;">
                <h4>TÍNH GIÁ CƯỚC</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-weight">Khối lượng hàng (kg)</label>
                            <input type="number" class="form-control" name="input-weight" id="weight"
                                aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-distance">Khoảng cách (km)</label>
                            <input type="number" class="form-control" name="input-distance" id="distance"
                                aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn-get-price" type="button">Tính giá cước vận chuyển</button>
                </div>

            </div>

            <div class="container text-center"
                style="margin: 20px auto; padding: 10px 10px 10px 10px; border-radius: 10px; border-width: 1px; border-color: lightgray; border-style: solid;">
                <h6>THÔNG TIN CƯỚC VẬN CHUYỂN</h6>
                <h4 style="color: tomato;">TỔNG TIỀN: 0 VNĐ</h4>
            </div>

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