<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php echo $page_title;?></title>
		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<link rel="stylesheet" href="<?php echo base_url() . $asset_url; ?>font-awesome/4.5.0/css/font-awesome.min.css" />

		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() . $asset_url; ?>font-awesome/4.5.0/css/font-awesome.min.css" />
	


		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>dropzone.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>fonts.googleapis.com.css" />
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<!-- ace styles -->


		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		

<!-- Bootstrap 4.0-->
<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>bootstrap.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>bootstrap-extend.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>master_style.css">
	
	<!-- SoftMaterial admin skins -->
	<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>_all-skins.css">
	  
	<!-- weather weather -->
	<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>weather-icons.css">	
   
    <!-- Vector CSS -->
    <link href="<?php echo base_url() . $css_url; ?>jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	
	<!-- Morris charts -->
	<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>morris.css"> 	


<!-- text fonts -->
<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>fonts.googleapis.com.css" />

	</head>

	<body class="no-skin">
	<?php echo $page_header;?>

  				
<?php echo $page_menu;?>




<?php echo $page_content;?>



<?php echo $page_footer;?>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

<!-- Bootstrap 4.0-->


<script src="<?php echo base_url() . $js_url; ?>bootstrap.js"></script>	




<!-- SoftMaterial admin App -->
<script src="<?php echo base_url() . $js_url; ?>template.js"></script>


<!-- SoftMaterial admin for demo purposes -->
<script src="<?php echo base_url() . $js_url; ?>demo.js"></script>

<script>
        $(document).ready(function () {
            $("#myTable").DataTable();
        });
    </script>
	</body>
</html>
