<?php
class DAO {
    private $conn;
    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'delivery');
        if(mysqli_connect_errno()){
            printf('Connection false: ' + mysqli_connect_error() + '\n');
            exit();
        }
    }

    function query($sql){
        return $this->conn->query($sql);
    }

    function insert($sql){
        $this->query($sql);
        $id = $this->conn->insert_id;
        return $id;
    }

    function fetchAll($sql){
        $ar = array();
        $result = $this->query($sql);
        while($row = $result->fetch_array()){
            $ar[] = $row;
        }
        $result->free();
        return $ar;
    }

    function delete($sql){
        return $this->conn->query($sql);
    }

    function numRows($sql){
        $result = $this->query($sql);
        return $result->num_rows;
    }

    function __destruct()
    {
        mysqli_close($this->conn);
    }
}
?>