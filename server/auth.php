<?php
session_start();
// initializing variables
$username = "";
$email    = "";
$phone = "";
$address   = "";
$errors = array(); 

// connect to the local database
$db = mysqli_connect('localhost', 'root', '', 'foodvault');

// Admin Login Controller
if (isset($_POST['admin_login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);  
    if (empty($username)) {
        array_push($errors, "This field can not be empty");
    }
    if (empty($password)) {
        array_push($errors, "This field can not be empty");
    } 
    
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "Welcome Back!";
          header('location: dashboard.php');
        }else {
            array_push($errors, "Wrong username and  password combination");
        }
    }
  }


  // Admin Registration Controllers
if (isset($_POST['add_admin'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
   

   $user_check_query = "SELECT * FROM admin WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
   if ($user) { 
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      } 
      if ($user['email'] === $email) {
        array_push($errors, "email already exists");
      }
      if(strlen($password) < 8 ) {
        $msg = "Password must be at least 8 characters in length";
      } else {
        $msg = "Your password is strong.";
      }
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "INSERT INTO admin (username, email, password) 
                  VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now signed up";
        header('location: login.php');
    }
  }
  ?>