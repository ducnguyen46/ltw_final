<?php
include_once 'dao.php';

class User {
    private $db;
    function __construct()
    {
        $this->db = new DAO();
    }

    function getAllUserByEmailPassword($email, $password){
        $sql = "SELECT * FROM `user` WHERE email = '$email' AND password = '$password';";
        $result = $this->db->fetchAll($sql);
        return $result;
    }

    function getUserByID($id){
        $sql = "SELECT * FROM `user` WHERE id = $id";
        $result = $this->db->fetchAll($sql);
        return $result[0];
    }

    function login($email, $password){
        $sql = "SELECT * FROM `user` WHERE email = '$email' AND password = '$password';";
        $result = $this->db->numRows($sql);
        return ($result == 1) ? true : false;
    }

    function register($name, $email, $password, $address, $phoneNumber, $role){
        $sqlCheckEmail = "SELECT * FROM `user` WHERE email = '$email'; ";
        $result = $this->db->numRows($sqlCheckEmail);
        if($result > 0){
            return false;
        } else {
            $sqlInsert = "INSERT INTO `user` VALUES (0, '$name', '$email', '$password', '$address', '$phoneNumber', '$role');";
            $this->db->numRows($sqlInsert);
            return true;
        }
    }

    function changePassword($email, $oldPassword, $newPassword){
        $sqlCheckOldPass = "SELECT * FROM `user` WHERE email = '$email' AND password = '$oldPassword'; ";
        if($this->db->numRows($sqlCheckOldPass) == 1){
            $sqlChangePassword = "UPDATE `user` SET password = '$newPassword' WHERE email = '$email';";
            return $this->db->query($sqlChangePassword);
        }
        return false;
    }

    function changeInfo($email, $name, $address, $phoneNumber){
        $sql = "UPDATE `user` SET name = '$name', address = '$address', phoneNumber = '$phoneNumber' WHERE email = '$email';";
        return($this->db->query($sql));
    }

    function __destruct()
    {
        unset($this->db);
    }
}

?>