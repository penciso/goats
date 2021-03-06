<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title ><?= $title; ?>&nbsp;&mdash;&nbsp;Goats Organize Application Tracking System</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome">

	<link rel="stylesheet" href="<?= base_url()?>public/css/app.css" >

</head>
<body>
	
	<main role="main">
		<?php $this->load->view($body); ?>
	</main>

	<!--Starter Template-->
	<script src="<?= base_url()?>public/js/jquery-3.3.1.slim.min.js"></script>
	<script src="<?= base_url()?>public/js/jquery.slimscroll.js"></script>

    <script src="<?= base_url()?>public/js/popper.min.js"></script>    
    <script src="<?= base_url()?>public/js/bootstrap.min.js"></script>

   
    
	<script type="text/javascript">
		//$("[data-toggle=popover]").popover();
		$(document).ready(function(){
			$(function () {

				$('.sidebar').slimScroll({
					height: '100vh',
					width: '100%',

					position: 'right',
					top: '20px',
					size : '3px',
					barClass : 'slimScrollBar_new',
					alwaysVisible: true,
				})

				$('.body').slimScroll({
					height: '100vh',
					width: '100%',
					size: '3px',
				})

				$('[data-toggle="tooltip"]').tooltip()

		  		$('#err_username').popover('show',{
					container: 'body'
				})

				$('#myModal').on('shown.bs.modal', function () {
					$('#myInput').trigger('focus')
				})

				$('body').scrollspy({ target: '#navbar-example' })

				$('[data-spy="scroll"]').each(function () {
						var $spy = $(this).scrollspy('refresh')
				})

			})			
		});

	</script>
</body>
</html>