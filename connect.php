
<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='test';

$conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($conn->connect_error){
    die('Connection Failed:'. $conn->connect_error);
}

?>