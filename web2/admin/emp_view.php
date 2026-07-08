<?php
include 'db.php';

if (isset($_POST['epf_no'])) {
    $epf_no = $_POST['epf_no'];
   $stmt = $conn->prepare("SELECT * FROM employees  WHERE epf_no = ?");

    $stmt->bind_param("s", $epf_no);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    echo json_encode($data);
}
?>
