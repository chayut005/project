<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php echo $page_title;?></title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>jquery-ui.css" />
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>animate.min.css"/>
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() . $asset_url; ?>font-awesome/4.5.0/css/font-awesome.min.css" />
	
		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>colorbox.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>bootstrap-colorpicker.min.css" />
		<!-- <link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" /> -->

		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>dropzone.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>ace-rtl.min.css" />
		
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>dataTables.checkboxes.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
		
		<!-- inline styles related to this page -->
		
		<!-- ace settings handler -->
		<script src="<?php echo base_url() . $js_url; ?>ace-extra.min.js"></script>
		
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

		

	</head>

	<body class="no-skin">
				<?php echo $page_menu;?>
			
				<?php echo $page_content;?>
				

	</div>



		<!-- basic scripts -->

		<!--[if !IE]> -->
		
		<!-- <![endif]-->

		<!--[if IE]>
		<script src="assets/js/jquery-1.11.3.min.js"></script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url() . $js_url; ?>jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>



		<script src="<?php echo base_url() . $js_url; ?>wizard.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery.validate.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery-additional-methods.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>bootbox.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>spinbox.min.js"></script>

		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<script src="<?php echo base_url() . $js_url; ?>jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>select2.min.js"></script>

		
		
		<script src="<?php echo base_url() . $js_url; ?>jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>buttons.html5.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>buttons.print.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>buttons.flash.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>buttons.colVis.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>dataTables.select.min.js"></script>


		<script src="<?php echo base_url() . $js_url; ?>jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery.easypiechart.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery.sparkline.index.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery.flot.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery.flot.resize.min.js"></script>
		

		

		<script src="<?php echo base_url() . $js_url; ?>dropzone.min.js"></script>

		<script src="<?php echo base_url() . $js_url; ?>bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="<?php echo base_url() . $js_url; ?>jquery.colorbox.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>bootstrap-colorpicker.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url() . $js_url; ?>ace-elements.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>ace.min.js"></script>
<script>
	//Javascript things... the share btn is not working shaa... Please credit me anywhere u want to use my design. THANK YOU... Images gotten from awwwards.com
const $body = $('body');
const $btnMenu = $('.menu-toggle');
$btnMenu.click(function() {
  $body.toggleClass('menu-open');
});

const btnCloseBar = document.querySelector('.js-close-bar');
const btnOpenBar = document.querySelector('.js-open-bar');
const searchBar = document.querySelector('.searchbar');

btnOpenBar.addEventListener('click', () => {
  searchBar.classList.add('bar--is-visible');
});

btnCloseBar.addEventListener('click', () => {
  searchBar.classList.remove('bar--is-visible');
});
</script>
	</body>
</html>
