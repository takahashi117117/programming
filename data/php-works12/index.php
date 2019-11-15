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
  //FizzBuzz問題回答
  for ($i = 1 ; $i <= 100 ; $i++) {
    if( $i % 3 === 0 && $i % 5 === 0 ){
      echo "FizzBuzz"."<br>";
    }else if( $i % 3 === 0 ){
      echo "Fizz"."<br>";
    }else if( $i % 5 === 0 ){
      echo "Buzz"."<br>";
    }else
    echo $i."<br>";
  }
?>

</body>
</html>
