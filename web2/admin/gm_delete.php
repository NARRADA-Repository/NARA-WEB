<?php
include 'db2.php';
$id = $_POST['id'];
$query = "UPDATE tbl_board_member SET bm_status = '0' WHERE bm_id = '$id'";
$connect->query($query);
echo "Member deactivated successfully!";
?>
