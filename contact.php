<?php
include('partials/header.php');
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