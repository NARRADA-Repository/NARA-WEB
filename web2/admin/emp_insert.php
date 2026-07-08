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

$emp_img = "";
if (!empty($_FILES['emp_img']['name'])) {
    $emp_img = time() . "_" . $_FILES['emp_img']['name'];
    move_uploaded_file($_FILES['emp_img']['tmp_name'], "upload/" . $emp_img);
}

$sql = "INSERT INTO employees  
(epf_no, emp_name, designation, dep_name, iponment_date, emp_Address_per, emp_Address_resident,
contact_num_per, contact_num_off, email_per, email_off, emp_img, status)
VALUES ('$epf_no','$emp_name','$designation','$dep_name','$iponment_date','$emp_Address_per','$emp_Address_resident',
'$contact_num_per','$contact_num_off','$email_per','$email_off','$emp_img','1')";

echo ($conn->query($sql)) ? "Employee added successfully!" : "Error: " . $conn->error;
?>
