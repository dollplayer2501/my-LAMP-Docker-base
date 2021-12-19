<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>php5.3-apache-mysql</title>
  </head>
  <body>
    <p>File upload test</p>
    <form action="image-upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="upfile" />
      <button type="submit">Send</button>
    </form>

<?php
  foreach (glob('./uploads/*') as $file) {
    // ./uuploads/.gitkeep is not include
    echo sprintf('<img src="%s" style="max-width:200px;margin-top:10px;" /><br clear="all"/>%s', $file, PHP_EOL);
  }
?>
  </body>
</html>
