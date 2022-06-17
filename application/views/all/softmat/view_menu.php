<style>
	.pa {
		padding-top: 60px;
	}

	::-webkit-scrollbar {
		background: transparent;
		width: 5px;
		height: 5px;
	}

	::-webkit-scrollbar-thumb {
		background-color: #3c3f58;
	}

	.si {
		overflow: auto;
		white-space: nowrap;
	}

	.profileim {
		background-image: url('<?php echo base_url(); ?>./themes/softmat/img/1xx.jpg');
	}

	div.dt-button-collection div.dropdown-menu {
		position: absolute;
		top: 100% !important;
		left: 0 !important;
		z-index: 1000 !important;
		display: block !important;
		float: left !important;
		/* min-width: 10rem; */
		padding: 0.5rem 0 !important;
		margin: 0.125rem 0 0 !important;
		font-size: 1rem !important;
		color: #212529 !important;
		text-align: left !important;
		list-style: none !important;
		background-color: #fff !important;
		background-clip: padding-box !important;
		border: 1px solid rgba(0, 0, 0, 0.15) !important;
		border-radius: 0.25rem !important;
	}

	.si {
		font-family: sans-serif !important;
	}
	.paging_simple_numbers .pagination .paginate_button.active a, .paging_simple_numbers .pagination .paginate_button:hover a {
    background: linear-gradient(45deg, #6F9EFF, #3868CD , #6F9EFF) !important;
    color: #fff !important;
}
.button1 {
		padding: 5px;
		width: 40px;
		border-radius: 30px;
		border: none;
	}
	.bgc{
	background: linear-gradient(45deg, #32D6FF, #00ADD8 , #0090CB);
	border: none;
	box-shadow: 2px 4px 1px lightblue;
}
.font{
        font-family: 'Prompt';
        font-weight: bold;
		text-align: center;
        color: black;
	/* animation: beat .90s infinite alternate;
	transform-origin: center; */
      }
	  @keyframes beat{
	to { transform: scale(1.1); }
}
body{
	font-family: 'Prompt' !important;
}
.vvv2 {
		color: black;
		background-color: white;
		padding: 30px;
		border-radius: 10px;
		box-shadow: 20px 20px 3px lightblue;

	}
	.btnclose{
		
		border: none;
	    background: linear-gradient(45deg, #838383, #696969 , #4D4D4D);
		box-shadow: 2px 4px 1px lightblue;
	}
	.background{
	/* background-color: #FF8D0E; */
	background-image: url('<?php echo base_url(); ?>./themes/softmat/img/bg4.png');
	background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
}
</style>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left si fi2">
	<!-- sidebar-->
	<!-- sidebar menu-->

	<ul class="sidebar-menu  nav-list" data-widget="tree">
		<li class="profileim user-profile treeview">
			<a href="#">
				<img src="https://i1.sndcdn.com/avatars-000609285429-droihf-t500x500.jpg" alt="user">
				<span style="color:black;  font-style: italic; font-weight: bold;"><?php echo $this->session->userdata('sessName'); ?></span>
				<span class="pull-right-container">
					<i class="fa fa-angle-right pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>My Profile </a></li>
				<li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
				<li><a href="<?php echo site_url('manage/logout'); ?>"><i class="fa fa-power-off mr-5"></i>Logout</a>
				</li>
			</ul>
		</li>
		<?php

		$resMenu = $this->connect_db->ShowMenu($this->session->userdata('sessUsrId'));

		if ($this->router->fetch_method() == 'edit' || $this->router->fetch_method() == 'rule') {

			$set_method = 'manage';
		} else {

			$set_method = $this->router->fetch_method();
		}

		$submenu_active = $this->router->fetch_class() . '/' . $set_method;

		//  echo($submenu_active);
		//exit();




		foreach ($resMenu as $m) {
			//var_dump($m);
			//exit();
			// $str_sactive = '';

			// $resMenu = $this->connect_db->ShowMenu($this->session->userdata('sessUsrId'));
			$str_sactive = '';
			foreach ($m['sub_menu'] as $sme) {
				//   var_dump($sme);
				//exit();
				//    echo $sme['method']."<br>";

				// echo $sme['method']. ' | ';
				// echo   ' | ' . $sme['method'];
				// echo $submenu_active;
				if ($sme['method'] == $submenu_active) {
					$str_sactive = "active menu-open";
				}
			}
			echo '<li class="treeview ' . $str_sactive . '">
                  <a href="#"> <i class="menu-icon fa fa-fw  ' . $m['icon_menu'] . '"></i><span class="menu-text">' . $m['g_name'] . '</span><span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                  </a>';
		?>


			<?php

			echo '<ul class="treeview-menu">';

			foreach ($m['sub_menu'] as $sm) {
				// echo base_url().$sm['link'];

				// echo $sm['method']."</br>";
				// echo $submenu_active;
				// exit;

				if ($sm['method'] == $submenu_active) {
					$str_active = 'class="treeview active menu-open"';
				} else {

					$str_active = '';
				}
				//  var_dump($sme['method']);
				//  echo "<br>";
				//  var_dump($submenu_active);
				//  echo "<br>";


				echo '<li ' . $str_active . '><a href="' . base_url() . $sm['link'] . '"><i  class="fa fa-circle-thin""></i>' . $sm['name'] . ' 
						           </a></li>';
			}

			?>


		<?php

			echo '</ul>';

			echo '</li>';
			//echo '</ul>';
			// $x=0;
		}

		?>
	</ul>
</aside>