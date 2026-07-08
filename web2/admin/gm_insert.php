<?php
include 'db2.php';

$bm_id = $_POST['bm_id'] ?? '';
$bm_name = $_POST['bm_name'];
$bm_address = $_POST['bm_address'];
$bm_contact = $_POST['bm_contact'];
$bm_email = $_POST['bm_email'];

if ($bm_id == '') {
    $query = "INSERT INTO tbl_board_member (bm_name, bm_address, bm_contact, bm_email, bm_status)
              VALUES ('$bm_name', '$bm_address', '$bm_contact', '$bm_email', '1')";
    $msg = "Board member added successfully!";
} else {
    $query = "UPDATE tbl_board_member SET 
                bm_name='$bm_name', 
                bm_address='$bm_address', 
                bm_contact='$bm_contact', 
                bm_email='$bm_email'
              WHERE bm_id='$bm_id'";
    $msg = "Board member updated successfully!";
}

$connect->query($query);
echo $msg;
?>
