<?php session_start(); include("db/db_conn.php");

if (isset($_SESSION['id'])){
    $loginid=$_SESSION['id'];
   }



if (isset($_POST['table_arrival_departure_btn'])) {

    $blue_sky = $_POST['blue-sky'];
    $blue_sky_sec = $_POST['blue-sky-sec'];

    $selected = mysqli_insert_id($conn);
   
    $query = "UPDATE flight_users 
                SET 
                flightv1='$blue_sky', flightv2= '$blue_sky_sec'
                WHERE
                    users_id = $loginid
                ";

    


    $result = mysqli_query($conn,$query);

     
    if($result) {
        header("Location: payments.php");    
    }
}














?>