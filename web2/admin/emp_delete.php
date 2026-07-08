<?php
include 'db.php';
$epf_no = $_POST['epf_no'];
$conn->query("UPDATE employees  SET status='0' WHERE epf_no='$epf_no'");
echo "Employee deactivated successfully!";
?>
