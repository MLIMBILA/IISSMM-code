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
    <title>IT Support for Institutions</title>
    <!-- Meta Description for SEO -->
    <meta name="description" content=" Our IT support services range from troubleshooting to infrastructure management, helping institutions maintain smooth operations                                  and maximize uptime.">
    <!-- Keywords (optional, not widely used for SEO anymore) -->
    <meta name="keywords" content="IT support, IT personnel, IT expert, computer antivirus, windows">
        <!-- Canonical URL -->
    <link rel="canonical" href="https://www.iissmm.com/IT_Support_my_Institutions">
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
            <option value="IT expert for one time assigmnent">IT expert for one time assigmnent</option>
            <option value="Staff for the routine office IT activities">Staff for the routine office IT activities</option>
            <option value="IT experts for cyber protection of institution system">IT experts for cyber protection of institution system</option>
            <option value="Intergrate cyber protection solutions in existing system">Intergrate cyber protection solutions in existing system</option>
        </select><br>

        <label for="details">Additional Details:</label>
        <textarea id="details" name="details" required></textarea>

        <button type="submit">Confirm and Submit</button>
    </form>
</body>
<?php include 'footer.php'; ?>
</html>
