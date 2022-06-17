<style>
	.vvv {
		font-size: 12px;
		background-color: white;
		text-align: center;
	}

	select {
		border: none;
	}

	/* btn btn-secondary buttons-collection dropdown-toggle buttons-colvis */
</style>

<div class="content-wrapper pa">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<span class="light-logo"><img src="<?php echo base_url(); ?>./themes/softmat/img/xnxx.png" height="20" alt="logo"></span>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<!--<li class="breadcrumb-item active">Dashboard</li>-->
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">




		<div class=" vvv2">
			<h1 style="text-align:center;" class="font">Manage Request ポルノハブ</h1>
			<table id="datatable" role="grid" class="table vvv" style="width:100%">
				<thead>
					<tr>
						<th style="cursor: no-drop;color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">No</th>
						<th style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">Plant</th>
						<th style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">Type</th>
						<th style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">System</th>
						<th style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">Priority</th>
						<th style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">Date Created</th>
						<th style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">Status</th>
						<th style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">Create_by</th>
						<th style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">Acction</th>

					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div>

	</section>
	<!-- /.content -->
</div>

<script>
	function btncheck(r_id) {
		alert(r_id);
		Swal.fire({
			title: "ต้องการจะรับเควสหรือไม่ ?",
			text: "ยืนยันที่จะกู้บัญชีนี้",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#35D735',
			cancelButtonColor: '#d33',
			confirmButtonText: 'check!'
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					url: '<?php echo base_url(); ?>Form/check_quest',
					type: "post",
					data: {
						id: r_id
					},
					success: function(data) {
						alert(data);
						if (data === "suc") {
							Swal.fire({
								html: "<p>กู้บัญชีสำเร็จ!</p><p>บัญชีนี้ถูกกู้เสร็จสิ้น</p>",
								icon: 'success',
								showConfirmButton: false,
								timer: 1500,
							})
						} else {
							Swal.fire({
								html: '<p>กู้บัญชีไม่สำเร็จ!</p><p>เกิดข้อผิดพลาดไม่สามารถกู้บัญชีได้</p>',
								icon: 'error',
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






<script>
	$(document).ready(function() {
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
				url: '<?php echo base_url(); ?>Form/table_req'
			},
			columns: [{
					// data: "row_num",
					data: "ma_id",
					targets: 0,
					searchable: false,
					orderable: false,
					render: function(data, type, row) {
						return cnt++;
					}
				},
				// {"data":"spg_id"},
				{
					data: "plant"
				},
				{
					data: "stname"
				},
				{
					data: "stmname"
				},
				{
					data: "pri_id",
					"render": function(data, type, row, meta) {
						if (type === 'display') {
							console.log(data);
							if (row.pri_id === '1') {
								// var xxx=data;
								data =
									'<div  style="box-shadow: 2px 4px 1px lightblue;color:white; background: linear-gradient(45deg, #FF5353, #FE2828 , #EA0000);border-radius:30px;height: 25px;margin:auto;max-width: 100px;padding: 3px;">Critical</div>';

								// console.log("dissssssss"+" "+xxx);
							} else if (row.pri_id === '2') {
								// var xxx2=data;
								data =
									'<div  style="box-shadow: 2px 4px 1px lightblue;color:white;  background: linear-gradient(45deg, #FF9459, #FF6B19 , #CD4800);border-radius:30px;height: 25px;margin:auto;max-width: 100px;padding: 3px;">High</div>';

								// console.log("2222222"+" "+xxx2);
							} else if (row.pri_id === '3') {
								// var xxx2=data;
								data =
									'<div  style="box-shadow: 2px 4px 1px lightblue;color:white;  background: linear-gradient(45deg, #6E7DFF, #344AFF , #0019E5);border-radius:30px;height: 25px;margin:auto;max-width: 100px;padding: 3px;">Medium</div>';

								// console.log("2222222"+" "+xxx2);
							} else if (row.pri_id === '4') {
								// var xxx2=data;
								data =
									'<div  style="box-shadow: 2px 4px 1px lightblue;color:white;  background: linear-gradient(45deg, #CFCFCF, #989898 , #747474);border-radius:30px;height: 25px;margin:auto;max-width: 100px;padding: 3px;">Low</div>';

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
					data: "status",
					"render": function(data, type, row, meta) {
						if (type === 'display') {
							console.log(data);
							if (row.status === '0') {
								// var xxx=data;
								data =
									'<div  style="box-shadow: 2px 4px 1px lightblue;color:white; background: linear-gradient(45deg, #FFC43B, #FF9D30 , #FF7530);border-radius:30px;height: 25px;margin:auto;max-width: 100px;padding: 3px;">Acknowleadge</div>';

								// console.log("dissssssss"+" "+xxx);
							} else {
								// var xxx2=data;
								data =
									'<div  style="box-shadow: 2px 4px 1px lightblue;color:white;  background: linear-gradient(45deg, #8FF092, #2ABF00 , #1F9B00);border-radius:30px;height: 25px;margin:auto;max-width: 100px;padding: 3px;">New</div>';

								// console.log("2222222"+" "+xxx2);
							}
							// data = '<button class="btn btn-primary" data-toggle="modal" data-id="' + data +'" data-title="' + data + '" data-book-id="' + data + '" data-target="#exampleModal" name = "myBtn" id ="myBtn" >'+ data +'</button>';                  
							// data = '<div  style="background: linear-gradient(45deg, #0a2674, #18497c , #0d2c78);border-radius:5px;height: 35px;text-align: center;padding: 8px;"><a style="color:white;">enable</a></div>';
						}

						return data;
					}
				},

				// {
				// 	data: "del_flag",
				// 	"render": function (data, type, row, meta) {
				// 		if (type === 'display') {
				// 			console.log(data);
				// 			if (row.del_flag === '0') {
				// 				data =
				// 					'<div  style="box-shadow: 2px 4px 1px lightblue;color:white; background: linear-gradient(45deg, #FF0000, #D60000 , #B10000);border-radius:30px;height: 25px;margin:auto;max-width: 100px;padding: 3px;">Delete</div>';
				// 			} else {
				// 				data =
				// 					'<div  style="box-shadow: 2px 4px 1px lightblue;color:white; background: linear-gradient(45deg, #bf80ff, #822ED8 , #5503A8);border-radius:30px;height: 25px;margin:auto;max-width: 100px;padding: 3px;">Normal</div>';
				// 			}
				// 		}

				// 		return data;
				// 	}
				// },
				{
					data: "create_by"
				},
				{
					data: "ma_id",
					"render": function(data, type, row, meta) {
						console.log(row.enable)
						if (type === 'display') {
							console.log(data);
							// data = '<button class="btn btn-primary" data-toggle="modal" data-id="' + data +'" data-title="' + data + '" data-book-id="' + data + '" data-target="#exampleModal" name = "myBtn" id ="myBtn" >'+ data +'</button>';               

							if (row.status === '1') {
								html_data = '<button onclick="btncheck(' + data + ')" class=" btn bg-success button1" style="color:white;background: linear-gradient(45deg, #FFC35D, #FFB028 , #E99300);" ><i class="fa fa-check "></i></button>'
							} else {
								html_data = '<button style="cursor: no-drop;color:white;background: linear-gradient(45deg, #FF9797, #DE321F , #DE321F);" class="btn bg-warning button1"><i class="fa fa-ban"></i></button>'
							}
							html_data += '<button style="color:white;background: linear-gradient(45deg, #2E78FF, #1249FF , #002EC9);" class="btn bg-warning button1"><i class="fa fa-eye"></i></button>'
							html_data += '<button style="color:white;background: linear-gradient(45deg, #75D247, #2ABF00 , #1F9B00);" class="btn bg-warning button1"><i class="fa fa-edit"></i></button>'
						}

						return html_data;
					}
				}

			]
		})
		setInterval(function() {
			$('#datatable').DataTable().ajax.reload(null, false);
			cnt = 1;
			// table.ajax.reload();
		}, 1000);
	});
</script>

<script>
	function switch_alert() {
		alert("I am an alert box!");
		Swal.fire(
			'Good job!',
			'You clicked the button!',
			'success'
		)
	}
</script>


















<!-- <?php
		$list_request = array_filter($list_request);
		if (!empty($list_request)) {
			$i = 1;
			foreach ($list_request as $detail) {
				if ($detail['del_flag'] == '1') {
					if ($detail['status'] == '1') {
						$txt_status = '<span class="label label-sm label-success">New</span>';
						$txt_color = '#0EC952';
					} else {
						$txt_status = '<span class="label label-sm label-warning">Acknowleadge</span>';
						$txt_color = '#FF0000';
					} ?>
				<tr>
        <td style="text-align:center;"><?php echo $i; ?></td>
				<td style="text-align:center;"><?php echo $detail['plant']; ?></td>
				<td style="text-align:center;"><?php echo $detail['stname']; ?></td>
				<td style="text-align:center;"><?php echo $detail['stmname']; ?></td>
				<td style="text-align:center;"><?php echo $detail['spname']; ?></td>
				<td style="text-align:center;"> <?php echo date('Y-m-d H:i:s', strtotime($detail['date_create'])); ?></td>
				<td style="text-align:center;"><?php echo '<span style="color:' . $txt_color . '">' . $txt_status . '</span>'; ?></td>
				<td>
			<?php
					if ($detail['status'] == 1) { ?>
					<a data-original-title='Acknowleadge' onclick="test()">
                    <button class="btn bg-success button1"><i class="fa fa-check"></i></button>
              		</a>											
			<?php } else { ?>
					<a >
                    <button class="btn bg-danger button1"><i class="fa fa-question"></i></button>
              		</a>										
			<?php } ?>
					<a data-original-title='Show' onclick="javascript:window.location='<?php echo site_url('user/delete/') . $detail['ma_id']; ?>'; }else{ return false; }">
                    <button class="btn bg-secondary button1"><i class="fa fa-eye "></i></button>
              		</a>
					  <a data-original-title='E' onclick="javascript:window.location='<?php echo base_url() . 'user/rule/' . $detail['ma_id']; ?>';">
                <button class="btn bg-success button1"><i class="fa fa-edit "></i></button>
              	</a>
				</td>
				</tr>
			<?php }
			}
		} ?> -->