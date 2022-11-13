<?php session_start(); include("db/db_conn.php");

if (isset($_SESSION['id'])){
    $loginid=$_SESSION['id'];
   } 


if (isset($_POST['table_arrival_departure_btn'])) {

    $blue_sky = $_POST['blue-sky'];
    $blue_sky_time = $_POST['blue-sky-time'];
    $blue_sky_value = $_POST['blue-sky-cost'];


    $blue_sky_sec = $_POST['blue-sky-sec'];
    $blue_sky_sec_time = $_POST['blue-sky-sec-time'];
    $blue_sky_sec_value = $_POST['blue-sky-sec-value'];




    $selected = mysqli_insert_id($conn);
   
    $query = "UPDATE flight_users 
                SET 
                flightv1='$blue_sky',  flightv2='$blue_sky_sec',
                departure_time = '$blue_sky_time', departure_time_sec = '$blue_sky_time',
                departure_value_sec = '$blue_sky_sec_value', departure_cost= '$blue_sky_value'
                WHERE
                    users_id = '$loginid'
                    order by id DESC limit 1
                ";

    // $query = "INSERT INTO flight_users 
    //             (flightv1, flightv2, departure_time, departure_time_sec, departure_value_sec, departure_cost, users_id) 
    // VALUES ( '$blue_sky','$blue_sky_sec', '$blue_sky_time', '$blue_sky_time', '$blue_sky_sec_value','$blue_sky_value', '$loginid') ";

    


    $result = mysqli_query($conn,$query);

     
    if($result) {
        header("Location: payments.php");    
    }else {
       echo mysqli_error($conn);
       echo $id;
    }

}














?>