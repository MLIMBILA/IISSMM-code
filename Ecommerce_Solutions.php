<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
        <!-- Character Set -->
    <meta charset="UTF-8">
     <!-- Viewport Settings for Mobile Responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- SEO Title -->
    <title>Ecommerce Solutions</title>
    <!-- Meta Description for SEO -->
    <meta name="description" content=" Our ecommerce solutions ensure secure online transactions, customer engagement, and inventory management, all designed to enhance                                 your online presence.">
    <!-- Keywords (optional, not widely used for SEO anymore) -->
    <meta name="keywords" content="Business website, payment solution, mpesa, tigopesa, airtel money payment, mobile money">
        <!-- Canonical URL -->
    <link rel="canonical" href="https://www.iissmm.com/Ecommerce_Solutions">
    <!-- Link to CSS Stylesheets (optional) -->
    <link rel="stylesheet" href="style.css">
    <!-- Favicon -->
    <link rel="icon" href="photos/iissmm.ico" type="image/x-icon">

</head>
<body>
        <h1>Your details</h1>
    <!-- Editable session data form -->
        <div class="session-info">
        <p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION['name'] ?? ''); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email'] ?? ''); ?></p>
        <p><strong>Phone:</strong> <?php echo htmlspecialchars($_SESSION['phone'] ?? ''); ?></p>
        <p><strong>Issue:</strong> <?php echo htmlspecialchars($_SESSION['subject'] ?? ''); ?></p><br>
    </div>

    <form action="insert.php" method="POST">
        <!-- Hidden fields to pass session data -->
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($_SESSION['name']); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($_SESSION['email']); ?>">
        <input type="hidden" name="phone" value="<?php echo htmlspecialchars($_SESSION['phone']); ?>">
        <input type="hidden" name="subject" value="<?php echo htmlspecialchars($_SESSION['subject']); ?>">

      <label for="subsection">Finish to get over</label><br>
        <select id="subsection" name="subsection" required>
            <option value="">Choose your specific need</option>
            <option value="Online payment solutions for my platform">Online payment solutions for my platform</option>
            <option value="Intergrate mobile money solutions in existing website">Intergrate mobile money solutions in existing website</option>
            <option value="Intergrate mobile money solutions in existing app">Intergrate mobile money solutions in existing app</option>
            <option value="I want full ecommerce website and app for my business">I want full ecommerce website and app for my business</option>
        </select><br>

        <label for="details">Additional Details:</label>
        <textarea id="details" name="details" required></textarea>

        <button type="submit">Confirm and Submit</button>
    </form>
    <?php include 'footer.php'; ?>
</body>

</html>
