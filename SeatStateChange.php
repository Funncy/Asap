<?php

// include db connect class
require_once __DIR__ . '/db_connection.php';

//db connection
$db = new DB_CONNECT();
$row = $_GET["row"];
$col = $_GET["col"];

echo $row;
echo " ";
echo $col;
echo " ";

$result = mysql_fetch_array($result);
$data = $result["SeatData"];

$data = str_split($data);

for($i=0; $i<$result["row"]; $i++){
    for($j=0; $j<$result["col"]; $j++){
        if($data[$i*$result["row"]+ $j]=="1"){
            $data[$i*$result["row"]+ $j] = "2";
        }else if($data[$i*$result["row"]+ $j]=="2"){
            $data[$i*$result["row"]+ $j] = "1";
        }
    }
}

$SeatData = implode("",$data);
echo $SeatData;


?>