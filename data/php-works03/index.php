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
    //$score = 100;
    $score = mt_rand(0,100);
    echo "得点は".$score."です。<br>";
    if( $score >= 0 && $score < 60 ){
      echo "平均点以下です。";
    }else if( $score >= 60 && $score < 80 ) {
      echo "平均点を超えています。";
    }else if( $score >= 80 && $score < 100 ) {
      echo "優秀な点数です。";
    }else if( $score === 100 ) {
      echo "満点です。";
    }else {
      echo "入力した数値が違います。";
    }

  ?>
</body>
</html>
