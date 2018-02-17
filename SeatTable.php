<?php


// include db connect class
require_once __DIR__ . '/db_connection.php';

//db connection
$db = new DB_CONNECT();

$result = mysql_query("SELECT * FROM PcSeatTable WHERE ID = 1");
$result = mysql_fetch_array($result);
$data = $result["SeatData"];

$data = str_split($data);



?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>

<table border="0"> 
<?php
for($i =0; $i<$result["row"]; $i++){
?>
<tr>
<?php
for($j=0; $j<$result["col"]; $j++){
?>
<td bgcolor="<?php 
if($data[$i*$result["row"] + $j]=="0"){
}else if($data[$i*$result["row"] + $j]=="1"){
    echo "#FFFFFF";
}else if($data[$i*$result["row"] + $j]=="2"){
    echo "#FFFF00";
}else if($data[$i*$result["row"] + $j]=="3"){
    echo "#FF00FF";
}

?>>
<?php
if($data[$i*$result["row"] + $j]=="0"){
    echo "   ";
}else if($data[$i*$result["row"] + $j]=="1"){
    echo "빈좌석";
}else if($data[$i*$result["row"] + $j]=="2"){
    echo "사용중";
}else if($data[$i*$result["row"] + $j]=="3"){
    echo "수리중";
}

?>
</td>

<?php
}
?>
</tr>
<?php
}
?>

</table>

</body>
</html>