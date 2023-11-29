<footer class="main-footer" style="text-align: center;background-color:#F4F6F9;">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.2.0
  </div>
  <strong>Copyright &copy; 2023 <a href="#">impaxsoft.tk</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>public/dist/js/adminlte.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo base_url() ?>public/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>






<script src="<?php echo base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>public/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>



<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<!-- <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
<script>let table = new DataTable('#mytables', {
    pagingType: 'full_numbers'
  });
  let citytable = new DataTable('#mycitytable', {
    pagingType: 'full_numbers'
  });</script> -->


<!-- Select2 -->
<script src="<?php echo base_url() ?>public/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  })
</script>
<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>


<script src="<?php echo base_url() ?>public/assets/js/custom.js"></script>
<!-- <script src="<?php // echo base_url() ?>public/assets/js/delete.js"></script> -->

<script>
  $(document).ready(function () {

    $(document).on('click', '.delete-button', function () {
      var id = $(this).data('id');
      $('.delete-confirm-button').data('id', id);
    });

    $(document).on('click', '.reset-button', function () {
      var id = $(this).data('id');
      $('.reset-price-confirm-button').data('id', id);
    });


    $(document).on('click', '.delete-confirm-button', function () {
      var id = $(this).data('id');
      $.ajax({
        method: 'POST',
        url: '<?php echo base_url() ?>/ajaxdeleteshopkeeper',
        data: {
          'id': id
        },
        success: function (response) {
          console.log("All Process is okay");
          if (response.success) {
            // Display a success message (optional)
            // alert(response.message);
            // Redirect to the countrycitylists page
            window.location.href = response.redirect;
          } else {
            // Display an error message or handle errors
            alert('Error: ' + response.message);
          }
        },
        error: function (errorThrown) {
          // Handle error case
          console.log(errorThrown);
        }
      });

      console.log('Delete ID:', id);
      // Perform the delete operation using the ID value
    });


    $(document).on('click', '.reset-price-confirm-button', function () {
      var id = $(this).data('id');
      $.ajax({
        method: 'POST',
        url: '<?php echo base_url() ?>/resetprice',
        data: {
          'id': id
        },
        success: function (response) {
          console.log("All Process is okay");
          if (response.success) {
            // Display a success message (optional)
            // alert(response.message);
            // Redirect to the countrycitylists page
            window.location.href = response.redirect;
          } else {
            // Display an error message or handle errors
            alert('Error: ' + response.message);
          }
        },
        error: function (errorThrown) {
          // Handle error case
          console.log(errorThrown);
        }
      });
    });
  });
</script>


</body>

</html>