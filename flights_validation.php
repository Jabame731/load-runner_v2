<?php session_start(); include("db/db_conn.php");

if (isset($_SESSION['id'])){
    $loginid=$_SESSION['id'];
   }

if(isset($_POST['departure_arrival_btn'])) {
    
    $departure_city = $_POST['departures'];
    $departure_date = date('Y-m-d', strtotime($_POST['date_depart']));


    $arrival_city = $_POST['arrival'];
    $arrival_date = date('Y-m-d', strtotime($_POST['date_arrival']));

    $number_of_passengers = $_POST['number_of_pass'];
    // $ticket = $_POST['ticket'];

    $seating_preferences = $_POST['seating_preferences'];
    $type_of_seat = $_POST['type_of_seat'];


    // $query = "INSERT INTO `flight_one`(`departure_city`, `depature_date`, `arrival_city`, `arrival_date`, `number_of_passengers`, `seating_preferences`, `type_of_seat`) 
    //             VALUES ('$departure_city','$depature_date', '$arrival_city', '$arrival_date', '$number_of_passengers','$seating_preferences', '$type_of_seat)";
    // if($result) {
    //     header("Location: find-flight.php");
    // }


    $query = "INSERT INTO flight_users (departure_city, departure_date, arrival_city, arrival_date, number_of_passengers, seating_preferences, type_of_seat, users_id) 
    VALUES ( '$departure_city','$departure_date', '$arrival_city', '$arrival_date', '$number_of_passengers','$seating_preferences', '$type_of_seat', '$loginid') ";



    $result = mysqli_query($conn, $query);

    if($result) {
            header("Location: find-flight.php");
        }
    


    


} 



// if (isset($_POST['table_arrival_departure_btn'])) {

//     $blue_sky = $_POST['blue-sky'];
//     $blue_sky_sec = $_POST['blue-sky-sec'];
// }







    












?>