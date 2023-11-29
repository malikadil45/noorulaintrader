<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "jxqcfkr6xv");
</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php echo $pageTitle; ?>
  </title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="<?php // echo base_url() ?>public/plugins/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- <link rel="stylesheet" href="<?php //echo base_url() ?>public/assets/css/mobiscroll.javascript.min.css">
    <script src="<?php //echo base_url() ?>public/assets/js/mobiscroll.javascript.min.js"></script> -->
    <style type="text/css">
      /* CSS for the overlay */
#overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.9); /* White color with 70% opacity */
  z-index: 9998; /* Set z-index lower than loader to appear behind the loader */
}

      .lds-ring {
  display: none;
  position: fixed;
  width: 80px;
  height: 80px;
  margin-left:100px;
  top: 50%;
  left: 29%;
  transform: translate(-50%, -50%);
  z-index: 9999;
}
.lds-ring div {
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 64px;
  height: 64px;
  margin: 8px;
  /* background-color: darksalmon; */
  border: 8px solid #fff;
  border-radius: 50%;
  animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  border-color: #000 transparent transparent transparent;
}
.lds-ring div:nth-child(1) {
  animation-delay: -0.45s;
 
}
.lds-ring div:nth-child(2) {
  animation-delay: -0.3s;

}
.lds-ring div:nth-child(3) {
  animation-delay: -0.15s;

}
@keyframes lds-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

 
    </style>
    


  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet"
    href="<?php echo base_url() ?>public/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
    href="<?php echo base_url() ?>public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/plugins/select2/css/select2.min.css">
  <link rel="stylesheet"
    href="<?php echo base_url() ?>public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet"
    href="<?php echo base_url() ?>public/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/plugins/dropzone/min/dropzone.min.css">


  <style type="text/css">
    .dataTables_wrapper .dataTables_paginate .paginate_button {
      border: 0px !important;
      padding: 0px !important;
    }

    div.dataTables_wrapper div.dataTables_length select {
      width: 40% !important;
    }

   

  </style>


</head>

<body class="hold-transition sidebar-mini">