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

$result = mysql_query("SELECT * FROM PcSeatTable WHERE ID = 1");
$result = mysql_fetch_array($result);
$data = $result["SeatData"];

$data = str_split($data);
print_r($data);


        if($data[$row*$result["row"]+ $col]=="1"){
            $data[$rowi*$result["row"]+ $col] = "2";
        }else if($data[$rowi*$result["row"]+ $col]=="2"){
            $data[$row*$result["row"]+ $col] = "1";
        }

echo "SEatData=";

print_r($data);
$SeatData = implode($data);

echo $SeatData;
//UPDATE  `asap`.`PcSeatTable` SET  `PcRoomID` =  '2' WHERE  `PcSeatTable`.`ID` =1;
mysql_query("UPDATE PcSeatTable SET SeatData = $SeatData  WHERE ID = 1");
echo("<script>location.href='SeatTable.php/';</script>");

?>