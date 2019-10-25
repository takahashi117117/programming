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
  <h1>確認ページ</h1>
  <p>あなたの名前は、<?php echo $name; ?>さんです。</p>
  <p>あなたは、<?php echo $age; ?>歳です。</p>

  <p>以上の情報で問題ないですか？</p>

<form action="./complete.php" method="POST">
<input type="hidden" name="name" value="<?php echo $name; ?>">
  <input type="hidden" name="age" value="<?php echo $age; ?>">
  <input type="submit" value="送信する">
</form>
</body>
</html>
