<?php
$mysqli = new mysqli("localhost", "root", "", "nara_db");
if ($mysqli->connect_error) { die("Connection failed: " . $mysqli->connect_error); }

$action = $_POST['action'] ?? '';

// CREATE
if ($action == "create") {
    $title = $_POST['job_title'];
    $publish = $_POST['publish_date'];
    $closing = $_POST['closing_date'];

    $imagePath = "";
    $pdfPath = "";
    if (!empty($_FILES['image']['name'])) {
        $imagePath = "uploads/" . time() . "_" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    }
    if (!empty($_FILES['pdf']['name'])) {
        $pdfPath = "uploads/" . time() . "_" . $_FILES['pdf']['name'];
        move_uploaded_file($_FILES['pdf']['tmp_name'], $pdfPath);
    }

    $stmt = $mysqli->prepare("INSERT INTO vacancies (job_title, publish_date, closing_date, image, pdf) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $title, $publish, $closing, $imagePath, $pdfPath);
    $stmt->execute();
    echo "success";
}

// READ
if ($action == "read") {
    $result = $mysqli->query("SELECT * FROM vacancies ORDER BY id DESC");
    echo '<table class="table table-bordered"><thead><tr>
            <th>Job Title</th><th>Publish Date</th><th>Closing Date</th>
            <th>Image</th><th>PDF</th><th>Action</th>
          </tr></thead><tbody>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['job_title']}</td>
                <td>{$row['publish_date']}</td>
                <td>{$row['closing_date']}</td>
                <td>" . (!empty($row['image']) ? "<img src='../{$row['image']}' width='60'>" : "") . "</td>
                <td>" . (!empty($row['pdf']) ? "<a href='../{$row['pdf']}' target='_blank'>View PDF</a>" : "") . "</td>
                <td>
                  <button class='btn btn-sm btn-warning editBtn' data-id='{$row['id']}'>Edit</button>
                  <button class='btn btn-sm btn-danger deleteBtn' data-id='{$row['id']}'>Delete</button>
                </td>
              </tr>";
    }
    echo '</tbody></table>';
}

// GET (for edit)
if ($action == "get") {
    $id = $_POST['id'];
    $res = $mysqli->query("SELECT * FROM vacancies WHERE id=$id");
    echo json_encode($res->fetch_assoc());
}

// UPDATE
if ($action == "update") {
    $id = $_POST['id'];
    $title = $_POST['job_title'];
    $publish = $_POST['publish_date'];
    $closing = $_POST['closing_date'];

    $row = $mysqli->query("SELECT * FROM vacancies WHERE id=$id")->fetch_assoc();
    $imagePath = $row['image'];
    $pdfPath = $row['pdf'];

    if (!empty($_FILES['image']['name'])) {
        $imagePath = "uploads/" . time() . "_" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    }
    if (!empty($_FILES['pdf']['name'])) {
        $pdfPath = "uploads/" . time() . "_" . $_FILES['pdf']['name'];
        move_uploaded_file($_FILES['pdf']['tmp_name'], $pdfPath);
    }

    $stmt = $mysqli->prepare("UPDATE vacancies SET job_title=?, publish_date=?, closing_date=?, image=?, pdf=? WHERE id=?");
    $stmt->bind_param("sssssi", $title, $publish, $closing, $imagePath, $pdfPath, $id);
    $stmt->execute();
    echo "success";
}

// DELETE
if ($action == "delete") {
    $id = $_POST['id'];
    $mysqli->query("DELETE FROM vacancies WHERE id=$id");
    echo "deleted";
}
?>
