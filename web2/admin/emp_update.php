<?php
include 'db.php';

$epf_no = $_POST['epf_no'];
$emp_name = $_POST['emp_name'];
$designation = $_POST['designation'];
$dep_name = $_POST['dep_name'];
$iponment_date = $_POST['iponment_date'];
$emp_Address_per = $_POST['emp_Address_per'];
$emp_Address_resident = $_POST['emp_Address_resident'];
$contact_num_per = $_POST['contact_num_per'];
$contact_num_off = $_POST['contact_num_off'];
$email_per = $_POST['email_per'];
$email_off = $_POST['email_off'];

$update_img = "";
if (!empty($_FILES['emp_img']['name'])) {
    $update_img = time() . "_" . $_FILES['emp_img']['name'];
    move_uploaded_file($_FILES['emp_img']['tmp_name'], "upload/" . $update_img);
    $img_sql = ", emp_img='$update_img'";
} else {
    $img_sql = "";
}

$sql = "UPDATE employees  SET 
emp_name='$emp_name', designation='$designation', dep_name='$dep_name', 
iponment_date='$iponment_date', emp_Address_per='$emp_Address_per', emp_Address_resident='$emp_Address_resident',
contact_num_per='$contact_num_per', contact_num_off='$contact_num_off',
email_per='$email_per', email_off='$email_off' $img_sql WHERE epf_no='$epf_no'";

echo ($conn->query($sql)) ? "Employee updated successfully!" : "Error: " . $conn->error;
?>
