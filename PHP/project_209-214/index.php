<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <title>Website Contact Form</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <style>
    body {
      background-color: #F2F3F5;
    }
    #container {
      width: 600px;
      margin: auto;
      font-family: "Helvetica Neue", "Helvetica", "Arial";
      padding-top: 60px;
    }
    .input-style {
      border-radius: 5px;
      border: 1px solid grey;
      font-size: 1.1em;
      padding-left: 20px;
      margin-bottom: 10px;
    }
    .input-width {
      width: 300px;
      height: 40px;
    }
    label {
      width: 200px;
      float: left;
      font-size: 1.2em;
      padding-top: 8px;
    }
    #email-gender {
      width: 322px;
      height: 44px;
    }
    #mail-message {
      width: 498px;
      padding-top: 15px;
    }
    #submitButton {
      background-color: #AA47BC;
      color: white;
      width: 522px;
      height: 40px;
    }
    .form-error {
      color: red;
    }
    .form-success {
      color: green;
    }
    .input-error {
      box-shadow: 0 0 5px red;
    }
  </style>
</head>

<body>
  <div id="container">
    <form id="validationForm" method = "POST">
      <label for="email-name">Name: </label>
      <input id="email-name" class="input-style input-width" type="text" name="name" placeholder="Please enter your name.">

      <label for="email-address">Email address: </label>
      <input id="email-address" class="input-style input-width" type="text" name="email" placeholder="Please enter your Email address.">

      <label for="email-gender">Gender: </label>
      <select id="email-gender" class="input-style" class="" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>

      <label for="password-1">Password: </label>
      <input id="password-1" class="input-style input-width" type="password" name="password1" placeholder="Please enter your password.">
      <label for="password-2">Confirm Password: </label>
      <input id="password-2" class="input-style input-width" type="password" name="password2" placeholder="Please confirm your password.">

      <textarea id="mail-message" class="input-style" name="message" rows="8" cols="80" placeholder="Please details your situations."></textarea>

      <button id="submitButton" class="input-style" type="submit" name="submit">Submit</button>
    </form>
    <div id="error"></div>
  </div>

  <script type="text/javascript">
    
    $("#validationForm").submit(function(event) {
      event.preventDefault();

      var name = $("#email-name").val();
      var email = $("#email-address").val();
      var password1 = $("#password-1").val();
      var password2 = $("#password-2").val();
      var message = $("#mail-message").val();
      var submit = $("#submitButton").val();

      $("#error").load("mail.php", {
        name: name,
        email: email,
        password1: password1,
        password2: password2,
        message: message,
        submit: submit,
      });
    });
  </script>
</body>
</html>
