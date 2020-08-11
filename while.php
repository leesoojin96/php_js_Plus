<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>반복문</title>
  </head>
  <body>
      <h1>JavaScript</h1>
      <script>
          i = 0;
          num = i;
          while (i < 10) {
            document.write(num+"번 자바스크립트 반복<br>");
            i += 1;
            num = i;
          }
      </script>


      <h1>php</h1>
      <ol>
      <?php
        $i = 0;
        while ($i < 10) {
          echo "<li>php 반복</li>";
          $i += 1;
        }
       ?>
       </ol>
  </body>
</html>
