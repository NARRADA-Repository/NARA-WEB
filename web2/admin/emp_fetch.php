<?php
include 'db.php';

// If epf_no is sent via POST → return single employee for edit
if (isset($_POST['epf_no'])) {
    $id = $_POST['epf_no'];
    $stmt = $conn->prepare("SELECT * FROM employees  WHERE epf_no = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    echo json_encode($result->fetch_assoc());
    exit;
}

// Otherwise → return all active employees for DataTable
$result = $conn->query("SELECT * FROM employees  WHERE status='1'");
$data = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode(['data' => $data]);
?>
