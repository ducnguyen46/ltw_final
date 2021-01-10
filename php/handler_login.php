<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/delivery/model/user.php';

if(isset($_POST['login'])){
    $user = new User();
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // if($user->login($email, $password)){
    //     echo('<script language="javascript">alert("Đăng nhập thành công!"); window.location="./../index.php";</script>');
    // } else {
    //     echo '<scritp language="javascript">alert("Sai thông tin đăng nhập!");</scritp>';
    // }
    $arUser = $user->getAllUserByEmailPassword($email, $password);
    if(count($arUser) > 0 && strcmp('admin', $arUser[0]['role']) == 0){
        $_SESSION['id'] = $arUser[0]['id'];
        $_SESSION['name'] = $arUser[0]['name'];
        $_SESSION['email'] = $arUser[0]['email'];
        $_SESSION['role'] = $arUser[0]['role'];
        echo('<script language="javascript">alert("Đăng nhập thành công!"); window.location="./../admin/admin.php";</script>');
    } else if(count($arUser) > 0 && strcmp('admin', $arUser[0]['role']) != 0){
        $_SESSION['id'] = $arUser[0]['id'];
        $_SESSION['name'] = $arUser[0]['name'];
        $_SESSION['email'] = $arUser[0]['email'];
        $_SESSION['role'] = $arUser[0]['role'];
        echo('<script language="javascript">alert("Đăng nhập thành công!"); window.location="./../index.php";</script>');
    } else {
        echo '<scritp language="javascript">alert("Sai thông tin đăng nhập!");</scritp>';
    }
}
?>