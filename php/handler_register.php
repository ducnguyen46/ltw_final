<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/delivery/model/user.php';

if(isset($_POST['register'])){
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $phoneNumber = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '';
    $role = isset($_POST['role']) ? $_POST['role'] : '';

    $user = new User();
    if($user->register($name, $email, $password, $address, $phoneNumber, $role) == false){
        printf('<script language="javascript">alert("Bị trùng email!"); </script>');        
    }
    else {
        printf('<script language="javascript">alert("Đăng ký thành công!"); window.location="./../login.php";</script>');
    }
}
?>