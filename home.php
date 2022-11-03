<?php include("header/header.php"); ?>
<?php include("sidebars/sidebar-menu.php"); ?>


<?php session_start(); 

  if(isset($_SESSION['id']) && isset($_SESSION['username'])) { ?>

<div class="w-[1500px] bg-gray-300 ml-[5px] mt-[5px] h-[648px]">
        <div class="flex flex-col mt-[153px] ml-[100px]">
          <div class="text-color-all mt-[50px] height-text text-md">
            <p>
              Welcome,
              <span class="font-bold user"><?php echo $_SESSION['username']; ?> </span>
              to the Web Tours reservation pages.
            </p>
            <p>
              Using the menu to the left, you can search for new flights to
              book, or review/edit the flights already booked. Don't forget
              <br />
              to sign off when you're done!
            </p>
          </div>
        </div>
      </div>

    <?php
    } else {
      header("Location: signin.php?error");
      exit();
    }

    ?>
<?php include("footer/footer.php") ?>

