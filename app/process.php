<?php
include("inc.connect.php");

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fname"];
    $email = $_POST["email"];
    $emergency = $_POST["emergencyInfo"];
    $phone = $_POST["phone"];
    $profile = isset($_POST['profileId']) ? json_encode($_POST["profileId"]) : ''; ;
    $idNumber = $_POST["idNumber"];
    $address = $_POST["donorAddress"];
    $organ = isset($_POST['organ']) ? $_POST["organ"] : '';

    ;
   

    $sql = "INSERT INTO donordirectory (fname, email, emergencyInfo, phone, profileId, idNumber, donorAddress, organ)
            VALUES ('$name', '$email','$emergency', '$phone', '$profile', '$idNumber', '$address', '$organ')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for your contribution to our donation!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();






?>



