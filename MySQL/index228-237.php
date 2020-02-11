<?php
  $connection = mysqli_connect("localhost", "test", "test", "test");
  if (mysqli_connect_error()) {
    /// die 可以輸出訊息，並且不繼續執行腳本
    die("無法連接數據庫"."<br/>");
    // echo "無法連接數據庫";
  }
  // echo "繼續運行代碼";
  //<* *(星號)是選擇所有資料庫的項目
  // $query = "SELECT * FROM `users`";
  // $query = "INSERT INFO users (name) VALUES('Kelly')";
  // $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES('Kelly', 'kelly@564.com', 'newpass')";

  //<* 會把所有email的選項都變成john@asd.com
  // $query = "UPDATE `users` SET email='john@asd.com'";

  //<* WHERE可以判斷哪一個項目才要更改email
  // $query = "UPDATE `users` SET email='mike@zxc.com' WHERE id='4'";

  //<* LIMIT 1 修改程式找到的第一項name為Kelly的email，後續符合的都不修改
  // $query = "UPDATE `users` SET email='kelly@newgmai.com' WHERE name='Kelly' LIMIT 1";
  // if ($result = mysqli_query($connection, $query)) {
  //   echo "已經找到相關內容";
  //   $rows = mysqli_fetch_array($result);
  //   print_r($rows);
  // } else {
  //   echo "無法找到相關內容";
  // }

  // -------------------------------- 235 --------------------------------
  // $query = "SELECT * FROM `users`";
  // $query = "SELECT * FROM `users` WHERE name ='Kelly'";

  //<* LIKE 是模糊查詢 ie. %k: 字尾是k，但是k前面不知道有甚麼字
  // $query = "SELECT * FROM `users` WHERE name LIKE '%k'";

  // -------------------------------- 236 --------------------------------
  //<* LIKE 是模糊查詢 ie. %new%: 只知道字中有new前後字都不知道
  // $query = "SELECT * FROM `users` WHERE email LIKE '%new%'";
  // $query = "SELECT * FROM `users` WHERE name='Kelly' AND password != ''";
  // $query = "SELECT * FROM `users` WHERE name='Kelly' OR password != ''";
  // $query = "SELECT name FROM `users`";

  // -------------------------------- 237 --------------------------------
  //<* 如果有字串裡有符號，在符號前面加上"\"
  // $query = "SELECT name FROM `users` WHERE name='Kel\'ly'";

  //<* mysqli_real_escape_string也可以解決字串裡有符號跟使用者輸入時字串內有符號的問題
  $name = "Kel'ly";
  $query = "SELECT name FROM `users` WHERE name='".mysqli_real_escape_string($connection, $name)."'";
  
  if ($result = mysqli_query($connection, $query)) {
    echo mysqli_num_rows($result)."<br/>";
    while ($rows = mysqli_fetch_array($result)) {
      print_r($rows);
    }
  } else {
    echo "無法找到相關內容";
  }
?>