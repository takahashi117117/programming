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
    $i = 1;
    $sum = 0;
    while ($i <= 100) {
      if( $i % 7 === 0 ){
        echo $i."は7の倍数の和<br>";
        $sum += $i;
      }
      $i++;
    }
    echo "合計は".$sum;
  ?>


</body>
</html>
