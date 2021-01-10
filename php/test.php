<?php
$link = mysqli_connect("localhost", "root", "", "delivery");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT * FROM `user`";
$result = mysqli_query($link, $query);
$ar = array();
/* numeric array */
$row = mysqli_fetch_array($result);
// print_r($row);
// print_r($ar);


require_once $_SERVER['DOCUMENT_ROOT'].'/delivery/model/dao.php';
$dao = new DAO();
$array = $dao->fetchAll("SELECT * FROM `user`;");
print_r($array);
foreach($array as $att){
    echo $att['id'];
    echo '<br>';
}
// for($i = 0; $i < count($row); $i++){
//     echo $row[$i];
//     echo '<br>';
// }


?>