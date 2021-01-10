<!doctype html>
<html lang="en">

<head>
    <title>Đăng nhập</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="styles/login.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body style="background-color: bisque;">

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
                            <a class="nav-link" href="search-track.php"><strong>Tra cứu vận đơn</strong></a>
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

                        <li class="nav-item">
                            <a class="nav-link active" href="login.php"><strong>Đăng nhập</strong></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- navbar -->

        <div class="login-container">
            <div class="login-form container">
                <form method="POST" action="./php/handler_login.php">
                    <div class="text-center">
                        <h2>Đăng nhập</h2>
                    </div>

                    <div class="form-group" style=" width: 100%; ">
                        <label for="email">Email</label>
                        <input style="border-radius: 20px;" type="email" class="form-control" name="email" id=""
                            aria-describedby="helpId" placeholder="your-mail@example.com" require>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input style="border-radius: 20px;" type="password" class="form-control" name="password" id=""
                            aria-describedby="helpId" placeholder="***********" require>
                    </div>
                    <button id="btn-login" type="submit" name="login"
                        style="width: 50%; margin: 10px 25%; color: white;background-color: rgb(8, 175, 241); font-weight: 600; border-radius: 20px;">
                        Đăng nhập
                    </button>
                    <div class="register-here">
                        Chưa có tài khoản? <a class="register-page" href="register.php">Đăng kí</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- wrapper -->
</body>

</html>