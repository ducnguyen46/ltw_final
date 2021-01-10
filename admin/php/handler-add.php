<?php

require_once $_SERVER['DOCUMENT_ROOT'] .'/delivery/model/order.php';
$order = new Order();

if(isset($_POST['add'])){
    $idSender = isset($_POST['idSender']) ? $_POST['idSender'] : '';
    $receiverAddress = isset($_POST['address']) ? $_POST['address'] : '';
    $distance = isset($_POST['distance']) ? $_POST['distance'] : '';
    $weight = isset($_POST['weight']) ? $_POST['weight'] : '';
    $fee = isset($_POST['fee']) ? $_POST['fee'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';

    echo $idSender. "-" .$receiverAddress. "-" .$distance. "-" .$weight. "-" .$fee. "-" .$status;

    if($order->insertOrder((int)$idSender, $receiverAddress, (double)$distance, (double)$weight, (double)$fee, $status)){
        echo('<script language="javascript">alert("Thêm thành công!"); window.location="./../admin.php";</script>');
    }
    else echo('<script language="javascript">alert("Thêm thất bại!")";</script>');
} else echo 'nothing';

?>