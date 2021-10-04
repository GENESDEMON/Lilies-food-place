<?php
session_start();
// connect to the local database
$db = mysqli_connect('localhost', 'root', '', 'foodvault');


 // initialize variables
	$name = "";
	$id = 0;
	$update = false;
    $errors = array(); 

      // Create a new category
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
        if (empty($name)) {
            array_push($errors, " Your category name is required");
        }
		mysqli_query($db, "INSERT INTO category (name) VALUES ('$name')"); 
		$_SESSION['message'] = "Category saved"; 
		header('location: add_cat.php');
	}

    // Delete a category
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM category WHERE id=$id");
        $_SESSION['message'] = "Category deleted!"; 
        header('location: ../admin/add_cat.php');
    }


    // Add a Speciality
    if (isset($_POST['save'])) {
		$name = $_POST['name'];
        if (empty($name)) {
            array_push($errors, "Name is required");
        }
		mysqli_query($db, "INSERT INTO spec (name) VALUES ('$name')"); 
		$_SESSION['message'] = "Speciality saved"; 
		header('location: add_spec.php');
	}

    // Delete a Speciality
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM spec WHERE id=$id");
        $_SESSION['message'] = "Speciality deleted!"; 
        header('location: ../admin/add_spec.php');
    }

  ?>