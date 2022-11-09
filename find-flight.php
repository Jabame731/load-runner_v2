<?php include("header/header.php"); ?>
<?php include("sidebars/sidebar-menu.php"); ?>

<?php include_once('db/db_conn.php') ?>

<?php 

// if (isset($_SESSION['id'])){
//     $current=$_SESSION['id'];
//    }


$query = "SELECT * FROM `flight_users` ORDER BY `flight_users`.`id` DESC";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result)


?>

 <!-- Flight Content -->
    <div class="ml-[5px] bg-gray-300 w-[1400px]">
        <div class="ml-[100px] mt-[20px]">
            <div class="text-[50px] text-color-all">
                <h1>Find Flight</h1>
            </div>
            <form action="find_flights_val.php" method="post">
            <div class="mt-[10px] ">
                <h2 class="text-xl tracking-wider">Flight departing from 
                    <span class="font-bold"><?php echo $row['departure_city'] ?></span> to 
                    <span class="font-bold"><?php echo $row['arrival_city']?></span> on 
                    <span class="font-bold"><?php echo $row['departure_date'] ?></span>
                </h2>
            </div>
            <div class="w-[1000px] items-center mt-[10px]">
                <div class=" w-full">
                    <div class="shadow overflow-hidden rounded border-b border-gray-200">
                        
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm ">Flight</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Departure</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Cost</th>                            
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <div>
                                            <label><input type="radio" value="Blue_Sky_Air_800" name="blue-sky" id="blue-sky-780">  Blue Sky Air 780</label>
                                        </div>
                                    </td>
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <div>
                                            <!-- <label for="blue-sky-780">8am</label> -->
                                            <input type="hidden" name="blue-sky" value="8am">8am
                                        </div>
                                    </td>
                                    <td class="text-left py-3 px-4">
                                        <div>
                                            <!-- <label for="blue-sky-780">$ 801</label> -->
                                            <input type="hidden" name="blue-sky" value="801">$ 801
                                        </div>
                                    </td>
                                  
                                </tr>
                                <tr class="bg-gray-100">
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <div>
                                            <label><input type="radio" name="blue-sky" value="Blue_Sky_Air_781" id="blue-sky-781">  Blue Sky Air 781</label>
                                        </div>
                                    </td>
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <div>
                                            <!-- <label for="blue-sky-781">1pm</label> -->
                                            <input type="hidden" name="blue-sky" value="1pm">1pm
                                            
                                        </div>
                                    </td>
                                    <td class="text-left py-3 px-4">
                                        <div>
                                            <!-- <label for="blue-sky-781">$ 714</label> -->
                                            <input type="hidden" name="blue-sky" value="714">$ 714
                                        </div>
                                    </td>                             
                                </tr>
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <div>
                                            <label><input type="radio" name="blue-sky" id="blue-sky-782" value="Blue_Sky_Air_782">  Blue Sky Air 782</label>
                                        </div>
                                    </td>
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <div>
                                            <!-- <label for="blue-sky-782">5pm</label> -->
                                            <input type="hidden" name="blue-sky" value="5pm">5pm
                                        </div>
                                    </td>
                                    <td class="text-left py-3 px-4">
                                        <div>
                                            <!-- <label for="blue-sky-782">$ 758</label> -->
                                            <input type="hidden" name="blue-sky" value="758">$ 758 
                                        </div>
                                    </td>                                   
                                </tr>
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <div>
                                            <label><input type="radio" name="blue-sky" id="blue-sky-783" value="Blue_Sky_Air_783">  Blue Sky Air 783</label>
                                        </div>
                                    </td>
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <div>
                                            <!-- <label for="blue-sky-783">11pm</label> -->
                                            <input type="hidden" name="blue-sky" value="11pm">11pm
                                        </div>
                                    </td>
                                    <td class="text-left py-3 px-4">
                                        <div>
                                            <!-- <label for="blue-sky-783">$ 656</label> -->
                                            <input type="hidden" name="blue-sky" value="656">$ 656
                                        </div>
                                    </td>                                   
                                </tr>                        
                            </tbody>
                        </table>
                    
                    </div>
                </div>
            </div>

          <!------->

          <div class="mt-[20px] ">
                <h2 class="text-xl tracking-wider">Flight departing from 
                    <span class="font-bold"><?php echo $row['departure_city'] ?></span> to 
                    <span class="font-bold"><?php echo $row['arrival_city']?></span> on 
                    <span class="font-bold"><?php echo $row['arrival_date'] ?></span>
                </h2>
            </div>
            <div class="w-[1000px] items-center mt-[10px]">
                <div class=" w-full">
                    <div class="shadow overflow-hidden rounded border-b border-gray-200">
                       
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm ">Flight</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Departure</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Cost</th>                            
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <div>
                                            <label><input type="radio" name="blue-sky-sec" id="blue-sky-870" value="Blue_Sky_Air_870">  Blue Sky Air 870</label>
                                        </div>
                                    </td>
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <div>
                                            <!-- <label for="blue-sky-870">8am</label> -->
                                            <input type="hidden" name="blue-sky-sec" value="8am">8am
                                        </div>
                                    </td>
                                    <td class="text-left py-3 px-4">
                                        <div>
                                            <!-- <label for="blue-sky-870">$ 801</label> -->
                                            <input type="hidden" name="blue-sky-sec" value="801">$ 801
                                        </div>
                                    </td>
                                  
                                </tr>
                                <tr class="bg-gray-100">
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <div>
                                            <label><input type="radio" name="blue-sky-sec" id="blue-sky-871" value=" Blue_Sky_Air_871">  Blue Sky Air 871</label>
                                        </div>
                                    </td>
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <div>
                                            <!-- <label for="blue-sky-871">1pm</label> -->
                                            <input type="hidden" name="blue-sky-sec" value="1pm">1pm
                                        </div>
                                    </td>
                                    <td class="text-left py-3 px-4">
                                        <div>
                                            <!-- <label for="blue-sky-871">$ 714</label> -->
                                            <input type="hidden" name="blue-sky-sec" value="714">$ 714
                                        </div>
                                    </td>                             
                                </tr>
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <div>
                                            <label><input type="radio" name="blue-sky-sec" id="blue-sky-872" value="Blue_Sky_Air_872">  Blue Sky Air 872</label>
                                        </div>
                                    </td>
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <div>
                                            <label for="blue-sky-872">
                                                <input type="hidden" name="blue-sky-sec" value="5pm">5pm                                                
                                            </label>
                                            
                                        </div>
                                    </td>
                                    <td class="text-left py-3 px-4">
                                        <div>
                                            <!-- <label for="blue-sky-872">$ 758</label> -->
                                            <input type="hidden" name="blue-sky-sec" value="758">$ 758
                                        </div>
                                    </td>                                   
                                </tr>
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <div>
                                            <label><input type="radio" name="blue-sky-sec" id="blue-sky-873" value="Blue_Sky_Air_873">  Blue Sky Air 873</label>
                                        </div>
                                    </td>
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <div>
                                            <!-- <label for="blue-sky-873">11pm</label> -->
                                            <input type="hidden" name="blu-sky-sec" value="11pm">11pm
                                        </div>
                                    </td>
                                    <td class="text-left py-3 px-4">
                                        <div>
                                            <!-- <label for="blue-sky-873">$ 656</label> -->
                                            <input type="hidden" name="blue-sky-sec" value="656">$ 656
                                        </div>
                                    </td>                                   
                                </tr>                        
                            </tbody>
                        </table>
                   
                    </div>
                </div>
            </div>
                <div class="mt-[50px] mb-[50px]">               
                    <button name="table_arrival_departure_btn" type="submit" class="text-zinc-500 block uppercase mx-auto shadow bg-white hover:bg-gray-200 text-white text-xs py-3 px-10 rounded">Continue ...</button>                
                </div>
            </form>
            


          <!-------->

        </div>
          
    </div>

