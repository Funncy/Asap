<?php
 
/*
 * Following code will create a new product row
 * All product details are read from HTTP Post Request
 */
 
    echo "hoi";

    $result = array();
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 

    // include db connect class
    require_once __DIR__ . '/db_connection.php';
 


    // connecting to db
    $db = new DB_CONNECT();
 echo "start1";

    echo $db;
       // echoing JSON response
       echo "start2";
    // mysql inserting a new row
//$result = mysql_query("INSERT INTO products(name, price, description) VALUES('$name', '$price', '$description')");
    $result = mysql_query("SELECT * FROM PcSeatTable WHERE ID = 1");
       // echoing JSON response
       echo "start3";
    if(empty($result)){
        echo "empty";
    }
   // echoing JSON response
   echo "start4";
    $SeatTable = array();
    $SeatTable["row"] = $result["row"];
    $SeatTable["col"] = $result["col"];
    $SeatTable["SeatData"] = $result["SeatData"];
   // echoing JSON response
   echo "start5";
    echo json_encode($SeatTable);


 
?>