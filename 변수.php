<?php
$name = "개발";
// 변할 수 있는 부분
?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>변수</title>
  </head>
  <body>
    <h1>JavaScript</h1>
    <script>
      name = "egoing";
      document.write("안녕! "+name);
    </script>

    <h1>php</h1>
    <?php
      echo "안녕!".$name;
      // 변하지않는 부분
     ?>
  </body>
</html>
