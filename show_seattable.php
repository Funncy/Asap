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

    //echo $db;
       // echoing JSON response
    // mysql inserting a new row
//$result = mysql_query("INSERT INTO products(name, price, description) VALUES('$name', '$price', '$description')");
    $result = mysql_query("SELECT * FROM PcSeatTable WHERE ID = 1");
       
    if(empty($result)){
        echo "empty";
    }

    $result = mysql_fetch_array($result);

    $SeatTable = array();
    $SeatTable["ID"] = $result["ID"];
    $SeatTable["PcRoomID"] = $result["PcRoomID"];
    $SeatTable["row"] = $result["row"];
    $SeatTable["col"] = $result["col"];
    $SeatTable["SeatData"] = $result["SeatData"];
  
    echo json_encode($SeatTable);


 
?>