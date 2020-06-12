<html>
<head>
        <title>Cornerstone Hall Classroom Reservation Service</title>
        <meta charset="utf-8" >

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');

h1{font-family: 'Raleway', sans-serif;
color:black;
text-align: center;
font-size:250%;
margin-top:100px;
}

form {font-family: 'Roboto Condensed', sans-serif;
margin-top:70px;
margin-left:160px;
margin-bottom:100px;
font-size:130%;
}
</style>
    </head>
    <body>
<?php
        session_start();
        $_SESSION['room_number'] = '205';
	?>
        <h1>205 Library</h1><br />
        <img src="https://github.com/Chohyoeun/OSS_FinalProject/blob/master/imgsrc/classroom205.jpg?raw=true" width="1200" style="margin-left: auto; margin-right: auto; margin-top: 30px; display: block;" class=static">
	 <form autocomplete="off" name="reservation_form" method="post" action="./reservation_info.php">
        
	- Reservation Date : <input type="text" name="date" />
	<p style = "color:darkgray; margin-left: 10px; font-size: 70%;">Please Enter Year-Month-Day(ex.2020-06-12)</p><br />
        - Reservation Time : <input type="text" name="time" />
        <p style = "color:darkgray; margin-left: 10px; font-size: 70%;">Please Enter Start Time(ex.18:00)<br />You can make a reservation for 1 hour from the start time.<br />Reservation is available from 18:00 to 6:00 on the next day.(Last Reservation Time: 5:00)</p><br />
        <input type="submit" value="Reservation" />
    </body>
</html>
