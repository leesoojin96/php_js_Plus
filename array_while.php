<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>JavaScript</h1>
    <script>
    list = new Array("Java","php","C++","JSP");
    i = 0;
    while (i < list.length) {
      document.write("<li>"+list[i]+"</li>");
      i += 1;
    }
    </script>

    <h1>php</h1>
    <ol>
    <?php
      $list = array("Java","php","C++","JSP");
      $i = 0;
      while ($i < count($list)) {
        echo "<li>".$list[$i]."</li>";
        $i += 1;
      }
     ?>
   </ol>
  </body>
</html>
