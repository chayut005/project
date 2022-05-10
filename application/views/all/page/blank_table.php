<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php echo $page_title;?></title>
		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<link rel="stylesheet" href="<?php echo base_url() . $asset_url; ?>font-awesome/4.5.0/css/font-awesome.min.css" />

		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
	
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	

	</head>

	<body class="no-skin">
				<?php echo $page_menu;?>
			
				<?php echo $page_content;?>

				<?php echo $page_footer;?>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
		<script>
        $(document).ready(function () {
            $("#myTable").DataTable();
        });
    </script>

	</body>
</html>
