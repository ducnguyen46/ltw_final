<?php
require_once $_SERVER['DOCUMENT_ROOT'] .'/delivery/model/user.php';
$user = new User();
if(isset($_POST['update-info'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phoneNumber = $_POST['phoneNumber'];

    echo $name . $address . $phoneNumber;

    if($user->changeInfo($email, $name, $address, $phoneNumber)){
        echo 'hi';
        echo('<script language="javascript">alert("Cập nhật thành công!"); window.location="./../admin.php";</script>');
    }
    else {
        echo 'hiiii';
        echo('<script language="javascript">alert("Cập nhật thất bại!");</script>');
    }
}else if(isset($_POST['update-password'])){
    $email = $_POST['email'];
    $old_password = $_POST['old-password'];
    $new_password = $_POST['new-password'];
    if($user->changePassword($email, $old_password, $new_password)){
        echo('<script language="javascript">alert("Đổi mật khẩu thành công!"); window.location="./../admin.php";</script>');
    } else {
        echo('<script language="javascript">alert("Cập nhật thất bại!");</script>');
    }
}

else {
    echo 'Loi';
}
?>