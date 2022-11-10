<?php session_start(); include("db/db_conn.php");


if (isset($_SESSION['id'])) {
    $loginId = $_SESSION['id'];
}



if (isset($_POST['payment_button_val'])) {

    $fName = $_POST['firstname'];
    $lName = $_POST['lastname'];
    $street_address = $_POST['street_address'];


    $city_zip = $_POST['city_zip'];
    $passenger_names = $_POST['passengernames'];

    $credit_card_number = $_POST['credit_card_number'];
    $credit_card_expr_date = date('Y-m-d', strtotime($_POST['date_expr']));
   
    $last_id = "SELECT LAST_INSERT_ID()";

    $query = "UPDATE flight_users
                SET
                firstname = '$fName', lastname = '$lName', 
                street_address = '$street_address', city_zip = '$city_zip' ,
                passenger_names = '$passenger_names', credit_card_number = '$credit_card_number',
                credit_card_expr_date = '$credit_card_expr_date'
                WHERE
                users_id = $loginId
                ";
    //  $query = "INSERT INTO flight_users (id,firstname, lastname, street_address, city_zip, passenger_names, credit_card_number, credit_card_expr_date) 
    //  VALUES ('$last_id', '$fName','$lName', '$street_address', '$city_zip', '$passenger_names','$credit_card_number', '$credit_card_expr_date') ";


    $result  = mysqli_query($conn, $query);


    if($result) {
        header("Location: invoice.php");
    } else {
        echo mysqli_error($conn);
    }


}




?>