<?php
  include_once('partials/header.php');
  include_once('partials/slider.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your main CSS file -->
    <style>
        .thankyou-content {
            text-align: center;
            color: black; /* Change the text color to black */
        }

        .thankyou-content h2 {
            color: black; /* Change the heading color to black */
        }

        .thankyou-content p {
            color: black; /* Change the paragraph text color to black */
        }

        .thankyou-content .btn {
            color: white;
            background-color: #FF8C00;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .thankyou-content .btn:hover {
            background-color: #FF4F00;
        }
        .thankyou-content h2 {
        color: white;
        }
    </style>
</head>
<body>

<?php
  ob_start();
  include_once('partials/header.php');
  ob_end_flush();
  $contact_object = new Contact();
  $contact_object->insert();
?>

<section class="thankyou-section">
    <div class="container">
        <div class="thankyou-content">
            <h2>Thank You!</h2>
            <p>Your message has been successfully submitted.</p>
            <p>We will get back to you as soon as possible.</p>
            <a href="index.php" class="btn">Back to Home</a>
        </div>
    </div>
</section>

<?php
include_once('partials/footer.php');
?>

</body>
</html>