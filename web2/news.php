<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>News Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    .news-img { max-width: 100px; }
  </style>
</head>
<body class="p-4">





<div class="container">
  <h2 class="mb-4">News Management</h2>
  <div id="alertBox"></div>

  <!-- Add/Edit Form -->
  <form id="newsForm" enctype="multipart/form-data">
    <input type="hidden" name="id" id="newsId">
    <div class="row">
      <div class="col-md-6 mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" required>
      </div>
      <div class="col-md-6 mb-3">
        <label class="form-label">Publish Date</label>
        <input type="date" name="publish_date" id="publish_date" class="form-control" required>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label class="form-label">Category</label>
        <select name="category" id="category" class="form-select" required>
          <option value="News">News</option>
          <option value="NARA in Media">NARA in Media</option>
          <option value="Blog Post">Blog Post</option>
          <option value="Session">Session</option>
        </select>
      </div>
      <div class="col-md-6 mb-3">
        <label class="form-label">Image</label>
        <input type="file" name="image" id="image" class="form-control" accept="image/*">
        <small id="currentImage"></small>
      </div>
    </div>
    <div class="mb-3">
      <label class="form-label">Content</label>
      <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <button type="reset" class="btn btn-secondary" onclick="resetForm()">Clear</button>
  </form>

  <hr class="my-4">

  <!-- News Table -->
  <div id="newsTable"></div>
</div>

<script>
function loadNews(){
  fetch("news_action.php?action=view")
    .then(res => res.text())
    .then(html => document.getElementById("newsTable").innerHTML = html);
}

function editNews(id){
  fetch("news_action.php?action=get&id="+id)
    .then(res => res.json())
    .then(data => {
      document.getElementById("newsId").value = data.id;
      document.getElementById("title").value = data.title;
      document.getElementById("publish_date").value = data.publish_date;
      document.getElementById("category").value = data.category;
      document.getElementById("content").value = data.content;
      document.getElementById("currentImage").innerHTML = data.image ? 
        `<img src="${data.image}" class="news-img">` : "";
    });
}

function deleteNews(id){
  if(confirm("Are you sure?")){
    fetch("news_action.php?action=delete&id="+id)
      .then(res => res.json())
      .then(data => {
        alert(data.message);
        loadNews();
      });
  }
}

function resetForm(){
  document.getElementById("newsId").value = "";
  document.getElementById("currentImage").innerHTML = "";
}

document.getElementById("newsForm").addEventListener("submit", function(e){
  e.preventDefault();
  let formData = new FormData(this);

  fetch("news_action.php?action=save", {
    method: "POST",
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    document.getElementById("alertBox").innerHTML = 
      `<div class="alert alert-${data.status}">${data.message}</div>`;
    if(data.status === "success"){
      this.reset();
      resetForm();
      loadNews();
    }
  });
});

loadNews();
</script>
</body>
</html>
