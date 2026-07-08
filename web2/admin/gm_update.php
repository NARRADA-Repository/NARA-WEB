<?php
include 'db2.php';
$id = $_GET['id'];
$result = $connect->query("SELECT * FROM tbl_board_member WHERE bm_id='$id'");
echo json_encode($result->fetch_assoc());
?>
