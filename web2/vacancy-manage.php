<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vacancy Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="p-4">

<div class="container mt-4">
  <h3>Add / Edit Vacancy</h3>
  <form id="vacancyForm" enctype="multipart/form-data">
    <input type="hidden" id="vacancy_id" name="id">

    <div class="mb-3">
      <label class="form-label">Job Title</label>
      <input type="text" class="form-control" id="job_title" name="job_title" required>
    </div>

    <div class="row">
      <div class="col-md-6 mb-3">
        <label class="form-label">Publish Date</label>
        <input type="date" class="form-control" id="publish_date" name="publish_date" required>
      </div>
      <div class="col-md-6 mb-3">
        <label class="form-label">Closing Date</label>
        <input type="date" class="form-control" id="closing_date" name="closing_date" required>
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Upload Image</label>
      <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>

    <div class="mb-3">
      <label class="form-label">Upload PDF</label>
      <input type="file" class="form-control" id="pdf" name="pdf" accept="application/pdf">
    </div>

    <button type="submit" class="btn btn-primary">Save Vacancy</button>
    <button type="button" id="resetBtn" class="btn btn-secondary">Reset</button>
  </form>

  <hr>
  <h3>Vacancy List</h3>
  <div id="vacancyList"></div>
</div>

<script>
// Load vacancies
function loadVacancies() {
  $.post("vacancy_action.php", { action: "read" }, function(data) {
    $("#vacancyList").html(data);
  });
}

// Reset form
$("#resetBtn").click(function() {
  $("#vacancyForm")[0].reset();
  $("#vacancy_id").val("");
});

// Add / Update vacancy
$("#vacancyForm").submit(function(e) {
  e.preventDefault();
  var formData = new FormData(this);
  formData.append("action", $("#vacancy_id").val() ? "update" : "create");

  $.ajax({
    url: "vacancy_action.php",
    type: "POST",
    data: formData,
    processData: false,
    contentType: false,
    success: function(response) {
      if (response === "success") {
        Swal.fire({
          icon: "success",
          title: ($("#vacancy_id").val() ? "Vacancy Updated!" : "Vacancy Added!"),
          timer: 1500,
          showConfirmButton: false
        });
        $("#vacancyForm")[0].reset();
        $("#vacancy_id").val("");
        loadVacancies();
      } else {
        Swal.fire("Error", response, "error");
      }
    }
  });
});

// Delete vacancy
$(document).on("click", ".deleteBtn", function() {
  var id = $(this).data("id");
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes, delete it!"
  }).then((result) => {
    if (result.isConfirmed) {
      $.post("vacancy_action.php", { action: "delete", id: id }, function(resp) {
        if (resp === "deleted") {
          Swal.fire({
            icon: "success",
            title: "Deleted!",
            text: "Vacancy has been removed.",
            timer: 1500,
            showConfirmButton: false
          });
          loadVacancies();
        }
      });
    }
  });
});

// Edit vacancy
$(document).on("click", ".editBtn", function() {
  var id = $(this).data("id");
  $.post("vacancy_action.php", { action: "get", id: id }, function(resp) {
    var data = JSON.parse(resp);
    $("#vacancy_id").val(data.id);
    $("#job_title").val(data.job_title);
    $("#publish_date").val(data.publish_date);
    $("#closing_date").val(data.closing_date);
    $("html, body").animate({ scrollTop: 0 }, "fast");
  });
});

// Initial load
$(document).ready(function() {
  loadVacancies();
});
</script>
</body>
</html>
