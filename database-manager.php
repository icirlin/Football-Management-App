<?php

$servername = "127.0.0.1";
$username = "icirlin";
$password = "";
$dbname = "FootballPlayers";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}

$result = mysqli_query($conn, "SHOW TABLE STATUS");

if (!$result){
    die("Query Failed");
}

echo mysqli_num_rows($result) or "ERROR";

$result_array = mysqli_fetch_array($result);

echo "\n";

var_dump($result_array);

//foreach ($result_array as $key => $field){
//    echo $key . " : " . $field . "\n";
//}

#mysql_select_db($dbname) or die(mysql_error());
#print "Connected successfully\n";

#$query = "SHOW TABLES";

#$result = mysql_query($conn, "SHOW TABLE STATUS") or die("Query fail: " . mysqli_error($conn));
?>