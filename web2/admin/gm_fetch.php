<?php
include 'db2.php';

$query = "SELECT * FROM tbl_board_member WHERE bm_status = 1 ORDER BY bm_id DESC";
$result = $connect->query($query);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode(['data' => $data]);
?>
