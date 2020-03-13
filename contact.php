<?php $page_title = "Contact"; ?>

<?php include("header.php"); ?>
<?php include("navigation.php"); ?>

<div class="jumbotron">
  <div class="container">
    <h1 class="mb-4"><?php echo $page_title; ?></h1>
    <p>
      <i class="fa fa-phone"></i>
      <a href="tel:206-595-5078" class="ml-1" style="color: black; text-decoration: none">206-595-5078</a>
    </p>
    <p>
      <i class="fa fa-envelope"></i>
      <a href="mailto:multnomahCFB@gmail.com" class="ml-1" style="color: black; text-decoration: none">multnomahCFB@gmail.com</a>
    </p>
    <h3 class="my-5">Send us a Message</h3>
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
      <p>
        <button type="submit" class="btn btn-light" id="sendMessageButton">Send Message</button>
      </p>
    </form>
  </div>
</div>
<div class="container-fluid">
  <?php include("statement.php"); ?>
  <p class="text-center">
    <a href="index.php"   class="btn btn-light">Home</a>
  </p>
</div>

<?php include("footer.php"); ?>