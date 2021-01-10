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
    <link rel="stylesheet" href="./style/admin.css">

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
                    Quản lý đơn hàng
                </p>
            </div>
            <div class="content">
                <div class="table-content">
                    <table class="table">
                        <!--  table-striped table-inverse table-responsive -->
                        <thead>
                            <tr>
                                <th class="id">ID</th>
                                <th class="id-sender">ID người gửi</th>
                                <th class="address">Địa chỉ người nhận</th>
                                <th class="distance">Khoảng cách</th>
                                <th class="weight">Khối lượng</th>
                                <th class="fee">Tiền vận chuyển</th>
                                <th class="status">Trạng thái</th>
                                <th class="edit">Sửa</th>
                                <th class="delete">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                            include_once $_SERVER['DOCUMENT_ROOT'].'/delivery/model/order.php';
                            $order = new Order();
                            $orderArray = $order->fetchAll();
                            // $conn = new mysqli('localhost', 'root', '', 'delivery');
                            // $orderArray = array();
                            // $sql = "SELECT * FROM `order`;";
                            // $result = $conn->query($sql);
                            // while($_order = mysqli_fetch_array($result)){
                            //     $orderArray[] = $_order;
                            // }
                            
                            
                            foreach($orderArray as $row){
                                echo '<tr>';
                                echo '<td>'.$row['id'].'</td>';
                                echo '<td>'.$row['idSender'].'</td>';
                                echo '<td>'.$row['receiverAddress'].'</td>';
                                echo '<td>'.$row['distance']. 'km</td>';
                                echo '<td>'.$row['weight']. 'kg</td>';
                                echo '<td>'.$row['fee']. 'VND</td>';
                                echo '<td>'.$row['status'].'</td>';
                                echo '<td><a class="btn-edit" href="edit.php?id='.$row['id'].'">';
                                    echo '<span class="fa-stack fa-1x">
                                            <i class="fa fa-square fa-stack-2x"></i>
                                            <i class="fa fa-pencil fa-stack-1x" style="color: white;"></i></span></a></td>';
                                echo '<td><a class="btn-delete" href="delete.php?id='.$row['id'].'">';
                                    echo '<span class="fa-stack fa-1x">
                                            <i class="fa fa-square fa-stack-2x"></i>
                                            <i class="fa fa-trash fa-stack-1x" style="color: white;"></i>
                                        </span>
                                    </a>
                                </td>';
                                echo '</tr>';
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>