<?php
$errorMSG = "";
require("db.php");
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["email"])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["phone"])) {
    $errorMSG = "Phone is required ";
} else {
    $phone = $_POST["phone"];
}

if (empty($_POST["terms"])) {
    $errorMSG = "Terms is required ";
} else {
    $terms = $_POST["terms"];
}

$insert="INSERT INTO `users`(`name`, `email`, `contact`) VALUES ('{$name}','{$email}','{$phone}')";
$query=mysqli_query($db, $insert);

// redirect to success page
if ($query && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>