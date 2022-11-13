<?php include("header/header.php"); ?>
<?php include("sidebars/sidebar-menu.php") ?>

<?php include_once('db/db_conn.php') ?>

<?php 

$query = "SELECT * FROM `flight_users` ORDER BY `flight_users`.`id` DESC";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);


$getTime = date_default_timezone_set ('Asia/Singapore');


$value1 = $row['departure_value_sec'];
$value2 = $row['departure_cost'];

$total_cost = $value1 + $value2;

$credit_number_amount = 50000;

$credit_balance = $credit_number_amount - $total_cost;

?>




<div class="bg-gray-300 w-[1300px] h-[648px] ml-[5px] text-color-all">
    <div class="ml-[50px] mt-[20px]">
        <div class="text-[40px] text-bold">
            <h1>Invoice</h1>
        </div>
        <div class="text-bold ml-[300px] mt-[10px]">
            <h1>Thank you for Booking through Web Tours</h1>
        </div>
        <div class=" mt-[50px] w-[1000px]">
            <div class="flex bg-blue-100 justify-between">
                <span class="ml-[200px]">
                    <?php echo $_SESSION['username'] ?>'s Flight Invoice
                </span>
                <span>
                    <?php
                        echo date("l") ." ". date("Y/m/d"). " " . date("H:i:s: a") ?>
                </span>
            </div>
            <div class="flex justify-between mt-[15px]">
                <span>Flight Reservartion Requests : </span>
                <span class="mr-[25px]">Cost</span>
            </div>
            <div class="flex justify-between mt-[15px]">
                <span>
                    1. A <?php echo $row['type_of_seat'] ?> ticket from <?php echo $row['departure_city'] ?> to 
                    <?php echo $row['arrival_date'] ?>
                </span>
                <span class="mr-[25px]">₱ <?php $total_cost ?></span>
            </div>

            <div class="ml-[60px] block p-[15px]">
                <div><i><?php echo $row['departure_date'] ?> : <?php echo $row['departure_time'] ?>: <?php echo $row['flightv1'] ?> leaves <?php echo $row['departure_city']?> for <?php echo $row['arrival_city'] ?>.</i></div>
                <div class="mt-[10px]"><i><?php echo $row['arrival_date'] ?> : <?php echo $row['departure_time_sec'] ?> : <?php echo $row['flightv2'] ?> leaves <?php echo $row['arrival_city'] ?> for <?php echo $row['departure_city']?>.</i></div>
            </div>

            <!------>
            <div class="flex justify-between mt-[50px]">
                <span>*</span><span class="ml-[10px]">Total Cost</span>
                <span class="bold-text mr-[25px]">₱ <?php $total_cost ?></span>
            </div>
            <div class="flex justify-between">
                <span>-</span><span class="ml-[10px]">Total Charged to Credit Card # <?php echo $row['credit_card_number'] ?></span>
                <span class="bold-text mr-[25px]">₱ <?php  $total_cost ?></span>
            </div>
            <div class="flex justify-between">
                <span>*</span><span class="ml-[10px]">Credit Account Balance</span>
                <span class="bold-text mr-[25px]">₱ <?php echo number_format($credit_balance) ?></span>
            </div>
        </div>
    </div>
        <div class="mt-[100px] ml-[690px]">
            <a href="flights.php">
                <button class="text-zinc-500 block uppercase mx-auto shadow bg-white hover:bg-gray-200 text-white text-xs py-3 px-10 rounded">Book Another</button>
            </a>
        </div>
</div>



<?php include("footer/footer.php"); ?>