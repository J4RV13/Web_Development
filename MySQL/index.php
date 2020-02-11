<?php
  // ------------------------ 238 ------------------------
  // session_start();
  // $_SESSION["name"] = "Jack";

  //<* 輸出$_SESSION的type
  // echo $_SESSION;
  //<* 輸出$_SESSION中name的值
  // print_r($_SESSION["name"]);

  // ------------------------ 239 ------------------------
  //<* setcookie設定cookie在此電腦存在多少秒
  // setcookie("id", "test", time() + 60 * 60);
  // echo $_COOKIE["id"];
  // if (count($_COOKIE) > 0) {
  //   echo "Cookie已經設定!";
  // } else {
  //   echo "Cookie沒有被設定!";
  // }

  // ------------------------ 240 ------------------------
  //<* https://crackstation.net/ 破解md5加密的網站
  //<* 第一種加密方法使用md5，但是會被破解
  // echo md5("password");

  //<* 第二種加密方法使用md5，並且密碼很長很複雜
  // echo md5("asdqw12689sas");

  //<* 第三種加密方法使用md5，並且加上在程式內設定永久不變的密碼
  // $salt = "sdq89cs156c1aqwdwaq9";
  // echo md5($salt."asdqw12689sas");

  //<* 第四種加密方法使用md5，並且加上在程式內設定永變的密碼，此方法駭客比較無法破解$row['id']的密碼
  echo md5(md5($row['id'])."password");

?>