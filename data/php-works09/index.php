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

//配列と連想配列の練習

    /*
    $array[] = "りんご";
    $array[] = "みかん";
    $array[] = "バナナ";
    */

    //var_dump($array);

    /*
    $array["name"] = "スズキ";
    $array["hobby"] = "テニス";
    $array["email"] = "sample@ss.com";

    echo $array["name"];
    */

    /*
    $array = array("name" => "スズキ", "hobby" => "テニス");

    echo $array["hobby"];
    */

    $array = array(
      "name" => "スズキ",
      "hobby" => "テニス",
      "mail" => "info@www.com",
    );

    foreach ($array as $key => $value) {
      echo $key.":".$value."<br>";
    }
  ?>


</body>
</html>
