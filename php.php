<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    // ... collect other form data
    $to = 'obosohio@gmail.com';
    $subject = 'New Form Submission';
    $message = "Name: $name\nAddress: $address\n...";
    // ... construct message with all form data
    mail($to, $subject, $message);
    // ... handle mail sending success or failure
}
?>