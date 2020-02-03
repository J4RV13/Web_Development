<?php
  if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass1 = $_POST["password1"];
    $pass2 = $_POST["password2"];
    $message = $_POST["message"];

    $errorEmpty = false;
    $errorEmail = false;
    $errorPass = false;

    if (empty($name) || empty($email) || empty($pass1) || empty($pass2) || empty($message)) {
      echo "<span class = 'form-error'>Please enter correct information!</span>";
      $errorEmpty = true;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<span class = 'form-error'>Please enter correct Email format!</span>";
      $errorEmail = true;
    } elseif ($pass1 != $pass2) {
      echo "<span class = 'form-error'>Please check your password!</span>";
      $errorPass = true;
    } else {
      $mailToname = "jack-hung.com";
      $mailTo = "jack@123.com";
      $mailFromname = $name;
      $mailFrom = "From: ".$email;    /// cause using local server. that's why cannot connect to SMTP server. So the Header need to add one parameter "From: "
      $mailSubject = "Website Contact Form";
      $mailContent = "Name: ".$name.
                     "Message Content:".$message;

      if (mail($mailTo, $mailSubject, $mailContent, $mailFrom)) {
        echo "<span class = 'form-success'>Your mail has been sent successfully!</span>";
      } else {
        echo "<span class = 'form-error'>Your mail has been sent failure!</span>";
      }
    }
  } else {
    echo "<span class = 'form-error'>Error, Try again later!</span>";
  }
?>

<script>
  $("#email-name, #email-address, #password-1, #password-2, #mail-message").removeClass("input-error");
  var errorEmpty = "<?php echo $errorEmpty; ?>";
  var errorEmail = "<?php echo $errorEmail; ?>";
  var errorPass = "<?php echo $errorPass; ?>";

  if (errorEmpty == true) {
    $("#email-name, #email-address, #password-1, #password-2, #mail-message").addClass("input-error");
  }
  if (errorEmail == true) {
    $("#email-address").addClass("input-error");
  }
  if (errorPass == true) {
    $("#password-1, #password-2").addClass("input-error");
  }
</script>