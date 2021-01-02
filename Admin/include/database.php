
<?php

$servername = "localhost";
$Server_username = "u708877553_prafulla";
$password = "Abcd@1234";
$dbname = "u708877553_hostel";

$conn = new mysqli($servername,$Server_username,$password,$dbname);

if($conn->connect_error){
    die("con failed");
}
?>
