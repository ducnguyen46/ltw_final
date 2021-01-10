<?php

require_once $_SERVER['DOCUMENT_ROOT'] .'/delivery/model/order.php';
$order = new Order();

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $receiverAddress = isset($_POST['address']) ? $_POST['address'] : '';
    $distance = isset($_POST['distance']) ? $_POST['distance'] : '';
    $weight = isset($_POST['weight']) ? $_POST['weight'] : '';
    $fee = isset($_POST['fee']) ? $_POST['fee'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';

    if($order->updateOrder($id, $receiverAddress, (double)$distance, (double)$weight, (double)$fee, $status)){
        echo('<script language="javascript">alert("Cập nhật thành công!"); window.location="./../admin.php";</script>');
    }
    else echo('<script language="javascript">alert("Cập nhật thất bại!"); window.location="./../admin.php";</script>');
} else echo 'nothing';

?>