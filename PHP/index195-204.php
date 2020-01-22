<?PHP

  $string_var = "這是\"PHP\" value!";
  $another_string = " PHP value 2!";
  // echo $string_var + $another_string; // different from HTML
  // echo $string_var . $another_string;

  $number = 10;
  // echo $number / 2;   // caculate

  $name = "jack";
  $name1 = "rose";
  $a = "name";
  echo "My name is $name<br>";
  echo "My name is ".$name1."<br>";
  echo $$a . "<br>";   // $a = name -> $name = jack

  // ---------------------------- ARRAY  ------------------------------------
  $myArray = array("buger", "pizza", "coffee");
  echo $myArray;    // Assert
  echo "<br>";
  print_r($myArray);
  echo "<br>";
  echo $myArray[2] . "<br>";
  echo $myArray[5] . "<br>";    // when getting assert, php will skip the error and keep going on the next line.
  echo "Keep going" . "<br>";

  $anotherArray[0] = "ice cream";
  $anotherArray[1] = "milk";
  print_r($anotherArray);
  echo "<br/><br/>";

  $thirdArray = array(
    "法國" => "法語",
    "美國" => "英語",
    "日本" => "日語",
  );
  print_r($thirdArray);
  echo "<br/>";
  echo $thirdArray["美國"];
  echo "<br/><br/>";

  $anotherArray[] = "salad";
  print_r($anotherArray);
  echo "<br/><br/>";

  unset($thirdArray["美國"]);   // 刪除成員
  print_r($thirdArray);
  echo "<br/><br/>";

  $name3 = "John";
  unset($name3);
  echo $name3;
  echo "<br/><br/>";
  echo "<br/><br/>";

  // ---------------------------- IF  ------------------------------------
  $number1 = 2;
  $anotherNumber = 1;
  $thirdNumber = 1;
  // if ($number1 != $anotherNumber AND $anotherNumber != $thirdNumber) {   // && == AND
  if ($number1 != $anotherNumber OR $anotherNumber != $thirdNumber) {   // || == OR
    echo "True!";
  } else {
    echo "False!";
  }
  echo "<br/><br/>";
  echo "<br/><br/>";

  // ---------------------------- FOR and FOREACH  ------------------------------------
  for ($i = 1; $i <= 10; $i+=2) {
    echo $i . "<br>";
  }
  echo "<br/><br/>";
  for ($i = 10; $i > 0; $i-=1) {
    echo $i . "<br>";
  }
  echo "<br/><br/>";
  $myArray1 = array("Dog", "Cat", "Fish");
  foreach ($myArray1 as $key => $value) {
    echo "Position: $key, Value: $value <br/>";
  }
  echo "<br/><br/>";

  // ---------------------------- WHILE  ------------------------------------
  $myArray2 = array("Dog", "Cat", "Fish");
  $j = 0;
  $k = 0;
  $l = 0;

  while ($j <= 10){
    echo $j . "<br >";
    $j++;
  }
  while ($myArray2[$k]) {
    echo $myArray2[$k] . "<br>";
    $k++;
  }
  while ($myArray2[$l]) {
    echo "Position: $l, Value: $myArray2[$l] <br/>";
    $l++;
  }
  echo "<br/><br/>";

  // ---------------------------- SEND E-MAIL  ------------------------------------
  $emailTo = "";
  $title = "Test Email";
  $body = "That is a test email.";
  $headers = "From: postmaster@localhost";

  if (mail($emailTo, $title, $body, $headers)) {
    echo "Email sent successfully.";
  } else {
    echo "Email sent failed.";
  }
?>