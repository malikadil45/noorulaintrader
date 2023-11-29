$(document).ready(function () {

    $(document).on('click', '.delete-button', function () {
      var id = $(this).data('id');
      $('.delete-confirm-button').data('id', id);
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


    



  });