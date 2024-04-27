<?php
    ob_start();
    include('partials/header.php');
    ob_end_flush();
?>
  <!-- Database sekcia -->
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt_final";

// Vytvori sa connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Preveri connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Vloží údaje do databázy
    $sql = "INSERT INTO contact (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    if ($conn->query($sql) === TRUE) {
        // Presmerovanie na stránku s poďakovaním
        header("Location: thankyou.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// Zatvoríconnection
$conn->close();
?>

  <!-- contact section -->
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // You can add your email logic here to send the form data to your email address
    // For example:
    $to = "your_email@example.com";
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    
    // Send email
    if (mail($to, $subject, $body)) {
        echo "<p>Thank you for contacting us. We will get back to you soon!</p>";
    } else {
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
}
?>

<section class="contact_section layout_padding">
  <div class="contact_bg_box">
    <div class="img-box">
      <img src="images/contact-bg.jpg" alt="">
    </div>
  </div>
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Get In touch
      </h2>
    </div>
    <div class="">
      <div class="row">
        <div class="col-md-7 mx-auto">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="contact_form-container">
              <div>
                <div>
                  <input type="text" name="name" placeholder="Full Name" />
                </div>
                <div>
                  <input type="email" name="email" placeholder="Email " />
                </div>
                <div>
                  <input type="text" name="phone" placeholder="Phone Number" />
                </div>
                <div class="">
                  <input type="text" name="message" placeholder="Message" class="message_input" />
                </div>
                <div class="btn-box ">
                  <button type="submit">
                    Send
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>



<?php
include('partials/footer.php');
?>