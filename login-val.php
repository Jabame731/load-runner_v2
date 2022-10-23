<?php session_start(); include("db/db_conn.php"); ?>


<?php

  if(isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username)) {
      header("Location: signin.php?error=Username is required");
      exit();
    }elseif(empty($password)){
      header("Location: signin.php?error=Password is required");
      exit();
    }else {
      $userSQL = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn, $userSQL);

      if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if($row['username'] === $username && $row['password'] === $password){
          $_SESSION['username'] = $row['username'];
          $_SESSION['id'] = $row['id'];
          header("Location: home.php");
        }else {
          header("Location: signin.php?error=Invalid Credentials");
          exit();
        }

        print_r($row);
      }else {
        header("Location: signin.php?error=Invalid Credentials");
        exit();
      }
    }


  }else {
    header("Location: signin.php?error ");
    exit();
  }
  



?>
