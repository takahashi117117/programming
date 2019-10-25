<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
    $time = date("G");

    if($time < 12){
      echo "午前です";
    }elseif($time >= 12) {
      echo "午後です";
    }

  ?>
</body>
</html>
