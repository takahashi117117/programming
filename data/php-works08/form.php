<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<!-- 繰り返し文での入力フォームの作成 -->
<form action="">
  <label for="year">西暦</label>
  <select name="year">
    <?php
      $now = date("Y");
      for ($i = 1950; $i <= $now; $i++) { ?>
        <option value="<?php echo $i ?>"><?php echo $i ?></option>
    <?php } ?>
  </select>年
  <br>
  <select name="month">
    <?php
      for ($i = 1; $i <= 12; $i++) { ?>
      <option value="<?php echo $i ?>"><?php echo $i ?></option>
    <?php } ?>
  </select>月
  <br>
  <select name="day">
  <?php
      for ($i = 1; $i <= 31; $i++) { ?>
      <option value="<?php echo $i ?>"><?php echo $i ?></option>
    <?php } ?>
  </select>日
</form>


</body>
</html>
