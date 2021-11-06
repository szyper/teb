<?php
  session_start();
  if (!empty($_GET['deleteId'])) {
    require_once './connect.php';
    // $sql = "DELETE FROM `users` WHERE `users`.`user_id` = -1";
    // $sql = "DELETE FROM `users` WHERE `users`.`name` = 'Jan'";
    $sql = "DELETE FROM `users` WHERE `users`.`user_id` = $_GET[deleteId]";
    $connect->query($sql);
    if ($connect->affected_rows) {
      $_SESSION['error']['count'] = array(
        'person' => $connect->affected_rows,
        'id' => "$_GET[deleteId]"
      );
    }else {
      $_SESSION['error']['info']='Nie udało się usunąć rekordu!';
    }
  }

  // header("location: ../3_db_select_table_delete.php");
  // header("location: ../4_db_select_table_delete_insert.php");
  header("location: ../5_db_select_table_delete_insert_update.php");
 ?>
