<?php session_start(); include("db/db_conn.php"); ?>


<?php 

if(isset($_POST['departures']) && isset($_POST['date_depart']) && 
   isset($_POST['arrival']) && isset($_POST['date_arrival']) && isset($_POST['number_of_pass']) && 
   isset($_POST['seating_preferences']) && isset($_POST['type_of_seat']) && isset($_POST['blue-sky']) &&
   isset($_POST['blue-sky-sec']) && isset($_POST['firstname']) && isset($_POST['lastname']) &&
   isset($_POST['street_address']) && isset($_POST['city_zip']) && isset($_POST['passengernames']) && isset($_POST['credit_card_number']) &&
   isset($_POST['date_expr'])) {

   $departures = $_POST['departures'];
   $date_depart = $_POST['date_depart'];
   $arrival = $_POST['arrival'];
   $date_arrival = $_POST['date_arrival'];
   $number_of_pass = $_POST['number_of_pass'];
   $seating_preferences = $_POST['seating_preferences'];
   $type_of_seat = $_POST['type_of_seat'];
   $blue_sky = $_POST['blue_sky'];
   $blue_sky_sec = $_POST['blue_sky_sec'];
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $street_address = $_POST['street_address'];
   $city_zip = $_POST['city_zip'];
   $passenger_names = $_POST['passengernames'];
   $credit_card_number = $_POST['credit_card_number'];
   $date_expr = $_POST['date_expr'];


   if(empty($departures)) {
    header("location: flights.php?error=Required");
    exit();
   } elseif(empty($date_depart)) {
    header("location: flights.php?error=Required");
    exit();
   } elseif(empty($arrival)) {
    header("location: flights.php?error=Required");
    exit();
   } elseif(empty($date_arrival)) {
    header("location flights.php?error=Required");
    exit();
   } elseif(empty($number_of_pass)) {
    header("location: flights.php?error=Required");
    exit();
   } elseif(empty($seating_preferences)) {
    header("location: flights.php?error=Required");
    exit();
   } elseif(empty($type_of_seat)) {
    header("location: flights.php?error=Required");
    exit();
   } elseif(empty($blue_sky)) {
    header("location: find-flight.php?error=Required");
    exit();
   } elseif(empty($blue_sky_sec)) {
    header("location: find-flight.php?error=Required");
    exit();
   } elseif(empty($firstname)) {
    header("location: payments.php?error=Required");
    exit();
   } elseif(empty($lastname)) {
    header("location: payments.php?error=Required");
    exit();
   } elseif(empty($street_address)) {
    header("location: payments.php?error=Required");
    exit();
   } elseif(empty($city_zip)) {
    header("location: payments.php?error=Required");
    exit();
   } elseif(empty($passenger_names)) {
    header("location: payments.php?error=Required");
    exit();
   } elseif(empty($credit_card_number)) {
    header("location: payments.php?error=Required");
    exit();
   } elseif(empty($date_expr)) {
    header("location: payments.php?error=Required");
    exit();
   } else {
        $flightSQL = "SELECT * FROM flight_users WHERE 
        departure = '$departures' AND daparture_date = '$date_depart' AND
        arrival = '$arrival' AND return_date = '$date_arrival' AND
        no_of_passengers = '$number_of_pass' AND seating_preferences = '$seating_preferences' AND
        type_of_seat = '$type_of_seat' AND blue_sky = '$blue_sky' AND blue_sky_sec = '$blue_sky_sec' AND
        firstname = '$firstname' AND lastname = '$lastname' AND street_address = '$street_address' AND
        city_zip = '$city_zip' AND passenger_names = '$passenger_names' AND credit_card_number = '$credit_card_number' AND
        credit_card_expr_date = '$date_expr'";

        $result = mysqli_query($conn, $flightSQL);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            // if($row['departure'] === $departures && $row['departure_date'] === $date_depart && $row['arrival'] === $arrival && $row['return_date'] === $date_arrival && $row['no_of_passengers'] === $number_of_pass 
            //     && $row['seating_preferences'] === $seating_preferences && $row['type_of_seat'] === $type_of_seat && $row['blue_sky'] === $blue_sky &&
            //     $row['blue_sky_sec'] === $blue_sky_sec &&  
            //    )
        }
   }
    
}else {
    header("location: flights.php?error ");
    exit();
}






























?>