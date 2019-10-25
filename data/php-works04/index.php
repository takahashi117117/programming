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
    $attend = 1;
    //欠席は0 出席は1
    $place = "b";
    if( $attend === 0 ){
      echo "パーティーを欠席にて承りました。";
    }else if ( $attend = 1 ){
      echo "パーティーを出席にて承りました。";
    }
    */

    $attend = 1;
    //欠席は0 出席は1
    $place = "b";
    if( $attend === 0 ){
      echo "パーティーを欠席にて承りました。";
    }else {
      echo "パーティーを出席にて承りました。";

      if( $place = "a" ){
        echo "会場はAホテルでございます。";
      }else if ( $place = "b" ){
        echo "会場はB広場でございます。";
      }
    }

  ?>
</body>
</html>
