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
  $colors = $_POST["colors"];
  //var_dump($colors);
?>

<ul>
<?php foreach ($colors as $key => $value) { ?>
  <li><?php echo $value; ?></li>
<?php } ?>
</ul>





</body>
</html>
