<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/delivery/model/order.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $order = new Order();
    if($order->deleteOrder($id)){
        echo('<script language="javascript">alert("Xóa đơn hành thành công!"); window.location="./admin.php";</script>');
    } else {
        echo('<script language="javascript">alert("Cập nhật thất bại!"); window.location="./admin.php";</script>');
    }
}

?>