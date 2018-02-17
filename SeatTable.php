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
<td  style="<?php 


if($data[$i*$result["row"] + $j]=="0"){
    echo "background: rgba(0, 0 ,0, 0)";
}else if($data[$i*$result["row"] + $j]=="1"){
    echo "background: rgba(100, 100, 100, 0.5);";
}else if($data[$i*$result["row"] + $j]=="2"){
    echo "background: rgba(100, 0, 100, 0.5);";
}else if($data[$i*$result["row"] + $j]=="3"){
    echo "background: rgba(0, 100, 100, 0.5);";
}

?>"><a href="http://203.250.148.50/SeatStateChange.php?row=<?php echo $i; ?>&col=<?php echo $j; ?>">
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

?></a>
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