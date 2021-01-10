<?php
include_once 'dao.php';

class Order {
    private $db;
    function __construct()
    {
        $this->db = new DAO();
    }

    function fetchAll(){       
        $sql = "SELECT * FROM `order`;";
        $result = $this->db->fetchAll($sql);
        return $result;
    }
    function getOrderByID($id){       
        $sql = "SELECT * FROM `order` WHERE id = $id;";
        $result = $this->db->fetchAll($sql);
        return $result;
    }

    function updateOrder($id, $address, $distance, $weight, $fee, $status){
        $sql = "UPDATE `order` SET ";
        $sql .= "`receiverAddress` = '$address', ";
        $sql .= "distance = '$distance', ";
        $sql .= "weight = $weight, ";
        $sql .= "fee = $fee, ";
        $sql .= "status = '$status' WHERE `order`.`id` = $id;";

        if($this->db->query($sql)){
            return true;
        }
        return false;
    }

    function insertOrder($idSender, $address, $distance, $weight, $fee, $status){
        $sql = "INSERT INTO `order` VALUES (0, '$idSender', '$address', '$distance', '$weight', '$fee', '$status')";
        $id = $this->db->insert($sql);
        if($id > 0){
            return true;
        }
        return false;
    }

    function deleteOrder($id){
        $sql = "DELETE FROM `order` WHERE `order`.`id` = $id";
        if($this->db->query($sql)){
            return true;
        }
        return false;

    }

    function __destruct()
    {
        unset($this->db);
    }
}

?>