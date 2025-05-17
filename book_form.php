<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'booking_db');

if (!$conn) {
    die('Connection Failed: ' . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $ticket = $_POST['ticket'];
    $guests = $_POST['guests'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $insert = "INSERT INTO book_form (name, ticket, guests, email, phone, address, location, arrivals, leaving) 
               VALUES ('$name', '$ticket', '$guests', '$email', '$phone', '$address', '$location', '$arrivals', '$leaving')";

if (mysqli_query($conn, $insert)) {
   $_SESSION['success_message'] = "✈️ Flight successfully booked!";
   header("Location: book.php");
   exit();
} else {
   echo "Error: " . mysqli_error($conn);
}
}
?>

