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
    //バリデーション機能の実装
    $movie = "";

    if( $_SERVER["REQUEST_METHOD"] === "post" ){
      $movie = $_POST["movie"];

      if( mb_strlen($movie) === 0 ){
        $err = "文字を入力して下さい。";
      }else if( mb_strlen($movie) >= 20 ){
        $err = "20文字以内で入力して下さい。";
      }
    }

    //入力内容に誤りがあればエラーメッセージを、正しければ「あなたの好きな映画は〜です。」と表示
  ?>
  <p>
  <?php
    if( isset($err) ){
      echo $err;
    }else {
      echo "あなたの好きな映画は".$movie."です。";
    }
  ?>
  </p>
<form action="" method="post">
  <label for="">好きな映画</label>
  <input type="text" name="movie"><br>
  <input type="submit">
</form>

</body>
</html>
