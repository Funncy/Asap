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
<body>

<table>
<?php
for($i =0; $i<$result["row"]; $i++){
?>
<tr>
<?php
for($j=0; $j<$result["col"]; $j++){}
?>
<td>
<?php
echo $data[$i*row + $j];
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