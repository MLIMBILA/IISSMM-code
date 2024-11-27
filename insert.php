<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve session data and form input
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $countryCode = isset($_POST['country-code']) ? $_POST['country-code'] : '';

    // Remove leading zero from phone number if it exists
    if (strlen($phone) > 0 && $phone[0] === '0') {
        $phone = substr($phone, 1);
    }

    // Combine country code and phone number
    $fullPhoneNumber = $countryCode . $phone;

    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $subsection = isset($_POST['subsection']) ? $_POST['subsection'] : '';
    $details = isset($_POST['details']) ? $_POST['details'] : '';

    // Database connection
    $servername = "localhost";
    $username = "u763585357_TEST";
    $password = "Issack@123";
    $dbname = "u763585357_test";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insert all information into the database
        $stmt = $pdo->prepare("INSERT INTO inquiries (name, email, phone, subject, subsection, details) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $fullPhoneNumber, $subject, $subsection, $details]);

        // Clear session data after use
        session_unset();
        session_destroy();

        // Display thank you message with styling
        echo "<div class='thank-you-message'>Thank you for your inquiry, " . htmlspecialchars($name) . "!</div>";
    } catch (PDOException $e) {
        echo "<div class='error-message'>Error: " . $e->getMessage() . "</div>";
    }
}
?>
