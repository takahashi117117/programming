<?php

//メンバーの配列
  $users = array(
    "admin" => array(
      "id" => 0,
      "name" => "社長",
      "team" => "社長",
      "pass" => "1234"
    ),
    "user1" => array(
      "id" => 1,
      "name" => "鈴木"."<br>",
      "team" => "営業"."<br>",
      "pass" => "1111"
    ),
    "user2" => array(
      "id" => 2,
      "name" => "高橋"."<br>",
      "team" => "経理"."<br>",
      "pass" => "2222"
    ),
    "user3" => array(
      "id" => 3,
      "name" => "山田"."<br>",
      "team" => "営業"."<br>",
      "pass" => "3333"
    )
  );

  $tasks = array(
    "user1" => array(
      "name" => "鈴木",
      "team" => "営業",
      "task" => array("A社訪問","B社資料送付")
    ),
    "user2" => array(
      "name" => "高橋",
      "team" => "経理",
      "task" => array("帳簿処理","請求書発行")
    ),
    "user3" => array(
      "name" => "高橋",
      "team" => "経理",
      "task" => array("請求書発行","先月の締め")
    )
  );

  $id = $_POST["id"];
  $pass = $_POST["pass"];

  ?>

  <html>
    <header>
      <meta charset="UTF-8">
    </header>
    <body>
      <h1>業務管理システム</h1>

  <?php

    //出力条件
    foreach ($users as $key => $user) {
      if( $id == $user["id"] && $pass === $user["pass"] ){
        if( $id == 0 ){ ?>
          <p>社員名：<?php echo $user ["name"]; ?></p>
          <p>チーム：<?php echo $user ["team"]; ?></p>

          <?php
          foreach ($tasks as $all_usertask) {
            echo $all_usertask["name"];
            echo ":";
            echo $all_usertask["team"];
            echo "<br>";
            foreach ($all_usertask["task"] as $usertask) {
              echo $usertask;
              echo "<br>";
            }
          }
        }else { ?>
          <p>社員名：<?php echo $user ["name"]; ?></p>
          <p>チーム：<?php echo $user ["team"]; ?></p>
          <p>タスク一覧：</p>
          <?php
          foreach ($tasks[$key]["task"] as $task) {
            echo $task;
            echo "<br>";
          }
        }
    }else if ( $id == $user["id"] && $pass != $user["pass"] ) {
          echo "パスワードが違います。";
    }
  }
?>

</body>
</html>
