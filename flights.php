<?php include("header/header.php"); ?>
<?php include("sidebars/sidebar-menu.php"); ?>

<!-- Flight Content -->
    <div class="ml-[5px] mt-[5px] bg-gray-300 w-[1400px]">
        <div class="ml-[100px] mt-[100px]">
          <div class="text-[50px]">
            <h1>Find Flight</h1>
          </div>
          <form action="flights_validation.php" method="post">
            <div class="flex p-5 gap-[50px] mt-4">
              <div class="text-lg">
                <label for="departures">Departure City: </label>
                <select
                  name="departures"
                  id="departures"
                  class="ml-4 rounded-md p-1 rounded-md"
                >
                  <option value="Cebu">Cebu</option>
                  <option value="Bohol">Bohol</option>
                  <option value="negros">Negros</option>
                  <option value="Siquijor">Siquijor</option>
                </select>
              </div>
              <div>
                <label class="text-lg">Departure Date: </label>
                <input type="date" name="date_depart" class="ml-4 p-1 rounded-md text-lg" />
              </div>
            </div>
            <div class="flex gap-[50px] mt-4">
              <div class="text-lg">
                <label for="arrival">Arrival City: </label>
                <select
                  name="arrival"
                  id="arrival"
                  class="ml-4 rounded-md p-1 rounded-md"
                >
                  <option value="Bacolod">Bacolod</option>
                  <option value="Davao">Davao</option>
                  <option value="Manila">Manila</option>
                  <option value="Tarlac">Tarlac</option>
                </select>
              </div>

              <div>
                <label class="text-lg">Return Date: </label>
                <input type="date" name="date_arrival" class="ml-4 p-1 rounded-md text-lg" />
              </div>
            </div>

            <!------->
            <div class="flex p-5 gap-[50px] mt-4">
              <div>
                <label class="text-lg">No. of Passengers: </label>
                <input
                  type="number"
                  min="1"
                  max="99"
                  class="ml-4 p-1 rounded-md text-lg"
                  name="number_of_pass"
                  id="number_of_pass"
                />
              </div>
              <div class="text-[20px]">
                <input
                  type="checkbox"
                  name="ticket"
                  id="ticket"
                  class="w-[20px] h-[20px] mr-1"
                />
                <label for="ticket">ticket</label>
              </div>
            </div>

            <!-------->
            <div class="flex">
              <div class="flex text-white">
                <div class="ml-[100px]">
                  <p class="text-lg text-white">Seating Preferences</p>
                  <div class="mt-4 space-y-4">
                    <div class="flex items-center">
                      <input
                        name="seating_preferences"
                        value="aisle"
                        type="radio"
                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                      />
                      <label for="Aisle" class="ml-3 block text-sm font-medium"
                        >Aisle</label
                      >
                    </div>
                    <div class="flex items-center">
                      <input
                       
                        name="seating_preferences"
                        value="window"
                        type="radio"
                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                      />
                      <label for="Window" class="ml-3 block text-sm font-medium"
                        >Window</label
                      >
                    </div>
                    <div class="flex items-center">
                      <input
                       
                        name="seating_preferences"
                        type="radio"
                        value="none"
                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                      />
                      <label for="None" class="ml-3 block text-sm font-medium"
                        >None</label
                      >
                    </div>
                  </div>
                </div>
              </div>

              <!----->
              <div class="flex text-white">
                <div class="ml-[100px]">
                  <p class="text-lg text-white">Type of Seat</p>
                  <div class="mt-4 space-y-4">
                    <div class="flex items-center">
                      <input
                       
                        name="type_of_seat"
                        type="radio"
                        value="first"
                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                      />
                      <label for="first" class="ml-3 block text-sm font-medium"
                        >First</label
                      >
                    </div>
                    <div class="flex items-center">
                      <input
                        
                        name="type_of_seat"
                        type="radio"
                        value="business"
                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                      />
                      <label for="Business" class="ml-3 block text-sm font-medium"
                        >Business</label
                      >
                    </div>
                    <div class="flex items-center">
                      <input
                       
                        name="type_of_seat"
                        type="radio"
                        value="coach"
                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                      />
                   
                      <label for="Coach" class="ml-3 block text-sm font-medium"
                        >Coach</label
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <button name="departure_arrival_btn" class="bg-white p-2 w-[100px] mt-[50px] rounded-md text-zinc-500 ml-[500px]">
                  Continue
              </button>
          </form>
        </div>
      </div>
    </div>


<?php include("footer/footer.php");
