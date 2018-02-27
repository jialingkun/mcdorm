<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>McDorm</title>

  <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/site.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/flag-icon-css/flag-icon.css">

  <!-- Plugin -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables-bootstrap/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables-responsive/dataTables.responsive.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/chartist-js/chartist.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/aspieprogress/asPieProgress.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/blueimp-file-upload/jquery.fileupload.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/icheck/icheck.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-select/bootstrap-select.css">

  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dashboard/v2.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/brand-icons/brand-icons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/font-awesome/font-awesome.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!-- Inline -->
  <style>
  .bootstrap-select {
    width: 100% !important;
  }
  
  @media (max-width: 480px) {
    .panel-actions .dataTables_length {
      display: none;
    }
  }
  
  @media (max-width: 320px) {
    .panel-actions .dataTables_filter {
      display: none;
    }
  }
  
  @media (max-width: 767px) {
    .dataTables_length {
      float: left;
    }
  }
  
  #exampleTableAddToolbar {
    padding-left: 30px;
  }

  @media (min-width: 768px) and (max-width: 992px) {
    .form-inline .control-label {
      display: block;
    }
    .form-inline .form-group {
      margin-bottom: 20px;
      vertical-align: baseline;
    }
  }
</style>

<!-- Scripts -->
<script src="<?php echo base_url(); ?>assets/vendor/modernizr/modernizr.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/breakpoints/breakpoints.js"></script>
<script>
  Breakpoints();
</script>
</head>

<body>