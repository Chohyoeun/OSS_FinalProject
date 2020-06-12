<?php
include_once ('config.php');
$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

extract($_POST);

echo $user_name. '<br />';
echo $user_id. '<br />';
echo $phonenumber. '<br />';

        session_start();
        $_SESSION['user'] = $user_name;

$q = "INSERT INTO info ( Name, Student_ID, Phone_Number ) VALUES ( '$user_name', '$user_id', '$phonenumber' )";

$mysqli->query( $q);

$mysqli->close($mysqli);
header("Location: http://192.168.137.196/reservation.php"); exit();
?>
