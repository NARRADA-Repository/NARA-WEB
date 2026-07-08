<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>NARA | Dashboard </title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <link rel="stylesheet" href="css/select2.css">
    <link rel="stylesheet" href="css/dropzone.css">
    <link rel="stylesheet" href="css/uppy.min.css">
    <link rel="stylesheet" href="css/jquery.steps.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 6 CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  </head>
  <body class="vertical  light  ">
   <div class="wrapper">
<?php

require('d-nav.php');

?>
  <main role="main" class="main-content">
     
<div class="container mt-5">
  <h2 class="mb-4 text-center">Employee Management System</h2>

  <button class="btn btn-primary mb-3" id="addBtn">Add Employee</button>

  <table id="employeeTable" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>EPF No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Department</th>
        <th>Appointment Date</th>
        <th>Personal Contact</th>
        <th>Actions</th>
      </tr>
    </thead>
  </table>
</div>

<!-- Employee Modal -->
<div class="modal fade" id="employeeModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="employeeForm" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title">Add Employee</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body row g-3">
          <input type="hidden" name="action" id="action" value="insert">
          <div class="col-md-6">
            <label>EPF No</label>
            <input type="text" name="epf_no" id="epf_no" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label>Employee Name</label>
            <input type="text" name="emp_name" id="emp_name" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label>Designation</label>
            <input type="text" name="designation" id="designation" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label>Department</label>
            <input type="text" name="dep_name" id="dep_name" class="form-control">
          </div>
          <div class="col-md-6">
            <label>Appointment Date</label>
            <input type="date" name="iponment_date" id="iponment_date" class="form-control">
          </div>
          <div class="col-md-6">
            <label>Personal Address</label>
            <input type="text" name="emp_Address_per" id="emp_Address_per" class="form-control">
          </div>
          <div class="col-md-6">
            <label>Resident Address</label>
            <input type="text" name="emp_Address_resident" id="emp_Address_resident" class="form-control">
          </div>
          <div class="col-md-6">
            <label>Personal Contact</label>
            <input type="text" name="contact_num_per" id="contact_num_per" class="form-control">
          </div>
          <div class="col-md-6">
            <label>Office Contact</label>
            <input type="text" name="contact_num_off" id="contact_num_off" class="form-control">
          </div>
          <div class="col-md-6">
            <label>Personal Email</label>
            <input type="email" name="email_per" id="email_per" class="form-control">
          </div>
          <div class="col-md-6">
            <label>Office Email</label>
            <input type="email" name="email_off" id="email_off" class="form-control">
          </div>
          <div class="col-md-6">
            <label>Employee Image</label>
            <input type="file" name="emp_img" id="emp_img" class="form-control">
            <img id="preview_img" src="" class="mt-2" width="100">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- View Employee Modal -->
<div class="modal fade" id="viewEmployeeModal" tabindex="-1" aria-labelledby="viewEmployeeLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="viewEmployeeLabel1">Employee Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4 text-center">
            <img id="view_emp_img" src="" alt="Employee Image" class="img-fluid rounded mb-3" style="max-height: 200px;">
          </div>
          <div class="col-md-8">
            <table class="table table-borderless">
              <tr><th>EPF No:</th><td id="view_epf_no"></td></tr>
              <tr><th>Name:</th><td id="view_emp_name"></td></tr>
              <tr><th>Designation:</th><td id="view_designation"></td></tr>
              <tr><th>Department:</th><td id="view_dep_name"></td></tr>
              <tr><th>Appointment Date:</th><td id="view_appointment_date"></td></tr>
              <tr><th>Personal Address:</th><td id="view_address_per"></td></tr>
              <tr><th>Resident Address:</th><td id="view_address_resident"></td></tr>
              <tr><th>Personal Contact:</th><td id="view_contact_per"></td></tr>
              <tr><th>Office Contact:</th><td id="view_contact_off"></td></tr>
              <tr><th>Personal Email:</th><td id="view_email_per"></td></tr>
              <tr><th>Office Email:</th><td id="view_email_off"></td></tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



      </main> <!-- main -->
    </div> <!-- .wrapper -->

    
  <!-- jQuery first -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Bootstrap Bundle JS (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<!-- Other JS Libraries -->
<script src="js/simplebar.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/jquery.stickOnScroll.js"></script>
<script src="js/tinycolor-min.js"></script>
<script src="js/config.js"></script>
<script src="js/d3.min.js"></script>
<script src="js/topojson.min.js"></script>
<script src="js/datamaps.all.min.js"></script>
<script src="js/datamaps-zoomto.js"></script>
<script src="js/datamaps.custom.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/gauge.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/apexcharts.min.js"></script>
<script src="js/apexcharts.custom.js"></script>
<script src="js/jquery.mask.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/jquery.steps.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.timepicker.js"></script>
<script src="js/dropzone.min.js"></script>
<script src="js/uppy.min.js"></script>
<script src="js/quill.min.js"></script>
<script src="js/apps.js"></script>

<script>
$(document).ready(function() {
  var table = $('#employeeTable').DataTable({
    ajax: 'emp_fetch.php',
    columns: [
      { data: 'epf_no' },
      { data: 'emp_img', render: function (data) {
          return data ? `<img src="upload/${data}" width="50" class="rounded">` : 'No Image';
        }
      },
      { data: 'emp_name' },
      { data: 'designation' },
      { data: 'dep_name' },
      { data: 'iponment_date' },
      { data: 'contact_num_per' },
      { 
        data: null,
        render: function (data) {
          return `
            <button class="btn btn-info btn-sm view" data-id="${data.epf_no}"><i class="fas fa-eye"></i></button>
            <button class="btn btn-warning btn-sm edit" data-id="${data.epf_no}"><i class="fas fa-edit"></i></button>
            <button class="btn btn-danger btn-sm delete" data-id="${data.epf_no}"><i class="fas fa-trash"></i></button>
          `;
        }
      }
    ]
  });





  $('#addBtn').click(function() {
    $('#employeeForm')[0].reset();
    $('#preview_img').attr('src', '');
    $('#action').val('insert');
    $('.modal-title').text('Add Employee');
    $('#epf_no').prop('readonly', false);
    $('#employeeModal').modal('show');
  });

  $('#employeeForm').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
      url: $('#action').val() == 'insert' ? 'emp_insert.php' : 'emp_update.php',
      type: 'POST',
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function(res) {
        Swal.fire('Success', res, 'success');
        $('#employeeForm')[0].reset();
        $('#employeeModal').modal('hide');
        table.ajax.reload();
      }
    });
  });

// Edit employee
$('#employeeTable').on('click', '.edit', function() {
  var id = $(this).data('id');
  $.ajax({
    url: 'emp_fetch.php',
    type: 'POST',
    data: { epf_no: id },
    dataType: 'json',
    success: function(emp) {
      if (emp) {
        $('#epf_no').val(emp.epf_no);
        $('#emp_name').val(emp.emp_name);
        $('#designation').val(emp.designation);
        $('#dep_name').val(emp.dep_name);
        $('#iponment_date').val(emp.iponment_date);
        $('#emp_Address_per').val(emp.emp_Address_per);
        $('#emp_Address_resident').val(emp.emp_Address_resident);
        $('#contact_num_per').val(emp.contact_num_per);
        $('#contact_num_off').val(emp.contact_num_off);
        $('#email_per').val(emp.email_per);
        $('#email_off').val(emp.email_off);
        
        if (emp.emp_img) {
          $('#preview_img').attr('src', 'upload/' + emp.emp_img);
        } else {
          $('#preview_img').attr('src', '');
        }

        $('#action').val('update');
        $('.modal-title').text('Edit Employee');
        $('#epf_no').prop('readonly', true);
        $('#employeeModal').modal('show');
      } else {
        Swal.fire('Error', 'Employee not found!', 'error');
      }
    },
    error: function(xhr, status, error) {
      Swal.fire('Error', 'Could not fetch employee data.', 'error');
      console.log(error);
    }
  });
});


  $('#employeeTable').on('click', '.delete', function() {
    var id = $(this).data('id');
    Swal.fire({
      title: 'Are you sure?',
      text: "This will deactivate the employee!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.post('emp_delete.php', { epf_no: id }, function(res) {
          Swal.fire('Deleted!', res, 'success');
          table.ajax.reload();
        });
      }
    });
  });
});


// VIEW BUTTON EVENT
  $(document).on('click', '.view', function() {
    var epf_no = $(this).data('id');
    $.ajax({
      url: 'emp_view.php',
      type: 'POST',
      data: { epf_no: epf_no },
      dataType: 'json',
      success: function(data) {
        $('#view_epf_no').text(data.epf_no);
        $('#view_emp_name').text(data.emp_name);
        $('#view_designation').text(data.designation);
        $('#view_dep_name').text(data.dep_name);
        $('#view_appointment_date').text(data.iponment_date);
        $('#view_address_per').text(data.emp_Address_per);
        $('#view_address_resident').text(data.emp_Address_resident);
        $('#view_contact_per').text(data.contact_num_per);
        $('#view_contact_off').text(data.contact_num_off);
        $('#view_email_per').text(data.email_per);
        $('#view_email_off').text(data.email_off);

        if (data.emp_img) {
          $('#view_emp_img').attr('src', 'upload/' + data.emp_img);
        } else {
          $('#view_emp_img').attr('src', 'default.png');
        }

        $('#viewEmployeeModal').modal('show');
      }
    });
  });


</script>
<script>
  Swal.fire({
  title: 'Loading...',
  didOpen: () => { Swal.showLoading(); }
});
Swal.close();

</script>
    <script>
      $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
      $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
      $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'MM/DD/YYYY'
        }
      });
      $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
      /** date range picker */
      if ($('.datetimes').length)
      {
        $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
      }
      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end)
      {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
      $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
      cb(start, end);
      $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
      $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
      $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
      $('.input-phoneus').mask('(000) 000-0000');
      $('.input-mixed').mask('AAA 000-S0S');
      $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
      // editor
      var editor = document.getElementById('editor');
      if (editor)
      {
        var toolbarOptions = [
          [
          {
            'font': []
          }],
          [
          {
            'header': [1, 2, 3, 4, 5, 6, false]
          }],
          ['bold', 'italic', 'underline', 'strike'],
          ['blockquote', 'code-block'],
          [
          {
            'header': 1
          },
          {
            'header': 2
          }],
          [
          {
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }],
          [
          {
            'script': 'sub'
          },
          {
            'script': 'super'
          }],
          [
          {
            'indent': '-1'
          },
          {
            'indent': '+1'
          }], // outdent/indent
          [
          {
            'direction': 'rtl'
          }], // text direction
          [
          {
            'color': []
          },
          {
            'background': []
          }], // dropdown with defaults from theme
          [
          {
            'align': []
          }],
          ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });
      }
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function()
      {
        'use strict';
        window.addEventListener('load', function()
        {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form)
          {
            form.addEventListener('submit', function(event)
            {
              if (form.checkValidity() === false)
              {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
      var uptarg = document.getElementById('drag-drop-area');
      if (uptarg)
      {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
        {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: 'dark',
          width: 770,
          height: 210,
          plugins: ['Webcam']
        }).use(Uppy.Tus,
        {
          endpoint: 'https://master.tus.io/files/'
        });
        uppy.on('complete', (result) =>
        {
          console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
      }
    </script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>