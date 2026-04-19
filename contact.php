<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $service = $_POST['service'];
    $message = $_POST['message'];


    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $company = mysqli_real_escape_string($conn, $company);
    $service = mysqli_real_escape_string($conn, $service);
    $message = mysqli_real_escape_string($conn, $message);

    $sql = "INSERT INTO messages (name, email, company, service, message)
            VALUES ('$name', '$email', '$company', '$service', '$message')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?success=1");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>