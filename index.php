<?php
$counter = 0;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part3 exe1</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
    <?php while($counter <= 10) { ?>
  <p><?= $counter++ ?></p>
  <?php } ?>
</body>
</html>
