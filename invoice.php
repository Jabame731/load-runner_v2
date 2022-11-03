<?php include("header/header.php"); ?>
<?php include("sidebars/sidebar-menu.php") ?>

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
                <span class="ml-[200px]">JojoBean's Flight Invoice</span>
                <span>Wed Jul 16 10:41:34pm</span>
            </div>
            <div class="flex justify-between mt-[15px]">
                <span>Flight Reservartion Requests : </span>
                <span class="mr-[25px]">Cost</span>
            </div>
            <div class="flex justify-between mt-[15px]">
                <span>1. A Coach Class ticket from Seatlle to Sydney. </span>
                <span class="mr-[25px]">$1602</span>
            </div>

            <div class="ml-[60px] block p-[15px]">
                <div><i>07/17/2014 : 8am : Flight 780 leaves Seattle for Sydney.</i></div>
                <div class="mt-[10px]"><i>07/18/2014 : 8am : Flight 870 leaves Sydney for Seattle.</i></div>
            </div>

            <!------>
            <div class="flex justify-between mt-[50px]">
                <span>*</span><span class="ml-[10px]">Total Cost</span>
                <span class="bold-text mr-[25px]">$1602</span>
            </div>
            <div class="flex justify-between">
                <span>-</span><span class="ml-[10px]">Total Charged to Credit Card # 1234567890</span>
                <span class="bold-text mr-[25px]">$1602</span>
            </div>
            <div class="flex justify-between">
                <span>*</span><span class="ml-[10px]">Credit Account Balance</span>
                <span class="bold-text mr-[25px]">$0.00</span>
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