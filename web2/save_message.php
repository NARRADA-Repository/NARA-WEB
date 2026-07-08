<?php
$servername = "localhost";
$username = "root"; // change if different
$password = ""; // change if needed
$dbname = "nara_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);
    $status = '1';

    $sql = "INSERT INTO tbl_directmsg (m_name, m_email, m_subject, m_msg, m_status) 
            VALUES ('$name', '$email', '$subject', '$message', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }
}

$conn->close();
?>
