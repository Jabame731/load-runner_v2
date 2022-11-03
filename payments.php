<?php include("header/header.php"); ?>
<?php include("sidebars/sidebar-menu.php") ?>

<div class="bg-gray-300 w-[1300px] h-[648px] ml-[5px] mt-[5px]">
    <div class="ml-[50px] mt-[100px]">
        <div class="text-[50px]">
        <h1>Payment Details</h1>
        </div>
        <div class="p-5 gap-[50px] mt-4">
        <label class="text-lg">Firstname : </label>
        <input type="text" class="ml-2 p-1 rounded-md text-lg" />
        <label class="text-lg ml-[50px]">Lastname : </label>
        <input type="text" class="ml-2 p-1 rounded-md text-lg" />
        </div>
        <div class="gap-[50px]">
        <div>
            <label class="text-lg">Street Address: </label>
            <input type="text" class="ml-4 p-1 rounded-md text-lg" />
        </div>
        </div>

        <!------->
        <div class="flex p-5 gap-[50px]">
        <div>
            <label class="text-lg">City/State/Zip: </label>
            <input type="text" class="ml-4 p-1 rounded-md text-lg" />
        </div>
        </div>

        <!-------->
        <div class="flex gap-[50px]">
        <div>
            <label class="text-lg">Passenger Names: </label>
            <input
            type="text"
            class="ml-4 p-1 rounded-md text-lg w-[536px]"
            />
        </div>
        </div>
        <p class="mt-[50px] ml-[300px] text-zinc-300">
        Total for 1 ticket(s) is = $ 1602
        </p>
        <div class="flex gap-[50px] mt-[10px]">
        <div>
            <label class="text-lg">Credit Card number: </label>
            <input type="text" class="ml-4 p-1 rounded-md text-lg" />
        </div>
        <div>
            <label class="text-lg">Exp Date: </label>
            <input type="date" class="ml-4 p-1 rounded-md text-lg" />
        </div>
        </div>

        <div class="mt-[50px] flex justify-evenly items-center">
        
            <a href="invoice.php">
                <button
                    class="p-2 w-[100px] rounded-md bg-white"
                    onclick="showToast()"
                >
                    Continue
                </button>
            </a>
        </div>
    </div>
</div>


<?php include("footer/footer.php"); ?>