    <div class="flex">
      <div class="bg-gray-300 mt-[5px] w-[300px] h-screen">
          <form action="login-val.php" method="POST">
            <div class="mt-[100px]">
              <div class="flex justify-content-center items-center ml-[10px]">
                <?php if(isset($_GET['error']))  { ?> 
                    <p class="text-rose-400 ml-[10px]"><?php echo $_GET['error'];  ?></p>
                  <?php } ?>
              </div>
              <div class="flex flex-col ml-[10px]">
                <label class="text-lg ml-[15px]">Username </label>
                <input
                  type="text"
                  name="username"
                  class="ml-2 p-1 border-current rounded-md text-sm w-[200px]"
                />
              </div>
              <div class="flex flex-col mt-[20px] ml-[10px]">
                <label class="text-lg ml-[15px]">Password </label>
                <input
                  type="password"
                  name="password"
                  class="ml-2 p-1 border-current rounded-md text-sm w-[200px]"
                />
              </div>
              <button
                type="submit"
                class="bg-white rounded-md p-1 ml-[20px] w-[100px] mt-[13px] hover:bg-gray-100"
              >
                Login
              </button>
            </div>
          </form>
      </div>
  
