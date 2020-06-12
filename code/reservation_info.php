<?php
        include_once ('config.php');
        $mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
	if (mysqli_connect_error()) {
                exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
	}
	session_start();

	$room_number = $_SESSION['room_number'];
	$user = $_SESSION['user'];

	extract($_POST);

	echo $date. '<br />';
	echo $time. '<br />';
	
	$sql = "SELECT * FROM room WHERE Date='$date' AND RoomNumber='$room_number' AND Time='$time'";
	$result = $mysqli->query($sql);

	$qu = "INSERT INTO room ( User, RoomNumber, Date, Time ) VALUES ( '$user','$room_number', '$date', '$time' )";
	
	if($result->num_rows==1){
		header("Location: http://192.168.137.196/reservation_failed.php"); exit();
	}
	else{
		$mysqli->query( $qu);
		header("Location: http://192.168.137.196/reservation_done.php"); exit();             }  
?>
~            
