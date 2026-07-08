<?php
include "db.php";

if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    $result = $conn->query("SELECT * FROM news WHERE id=$id");

    if($row = $result->fetch_assoc()){
        echo '<h4>'.htmlspecialchars($row['title']).'</h4>';
        echo '<p><strong>Category:</strong> '.htmlspecialchars($row['category']).'</p>';
        echo '<p><strong>Date:</strong> '.date("d M, Y", strtotime($row['publish_date'])).'</p>';
        if($row['image'] && file_exists($row['image'])){
            echo '<img src="'.$row['image'].'" class="img-fluid mb-3" alt="">';
        }
        echo '<div>'.nl2br(htmlspecialchars($row['content'])).'</div>';
    } else {
        echo '<div class="alert alert-warning">News not found.</div>';
    }
} else {
    echo '<div class="alert alert-danger">Invalid request.</div>';
}
