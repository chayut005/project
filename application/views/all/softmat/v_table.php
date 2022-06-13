<style>
	.vvv {
		font-size: 12px;
		background-color: white;
		text-align: center;
	}




	select {
		border: none;
	}

	.label-color {
		background-color: #bf80ff;
	}

	.label-color2 {
		background-color: #FF0000;

	}

</style>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper pa">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<span class="light-logo"><img src="<?php echo base_url(); ?>./themes/softmat/img/xnxx.png" height="20"
				alt="logo"></span>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<li class="breadcrumb-item active">manage_user</li>
			<li class="breadcrumb-item active">datatable</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">


		<div class=" vvv2">
			<div><h1 style="text-align:center;" class="font">Manage User</h1></div>
			<table id="datatable" class="table vvv" style="width:100%">
				<thead>
					<tr>
						<th
							style="cursor: no-drop;color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">
							No</th>
						<th
							style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">
							Username</th>
						<th
							style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">
							Password</th>
						<th
							style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">
							Name</th>
						<th
							style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">
							Group</th>
						<th
							style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">
							Status</th>
						<th
							style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">
							Date Created</th>
						<th
							style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">
							Account Status</th>
						<th
							style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">
							Action</th>
					</tr>
				</thead>

			</table>
		</div>

	</section>
	<!-- /.content -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>/
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<script>
	$(document).ready(function () {
		var cnt = 1;
		var table = $('#datatable').DataTable({
			buttons: ['copy', 'excel', 'pdf', 'colvis'],
			// order: [1, 'desc'],
			lengthMenu: [
				[5, 10, 25, 50],
				[5, 10, 25, 'All'],
			],
			scrollX: true,
			ajax: {
				url: '<?php echo base_url(); ?>User/table_user'
			},
			columns: [{
					// data: "row_num",
					data: "spg_id",
					targets: 0,
					searchable: false,
					orderable: false,
					render: function (data, type, row) {
						return cnt++;
					}
				},
				// {"data":"spg_id"},
				{
					data: "username"
				},
				{
					data: "password"
				},
				{
					data: "fullname"
				},
				{
					data: "group_name"
				},
				{
					data: "enable",
					"render": function (data, type, row, meta) {
						if (type === 'display') {
							console.log(data);
							if (row.enable === '0') {
								// var xxx=data;
								data =
									'<div  style="box-shadow: 2px 4px 1px lightblue;color:white; background: linear-gradient(45deg, #FFC43B, #FF9D30 , #FF7530);border-radius:30px;height: 25px;margin:auto;max-width: 100px;padding: 3px;">disable</div>';

								// console.log("dissssssss"+" "+xxx);
							} else {
								// var xxx2=data;
								data =
									'<div  style="box-shadow: 2px 4px 1px lightblue;color:white;  background: linear-gradient(45deg, #6F9EFF, #3868CD , #6F9EFF);border-radius:30px;height: 25px;margin:auto;max-width: 100px;padding: 3px;">enable</div>';

								// console.log("2222222"+" "+xxx2);
							}
							// data = '<button class="btn btn-primary" data-toggle="modal" data-id="' + data +'" data-title="' + data + '" data-book-id="' + data + '" data-target="#exampleModal" name = "myBtn" id ="myBtn" >'+ data +'</button>';                  
							// data = '<div  style="background: linear-gradient(45deg, #0a2674, #18497c , #0d2c78);border-radius:5px;height: 35px;text-align: center;padding: 8px;"><a style="color:white;">enable</a></div>';
						}

						return data;
					}
				},

				{
					data: "date_create"
				},
				{
					data: "del_flag",
					"render": function (data, type, row, meta) {
						if (type === 'display') {
							console.log(data);
							if (row.del_flag === '0') {
								// var xxx=data;
								data =
									'<div  style="box-shadow: 2px 4px 1px lightblue;color:white; background: linear-gradient(45deg, #FF0000, #D60000 , #B10000);border-radius:30px;height: 25px;margin:auto;max-width: 100px;padding: 3px;">Delete</div>';

								// console.log("dissssssss"+" "+xxx);
							} else {
								// var xxx2=data;
								data =
									'<div  style="box-shadow: 2px 4px 1px lightblue;color:white; background: linear-gradient(45deg, #bf80ff, #822ED8 , #5503A8);border-radius:30px;height: 25px;margin:auto;max-width: 100px;padding: 3px;">Normal</div>';

								// console.log("2222222"+" "+xxx2);
							}
							// data = '<button class="btn btn-primary" data-toggle="modal" data-id="' + data +'" data-title="' + data + '" data-book-id="' + data + '" data-target="#exampleModal" name = "myBtn" id ="myBtn" >'+ data +'</button>';                  
							// data = '<div  style="background: linear-gradient(45deg, #0a2674, #18497c , #0d2c78);border-radius:5px;height: 35px;text-align: center;padding: 8px;"><a style="color:white;">enable</a></div>';
						}

						return data;
					}
				},
				{
					data: "su_id",
					"render": function (data, type, row, meta) {
						// console.log(data)
						if (type === 'display') {
							// console.log(type);
							// data = '<button class="btn btn-primary" data-toggle="modal" data-id="' + data +'" data-title="' + data + '" data-book-id="' + data + '" data-target="#exampleModal" name = "myBtn" id ="myBtn" >'+ data +'</button>';               
							html_data ='<button style="color:white;background: linear-gradient(45deg, #75D247, #2ABF00 , #1F9B00);" onclick="submit('+ data +')" class="btn bg-success button1"><i class="fa fa-edit "></i></button>'
								if( row.enable === '1' ){ 
									
									html_data +='<button  style="color:white;background: linear-gradient(45deg, #D5D5D5, #C3C3C3 , #9D9D9D);"onclick="btndisable(' + data +')" class="btn bg-warning button1"><i class="fa fa-ban"></i></button>'
								}else{
									html_data +='<button  style="color:white;background: linear-gradient(45deg, #FFC43B, #FF9D30 , #FF7530);"onclick="btnenable('  + data +')" class="btn bg-warning button1"><i class="fa fa-plus"></i></button>'

								}
								if( row.del_flag === '1' ){ 
								html_data +='<button style="color:white;background: linear-gradient(45deg, #FF9797, #DE321F , #DE321F);"onclick="btndel('  + data +')" class="btn bg-danger button1"><i class="fa fa-bitbucket"></i></button>'
								}else{
									html_data +='<button style="color:white;background: linear-gradient(45deg, #5B90FF, #4377E4 , #2A5ECB);"onclick="btnre('  + data +')" class="btn bg-warning button1"><i class="fa fa-reply"></i></button>'

								}

							// data = '<button style="color:white;background: linear-gradient(45deg, #75D247, #2ABF00 , #1F9B00);" onclick="submit(' + data +
							// ')" class="btn bg-success button1"><i class="fa fa-edit "></i></button> <button style="color:white;background: linear-gradient(45deg, #FFC43B, #FF9D30 , #FF7530);" class="btn bg-warning button1"><i class="fa fa-plus"></i></button> <button style="color:white;background: linear-gradient(45deg, #FF9797, #DE321F , #DE321F);" class="btn bg-danger button1"><i class="fa fa-bitbucket"></i></button>';
						}
						
						return html_data;
					}
				}

			]
		})
		setInterval(function () {
			$('#datatable').DataTable().ajax.reload(null, false);
			cnt=1;
			// table.ajax.reload();
		}, 1000);
	});

</script>
<script>
	function btnenable(u_id) {
		// alert(g_id);
		Swal.fire({
		title:"ต้องการจะเปิดใช้งานหรือไม่ ?",
        text: "ยืนยันที่จะเปิดใช้งานบัญชีนี้",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#35D735',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Enable!'
		}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
			url: '<?php echo base_url(); ?>User/enable/',
			type: "post",
			data: {
				id: u_id
			},success:function (data) {
				console.log(data);
				if(data==="suc"){
					Swal.fire({
			html:"<p>ระงับบัญชีสำเร็จ!</p><p>ข้อมูลนี้ถูกเปิดใช้งานเรียบร้อยแล้ว</p>",
			icon:'success',
			showConfirmButton: false,
			timer: 1500,
					})
				}else{
			Swal.fire({
			html:'<p>ระงับบัญชีไม่สำเร็จ!</p><p>เกิดข้อผิดพลาดไม่สามารถเปิดใช้งานบัญชีได้</p>',
			icon:'error',
			showConfirmButton: false,
			timer: 1500,
				})
				}
			}
		    });
		}
		})
	}
	function btndisable(u_id) {
		// alert(u_id);
		Swal.fire({
		title:"ต้องการจะปิดใช้งานหรือไม่ ?",
        text: "ยืนยันที่จะปิดใช้งานบัญชีนี้",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#35D735',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Disable!'
		}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
			url: '<?php echo base_url(); ?>User/disable/',
			type: "post",
			data: {
				id: u_id
			},success:function (data) {
				console.log(data);
				if(data==="suc"){
					Swal.fire({
			html:"<p>ระงับบัญชีสำเร็จ!</p><p>บัญชีนี้ถูกระงับเสร็จสิ้น</p>",
			icon:'success',
			showConfirmButton: false,
			timer: 1500,
					})
				}else{
			Swal.fire({
			html:'<p>ระงับบัญชีไม่สำเร็จ!</p><p>เกิดข้อผิดพลาดไม่สามารถระงับบัญชีได้</p>',
			icon:'error',
			showConfirmButton: false,
			timer: 1500,
				})
				}
			}
		    });
		}
		})
	}
	function btndel(u_id) {
		// alert(pg_id);
		Swal.fire({
		title:"ต้องการจะลบหรือไม่ ?",
        text: "ยืนยันที่จะลบข้อมูลนี้",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#35D735',
		cancelButtonColor: '#d33',
		confirmButtonText: 'delete!'
		}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
			url: '<?php echo base_url(); ?>User/delete',
			type: "post",
			data: {
				id: u_id
			},success:function (data) {
				// alert(data);
				if(data==="suc"){
					Swal.fire({
			html:"<p>ลบข้อมูลสำเร็จ!</p><p>ข้อมูลนี้ถูกลบเสร็จสิ้น</p>",
			icon:'success',
			showConfirmButton: false,
			timer: 1500,
					})
				}else{
			Swal.fire({
			html:'<p>ลบข้อมูลไม่สำเร็จ!</p><p>เกิดข้อผิดพลาดไม่สามารถลบได้</p>',
			icon:'error',
			showConfirmButton: false,
			timer: 1500,
				})
				}
			}
		    });
		}
		})
	}
	function btnre(u_id) {
		// alert(pg_id);
		Swal.fire({
		title:"ต้องการจะกู้บัญชีหรือไม่ ?",
        text: "ยืนยันที่จะกู้บัญชีนี้",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#35D735',
		cancelButtonColor: '#d33',
		confirmButtonText: 'reacction!'
		}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
			url: '<?php echo base_url(); ?>User/redelete',
			type: "post",
			data: {
				id: u_id
			},success:function (data) {
				// alert(data);
				if(data==="suc"){
					Swal.fire({
			html:"<p>กู้บัญชีสำเร็จ!</p><p>บัญชีนี้ถูกกู้เสร็จสิ้น</p>",
			icon:'success',
			showConfirmButton: false,
			timer: 1500,
					})
				}else{
			Swal.fire({
			html:'<p>กู้บัญชีไม่สำเร็จ!</p><p>เกิดข้อผิดพลาดไม่สามารถกู้บัญชีได้</p>',
			icon:'error',
			showConfirmButton: false,
			timer: 1500,
				})
				}
			}
		    });
		}
		})
	}
</script>


<!-- 
<tbody>

<?php
$list_user = array_filter($list_user);
if (!empty($list_user)) {
	$i = 1;
	foreach ($list_user as $user_detail) {
		if ($user_detail['del_flag'] == '1') {
			$f_status = '<span class="label label-sm label-color">Normal</span>';
		} else {
			$f_status = '<span class="label label-sm label-color2">Delete</span>';
		}
		if ($user_detail['enable'] == '1') {
			$txt_status = '<span class="label label-sm label-success">Enable</span>';
		} else {
			$txt_status = '<span class="label label-sm label-warning">Disable</span>';
		} ?>
<tr>
	<td><?php echo $i ?></td>
	<td><?php echo $user_detail['username']; ?></td>
	<td><?php echo $user_detail['password']; ?></td>
	<td><?php echo $user_detail['firstname'] . '  ' . $user_detail['lastname']; ?></td>
	<td style="text-align:center;"><?php echo $user_detail['group_name']; ?></td>
	<td style="text-align:center;"><?php echo '<span>' . $txt_status . '</span>'; ?>
	</td>
	<td style="text-align:center;"> <?php echo date('Y-m-d H:i:s', strtotime($user_detail['date_create'])); ?>
	</td>
	<td style="text-align:center;"><?php echo '<span>' . $f_status . '</span>'; ?>
	</td>
	<td>
		<a data-original-title='Rule'
			onclick="javascript:window.location='<?php echo base_url() . 'user/rule/' . $user_detail['su_id']; ?>';">
			<button class="btn bg-success button1"><i class="fa fa-edit "></i></button>
		</a>
		<?php
		if ($user_detail['enable'] == 1) { ?>
		<a data-original-title='Disable'
			onclick="javascript:window.location='<?php echo base_url() . 'User/disable/' . $user_detail['su_id']; ?>';">
			<button class="btn bg-secondary button1"><i class="fa fa-ban"></i></button>
		</a>
		<?php } else { ?>
		<a data-original-title='Enable'
			onclick="javascript:window.location='<?php echo base_url() . 'user/enable/' . $user_detail['su_id']; ?>';">
			<button class="btn bg-warning button1"><i class="fa fa-plus"></i></button>
		</a>
		<?php } ?>
		<?php
		if ($user_detail['del_flag'] == 1) { ?>
		<a data-original-title='Delete'
		onclick="javascript:if(confirm('คุณต้องการลบรายการนี้ใช่หรือไม่?')){ window.location='<?php echo site_url('user/delete/') . $user_detail['su_id']; ?>'; }else{ return false; }">
			<button class="btn bg-danger button1"><i class="fa fa-bitbucket"></i></button>
		</a>
		<?php } else { ?>
		<a data-original-title='Nomal'
		onclick="javascript:if(confirm('คุณต้องการกู้รายการนี้ใช่หรือไม่?')){ window.location='<?php echo site_url('user/redelete/') . $user_detail['su_id']; ?>'; }else{ return false; }">
			<button class="btn bg-success button1"><i class="fa fa-reply"></i></button>
		</a>
		<?php } ?>
	</td>
</tr>
<?php $i++;
	}
} ?>
</tbody> -->
