<form method ="POST" action= "">
    <label for = "name"> Name </label>
    <input type = "text" name="name" id ="name" required>
    <label for = "email">Email</label>
    <input type = "email" name="email" id ="email" required>
    <button type = "submit">Submit </button>
</form>

<?php
// Function to sanitize input

function sanitizeInput($data) {
    $data = trim($data); // Remove unnecessary spaces before and after
    $data = stripslashes($data); // Remove backlashes
    $datahtmlspecialchars($data, ENt_QOUTES, 'UTF-8'); // Converts special characters to prevent XSS
    return $data;
}

$sanitized_name = $sanitized_email = ""; // Default empty values

if ($_SERVER["REQUEST_METHOD"]) == "POST" {
    $sanitized_name = sanitizeInput($_POST['name']);
    $sanitized_email = sanitizedInput($_POST['email']);
}
?>



<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Example</title>
<link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="container">
<form method "POST" action="">
    <label for="name"> Name </label>
    <input type "text" name="name" id="name" required >
    <label for "email" > Email </label>
    <input type "email" name = "email" id="email" required>
    <button type="submit"> Submit </button>
</form>


</div>
<?php if (!empty($sanitized_name) && !empty($sanitized_email)): ?>

<div class="output">
    <h3>Sanitized Output:</h3>

    <p>Name: <?php echo htmlspecialchars($sanitized name, ENT QUOTES, 'UTF-8'); ?></p> 
    <p>Email: <?php echo htmlspecialchars($sanitized_email, ENT_QUOTES, 'UTF-8'); ?></p>

</div>

<?php endif; ?>
</body>
</html>


