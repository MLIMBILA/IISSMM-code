<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Combine country code and phone number
    $phone = $_POST['country-code'] . $_POST['phone'];

    // Store form data in session variables
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone'] = $phone;
    $_SESSION['subject'] = $_POST['subject'];

    // Redirect based on subject selection
    switch ($_POST['subject']) {
        case 'Web and app development':
            header("Location: Web_and_app_development.php");
            break;
        case 'Ecommerce Solutions':
            header("Location: Ecommerce_Solutions.php");
            break;
        case 'IT Support my Institutions':
            header("Location: IT_Support_my_Institutions.php");
            break;
        case 'Supply of Electronic Equipment':
            header("Location: Supply_of_Electronic_Equipment.php");
            break;
        default:
            header("Location: index.php");
            break;
    }
    exit();
}
?>
