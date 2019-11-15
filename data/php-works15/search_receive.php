<?php

if( $_SERVER['REQUEST_METHOD'] === 'POST' ){
    $name = $_POST['name'];
}

$dsn = "mysql:host=db; dbname=sample";
$user = "user";
$password = "userpass";

$data = [];

try{
    $dbh = new PDO($dsn, $user, $password);
    $dbh -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "SELECT id, name FROM user WHERE name LIKE :name";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':name', '%' .$name. '%', PDO::PARAM_STR);
    $stmt -> execute();

    $count = $stmt->rowCount();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }

    }catch ( PDOExcepotion $e ) {
        print ($e->getMessage);
        die();
}
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
    <h1>会員データ</h1>
    <p><?php echo $count; ?>件見つかりました。</p>

    <table>
        <tr>
            <th>ID</th>
            <th>名前</th>
            <?php foreach ($data as $row): ?>
        </tr>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
        </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>
