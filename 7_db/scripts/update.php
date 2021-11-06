<?php
  session_start();
  if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
      if (empty($value)) {
        $_SESSION['error'] = "<br>Wypełnij wszystkie pola w formularzu!<br>";
        echo "<script>history.back()</script>";
        exit();
      }
    }
    require_once './connect.php';

    $sql="UPDATE `users` SET `city_id` = '$_POST[city_id]', `name` = '$_POST[name]', `surname` = '$_POST[surname]', `birthday` = '$_POST[birthday]' WHERE `users`.`user_id` = $_POST[user_id]; ";

    $connect->query($sql);

    if ($connect->affected_rows) {
      $_SESSION['error'] = "Prawidłowo dodano użytkownika";
    }
  }

  // header("location: ../4_db_select_table_delete_insert.php?addUser=");
  header("location: ../5_db_select_table_delete_insert_update.php?addUser=");
 ?>
