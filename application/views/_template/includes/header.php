<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The GamingPlace </title>
	<base href="<?php echo base_url();?>">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">

 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
  </head>

  <body>

	<!-- nav here -->
	<?php $this->load->view('_template/includes/nav.php'); ?>

	<div class="container">

	<div class="row">
    <div class="col-md-4">

    <!-- Cart here -->
    <?php  $this->load->view('_template/includes/cart.php'); ?>

    <!-- sidebar here  -->
    <?php $this->load->view('_template/includes/sidebar.php');  ?>

    </div><!-- ./col-md-4 -->

    <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading panel-heading-green">
              <h3 class="panel-title">The GamingPlace</h3>
            </div>
            <div class="panel-body">
              <div class="content">
