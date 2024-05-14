<?php

if (count($_POST) > 0) {
    include 'db.php';

    $name = $_POST['name'];
    $message = $_POST['message'];
    $email = $_POST['email'];

    $query = "INSERT INTO contact_us (name, message, email)
              VALUES ('$name', '$message', '$email')";

    if (mysqli_query($con, $query)) {
        $lastId = mysqli_insert_id($con);
        if (!empty($lastId)) {
            $message = "Your contact information is saved successfully";
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    
    header("Location: thank-you.php");
    exit();
}
?>
