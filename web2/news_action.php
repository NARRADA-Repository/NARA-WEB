<?php
include "db.php";
$action = $_GET['action'] ?? '';

if ($action == "save") {
    $id = $_POST['id'] ?? '';
    $title = $_POST['title'];
    $publish_date = $_POST['publish_date'];
    $category = $_POST['category'];
    $content = $_POST['content'];

    $image = "";
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "uploads/";
        if (!file_exists($targetDir)) mkdir($targetDir);
        $image = $targetDir . time() . "_" . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $image);
    }

    if ($id) {
        // update
        if ($image) {
            $stmt = $conn->prepare("UPDATE news SET title=?, publish_date=?, category=?, image=?, content=? WHERE id=?");
            $stmt->bind_param("sssssi", $title, $publish_date, $category, $image, $content, $id);
        } else {
            $stmt = $conn->prepare("UPDATE news SET title=?, publish_date=?, category=?, content=? WHERE id=?");
            $stmt->bind_param("ssssi", $title, $publish_date, $category, $content, $id);
        }
        $stmt->execute();
        echo json_encode(["status"=>"success","message"=>"News updated"]);
    } else {
        // insert
        $stmt = $conn->prepare("INSERT INTO news (title,publish_date,category,image,content) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss", $title,$publish_date,$category,$image,$content);
        $stmt->execute();
        echo json_encode(["status"=>"success","message"=>"News added"]);
    }
}

elseif ($action == "view") {
    $result = $conn->query("SELECT * FROM news ORDER BY id DESC");
    echo "<table class='table table-bordered table-striped'>
            <tr><th>ID</th><th>Title</th><th>Category</th><th>Date</th><th>Image</th><th>Action</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['title']}</td>
                <td>{$row['category']}</td>
                <td>{$row['publish_date']}</td>
                <td>".($row['image'] ? "<img src='{$row['image']}' class='news-img'>" : "No")."</td>
                <td>
                    <button onclick='editNews({$row['id']})' class='btn btn-warning btn-sm'>Edit</button>
                    <button onclick='deleteNews({$row['id']})' class='btn btn-danger btn-sm'>Delete</button>
                </td>
              </tr>";
    }
    echo "</table>";
}

elseif ($action == "get") {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM news WHERE id=$id");
    echo json_encode($result->fetch_assoc());
}

elseif ($action == "delete") {
    $id = $_GET['id'];
    $conn->query("DELETE FROM news WHERE id=$id");
    echo json_encode(["status"=>"success","message"=>"News deleted"]);
}
