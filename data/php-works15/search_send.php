

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>検索アプリ</h1>
  <p>名前の一致する会員を一覧にしよう</p>

  <form action="search_receive.php" method="POST">
    <label for="name">名前</label>
    <input type="text" name="name">
    <input type="submit" value="検索する">
  </form>
</body>
</html>
