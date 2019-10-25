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
    /*
    $i = 1;
    while ($i <= 20) {
      echo $i."行目です。<br>";
      if( $i % 3 === 0 ){
        echo $i."は3の倍数です。<br>";
      }
      $i++;
    }
    */

    /*
    $i = 1;
    $sum = 0;
    while ($i <= 20) {
      if( $i % 3 === 0 || $i % 5 === 0 ){
        echo $i."は3か5の倍数<br>";
        $sum += $i;
      }
      $i++;
    }
    echo "合計は".$sum;
    */

    /*
    $i = 1;
    $sum = 0;
    while ($i <= 100){
      if( $i % 7 === 0 ){
        echo $i."は7の倍数<br>";
        $sum += $i;
      }
      $i++;
    }
    echo "合計は".$sum;
    */

    $i = 1;
    for( $i = 1; $i <= 8; $i++ ){
      echo $i."行目です。<br>";
    }
  ?>


</body>

</html>
