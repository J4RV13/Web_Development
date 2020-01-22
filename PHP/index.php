
<!doctype html>
<html>
<head>
    <title>My Form</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 
</head>

<body>
  <?php
    $name = array("Dog", "Cat", "Fish");
    if ($_POST["name"]) {
      echo "Your name is " . $_POST["name"];
    } else {
      echo "Please enter your name.";
    }
    echo "<br/><br/>";
    $knowyou = 0;
    if ($_POST["name"]) {
      foreach ($name as $name) {
        if ($_POST["name"] == $name) {
          echo "I Know you, you are " . $_POST["name"];
          $knowyou = 1;
        }
      }
      if (!$knowyou) {
        echo "Sorry! I don't know you.";
      }
    }
  ?>
  <form method="post">
    <label for="name">Name</label>
    <input type="text" name="name"/>
    <input type="submit" name="submit"/>
  </form>
</body>
</html>
