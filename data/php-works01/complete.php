<?php
//POSTされてきたデータを取得する
$name = $_POST["name"];
$age = $_POST["age"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>完了ページ</h1>
  <p>こんにちは、<?php echo $name; ?>さん</p>
  <p>年齢は、<?php echo $age; ?>歳ですね。</p>

  <p>以上で登録いたします。</p>

<form action="./complete.php" method="POST">
<input type="hidden" name="name" value="<?php echo $name; ?>">
  <input type="hidden" name="age" value="<?php echo $age; ?>">
  <input type="submit" value="送信する">
</form>
</body>
</html>
