<?php

$dsn = "mysql:host=db; dbname=sample";
$user = "user";
$password = "userpass";
$name = "山田太郎";
$age = 33;

try{
    $dbh = new PDO( $dsn, $user, $password );
    $dbh -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "INSERT INTO user(name, age) VALUES (:name, :age)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':name',$name, PDO::PARAM_STR);
    $stmt->bindValue(':age',$age, PDO::PARAM_INT);
    echo "処理が完了しました";
}catch ( PDOExcepotion $e ) {
    print ($e->getMessage);
    die();
}
