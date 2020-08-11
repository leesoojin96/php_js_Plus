<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php login</title>
  </head>
  <body>
    <?php
//               사용자가 입력한 정보 중에 password의 값;
     $password = $_GET["password"];
                 // $_GET -> php가 특수 목적을 위해 만든 변수
     if ($password == "7777") {
       echo "Welcome!";
     } else {
       echo "who are you?";
     }
     ?>
  </body>
</html>
