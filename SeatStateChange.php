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

for($i=0;$i<strlen($data);$i++) { 
$str_cut[$i] = substr($data,$i,1); 
} 
//$data = explode('',$data);
print_r($str_cut);

echo "data=";
echo $str_cut[0];
echo "dataaa=";
for($i=0; $i<$result["row"]; $i++){
    for($j=0; $j<$result["col"]; $j++){
        //echo $data[$i*$result["row"]+ $j];
        if($data[$i*$result["row"]+ $j]=="1"){
            echo $data[$i*$result["row"]+ $j];
            echo "change!!";
            $data[$i*$result["row"]+ $j] = "2";
            echo $data[$i*$result["row"]+ $j];
        }else if($data[$i*$result["row"]+ $j]=="2"){
            echo $data[$i*$result["row"]+ $j];
            echo "change!!";
            $data[$i*$result["row"]+ $j] = "1";
            echo $data[$i*$result["row"]+ $j];
        }
        //echo $data[$i*$result["row"]+ $j];
    }
}
echo "SEatData=";

print_r($data);
$SeatData = implode($data);

echo $SeatData;
//UPDATE  `asap`.`PcSeatTable` SET  `PcRoomID` =  '2' WHERE  `PcSeatTable`.`ID` =1;
mysql_query("UPDATE PcSeatTable SET SeatData = $SeatData  WHERE ID = 1");
?>