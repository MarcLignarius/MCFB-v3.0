<?php $page_title = "Contact"; ?>

<?php include("header.php"); ?>
<?php include("navigation.php"); ?>

<div class="container">
  <h1 class="my-4"><?php echo $page_title; ?></h1>
  <h3>Content for this page:</h3>
  <div class="row">
    <div class="col-md-8">
      <h5>Send us a Message</h5>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="control-group form-group">
          <div class="controls">
            <label>Full Name:</label>
            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
            <p class="help-block"></p>
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Phone Number:</label>
            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Email Address:</label>
            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Message:</label>
            <textarea rows="5" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
          </div>
        </div>
        <div id="success"></div>
        <!-- For success/fail messages -->
        <button type="submit" class="btn btn-primary" style="margin-bottom: 1rem;" id="sendMessageButton">Send Message</button>
      </form>
    </div>
    <div class="col-md-4">
      <h5>Contact Details:</h5>
      <p>
        <i class="fa fa-phone"></i>
        <a href="tel:206-595-5078" class="ml-1" style="color: black; text-decoration: none">206-595-5078</a>
      </p>
      <p>
        <i class="fa fa-envelope"></i>
        <a href="mailto:multnomahCFB@gmail.com" class="ml-1" style="color: black; text-decoration: none">multnomahCFB@gmail.com</a>
      </p>
    </div>
  </div>
  <a href="index.php" class="btn btn-primary">Home</a>
</div>

<?php include("footer.php"); ?>