<?php

   // Establish database connection
   $connection = mysqli_connect('localhost', 'root', 'root', 'book_db');

   // Check connection
   if(!$connection){
      die("Connection failed: " . mysqli_connect_error());
   }

   if(isset($_POST['send'])){
      // Sanitize and validate form data
      $name = htmlspecialchars(trim($_POST['name']));
      $email = htmlspecialchars(trim($_POST['email']));
      $phone = htmlspecialchars(trim($_POST['phone']));
      $address = htmlspecialchars(trim($_POST['address']));
      $location = htmlspecialchars(trim($_POST['location']));
      $guests = htmlspecialchars(trim($_POST['guests']));
      $arrivals = htmlspecialchars(trim($_POST['arrivals']));
      $leaving = htmlspecialchars(trim($_POST['leaving']));

      // Validate required fields (you can add more validation as needed)
      if (!empty($name) && !empty($email) && !empty($phone) && !empty($arrivals) && !empty($leaving)) {
         // Prepare an SQL statement
         $stmt = mysqli_prepare($connection, 
            "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) 
             VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
         
         // Bind parameters to the statement
         mysqli_stmt_bind_param($stmt, "ssssssss", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);
         
         // Execute the statement
         if(mysqli_stmt_execute($stmt)){
            session_start();
            $_SESSION['success_message'] = "Pack your bags! Booking successful.";
            header('location:book.php');
         } else {
            echo "Error: " . mysqli_stmt_error($stmt);
         }
         
         // Close the prepared statement
         mysqli_stmt_close($stmt);
      } else {
         echo 'All required fields must be filled out. Please try again!';
      }

   } else {
      echo 'Something went wrong. Please try again!';
   }

   // Close the database connection
   mysqli_close($connection);

?>
