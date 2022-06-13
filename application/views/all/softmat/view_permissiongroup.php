<style>
	select {
		border: none;
	}



	.vvv {
		background-color: white;
		text-align: center;
		font-size: 12px;
	}

	.box {
		width: 35%;
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
			<!--<li class="breadcrumb-item active">Dashboard</li>-->
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- div.dataTables_borderWrap -->





















		<div class="vvv2">

			<h1 style="text-align:center;" class="font">Permission Group ポルノハブ</h1>
			<td>

				<button style="color:white;background: linear-gradient(45deg, #75D247, #2ABF00 , #1F9B00);" data-target="#modal_perGadd" data-toggle="modal" class="btn bg-success button1 "><i
						class="fa fa-plus"></i></button>
				<table id="datatable" role="grid" class="table vvv " style="width:100%">
					<thead>
						<tr>
							<th style="cursor: no-drop;color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;text-align:center;">No</th>
							<th style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">Name</th>
							<!-- <th></th> -->
							<th style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">Status</th>
							<th style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">Action</th>
						</tr>
					</thead>
					<tbody>

					</tbody>

				</table>





				<!-- --------------------------------------------------------------modal--------Addpermissiongroup-------------------------------------------------- -->






				<div  id="modal_perGadd" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
						
							<div  class="modal-body">
							<button style="font-size:15px;" type="button" class="close glyphicon glyphicon-remove"
									data-dismiss="modal" aria-hidden="true"></button>
								<h2 class="font">Add Permissiongroup</h2>
								<form name="frmMain" id="frmMain" method="post">
									</label>

									<div class="input-group">
										<span class="input-group-addon"><i class="icon-append fa fa-group"></i></span>
										<input id="xxx" name="txt_name" type="text" class="form-control"
											placeholder="Permission Group Name">
									</div>

									<section>
										<label>Status :
											<input checked="checked" type="radio" name="rad_status" id="enable"
												value="1" /><label title="1" for="enable">Enable</label>
											<input type="radio" name="rad_status" id="disable" value="0" /><label
												title="2" for="disable">Disable</label>
										</label>

									</section>





									<button type="submit" class="bgc btn btn-primary bgc" id="addxx">
										Add
									</button>
									<input id="action" type="hidden" name="action"
										value="<?php echo base64_encode('addPermissiongroup'); ?>" />
								</form>
							</div>
						</div>
					</div>
				</div>















				<!-- --------------------------------------------------------------modal--------Editpermissiongroup-------------------------------------------------- -->











				<div id="modal_perGedit" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
						
							<div class="modal-body">
							<button style="font-size:15px;" type="button" class="close glyphicon glyphicon-remove"
									data-dismiss="modal" aria-hidden="true"></button>
								<h2 class="font">Edit Permissiongroup</h2>
								<form action="" id="form_editpg" method="post">


									<div class="input-group">
										<span class="input-group-addon"><i class="icon-append fa fa-group"></i></span>
										<input name="txt_id" id="spg_id" type="text" class="form-control" hidden>
										<input name="txt_name" id="spg_name" type="text" class="form-control">
									</div>


									</label>
									<section>
										<div class="radio">
											<label>Status :

												<input type="radio" class="chk_end" checked="" id="enable_perGedit"
													name="rad_status" value="1">
												<label id="enable" for="enable_perGedit">Enable</label>

												<input type="radio" id="disable_perGedit" checked="" class="chk_dis"
													name="rad_status" value="0">
												<label id="disable" for="disable_perGedit">Disable</label>
											</label>
										</div>
										</label>
									</section>


									<footer >
										<button id="editpg" type="submit" class="btn btn-primary bgc">
											Save
										</button>
										<input type="hidden" name="action"
											value="<?php echo base64_encode('editPermissionGroup'); ?>" />
									</footer>
								</form>
							</div>
						</div>
					</div>
				</div>


				<!-- ------------------------------------------------------------------end--modal-------------------------------------------------------- -->
	</section>
	<!-- /.content -->
</div>

<!-- <script>
$(document).ready(function(){
  $("#test234").click(function(){

    alert('ssf');
    $("#modal_perGedit").modal();
  });
});
</script> -->
<!-- -------------------------------------------------------------------------------- -->
<script>
	$(document).ready(function () {
		var cnt=1;
		var table = $('#datatable').DataTable({
			buttons: ['copy', 'excel', 'pdf', 'colvis'],
			// order: [1, 'desc'],
			lengthMenu: [
				[5, 10, 25, 50],
				[5, 10, 25, 'All'],
			],
			// lengthChange: false,
			scrollX: true,
			ajax: {
				url: '<?php echo base_url(); ?>Permission/tablepg'
			},
			columns: [
				{
					// data: "row_num",
					data: "spg_id",
                          targets: 0,
                          searchable: false,
                          orderable: false,
                          render: function (data, type, row) {
                            return cnt++;
                          }
				},
				{
					data: "name"
				},
				{ 
					data: "enable" ,
                              "render" : function(data, type, row, meta){
                                if(type === 'display'){
									console.log(data);
									if(row.enable === '0'){
										// var xxx=data;
										html_data = '<div  style="color:white; background: linear-gradient(45deg, #FFC43B, #FF9D30 , #FF7530);border-radius:30px;height: 25px;margin:auto;max-width: 100px;padding: 3px;">disable</div>';

										// console.log("dissssssss"+" "+xxx);
									}else{
										// var xxx2=data;
										html_data = '<div  style="color:white; background: linear-gradient(45deg, #6F9EFF, #3868CD , #6F9EFF);border-radius:30px;height: 25px;margin:auto;max-width: 100px;padding: 3px;">enable</div>';

										// console.log("2222222"+" "+xxx2);
									}
                                  // data = '<button class="btn btn-primary" data-toggle="modal" data-id="' + data +'" data-title="' + data + '" data-book-id="' + data + '" data-target="#exampleModal" name = "myBtn" id ="myBtn" >'+ data +'</button>';                  
                                // data = '<div  style="background: linear-gradient(45deg, #0a2674, #18497c , #0d2c78);border-radius:5px;height: 35px;text-align: center;padding: 8px;"><a style="color:white;">enable</a></div>';
                                }          
							    
                                return html_data;
                              }
                            },




				// {
				// 	data: "enable",
				// 	"render": function (data, type, row, meta) {
				// 		if (type === 'display') {
				// 			if(data===1){
				// 				data = '<div class= "nice" style="background: linear-gradient(45deg, #0a2674, #18497c , #0d2c78);border-radius:5px;height: 35px;text-align: center;padding: 8px;"><a style="color:white;">"enable"</a></div>'
				// 			}
				// 			// data = 'if ('+ data +' == '1'){if ('+ data +' == '1'){ $txt_status = '<span class="label label-sm label-success">Enable</span>'; $txt_color = '#0EC952';}else{$txt_status = '<span class="label label-sm label-warning">Disable</span>'; $txt_color = '#FF0000'; }	
				// 		}
				// 		return data;
				// 	}
				// },
				{
					data: "spg_id",
					"render": function (data, type, row, meta) {
						if (type === 'display') {
							// console.log(type);
							// data = '<button class="btn btn-primary" data-toggle="modal" data-id="' + data +'" data-title="' + data + '" data-book-id="' + data + '" data-target="#exampleModal" name = "myBtn" id ="myBtn" >'+ data +'</button>';                  
							html_data = '<button style="color:white;background: linear-gradient(45deg, #75D247, #2ABF00 , #1F9B00);" onclick="submit(' + data +
								')" class="btn bg-success button1"><i class="fa fa-edit "></i></button> <button  onclick="btndelete(' + data +
								')" style="color:white;background: linear-gradient(45deg, #FF9797, #DE321F , #DE321F);" class="btn bg-danger button1"><i class="fa fa-bitbucket"></i></button>';
						}
						return html_data;
					}
				}
				// {defaultContent: '<button onclick="submit()" class="btn bg-success button1"><i class="fa fa-edit "></i></button>  <button  class="btn bg-danger button1"><i class="fa fa-bitbucket"></i></button>'}

			]

		});
		// table.on( 'order.dt search.dt', function () {
        //             table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        //                 cell.innerHTML = i+1;
        //             } );
        //         } ).draw();
		
		table.buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');
		setInterval(function () {
			$('#datatable').DataTable().ajax.reload(null, false);
			cnt=1;
			// table.ajax.reload();
		}, 1000);




		const btn = $('#addxx');
		btn.on("click", function () {
			event.preventDefault();
			$.ajax({
				type: "POST",
				// dataType: "json",
				url: '<?php echo base_url(); ?>Permission/addpergroup',
				data: $("#frmMain").serialize(),
				success: function (data) {
					// alert(status);
					if (data == "suc") {
						Swal.fire({
						title:'Success!',
						html: "<p>บันทึกข้อมูลเรียบร้อย!</p><p>Success : Add data success.!</p>",
						icon: 'success',
						showConfirmButton: false,
						timer: 1500,
					})
						$('input[name=txt_name]').val(" ");
					} else if (data == "err") {
						Swal.fire({
						title:'Error!',
						html: "<p>เกิดข้อผิดพลาด ไม่สามารถบันทึกข้อมูลได้!</p><p>Error : Add data not found.!</p>",
						icon: 'error',
						showConfirmButton: false,
						timer: 1500,
					})
						$('input[name=txt_name]').val(" ");
					}
					if (data == "errorT") {
						Swal.fire({
						title:'Error!',
						html: "<p>ไม่มีข้อมูล กรุณาทำการตรวจสอบด้วย!</p><p>Error :Data not found.!</p>",
						icon: 'warning',
						showConfirmButton: false,
						timer: 1500,

					})
					}
				}
			});
		});

















		const btnedit = $('#editpg');
		btnedit.on("click", function () {
			event.preventDefault();
			// var spg_id = $('input[name=txt_id]').val();
			// alert(spg_id);
			console.log($("#form_editpg").serialize());
			$.ajax({
				type: "POST",
				// dataType: "json",
				url: '<?php echo base_url(); ?>permission/editpergroup/',
				data: $("#form_editpg").serialize(),
				success: function (data) {
					// alert(status);
					if (data == "suc") {
					
						Swal.fire({
						title:'Success!',
						html: "<p>แก้ไขข้อมูลเรียบร้อย!</p><p>Success : Edit data success.!</p>",
						icon: 'success',
						showConfirmButton: false,
						timer: 1500,

					})
					} else if (data == "err") {
						
						Swal.fire({
						title:'Success!',
						html: "<p>เกิดข้อผิดพลาด ไม่สามารถแก้ไขข้อมูลได้!</p><p>Error : Edit data not found.!</p>",
						icon: 'error',
						showConfirmButton: false,
						timer: 1500,

					})
					}
					if (data == "errorT") {
						Swal.fire({
						title:'Success!',
						html: "<p>ไม่มีข้อมูล กรุณาทำการตรวจสอบด้วย!</p><p>Error :Data not found.!</p>",
						icon: 'warning',
						showConfirmButton: false,
						timer: 1500,

					})
					}
					// alert(data);
					// table.ajax.reload();
					// table.destroy();
					// if (data.status == 1) // Success
					// {
					// 	alert(data.message);
					// } else // Err

					// {

					// 	alert('error'+" "+data.message);

					// }
				}
			});
		});
	})

	function submit(para) {
		// alert(para);
		$("#modal_perGedit").modal("show");
		$("#spg_id").val(para);
		var part = $.ajax({
			url: '<?php echo base_url(); ?>Form',
			type: "post",
			data: {
				id: para
			}
		});

		part.done(function (data) {

			var data2 = JSON.parse(data);
			$.each(data2, function (key, value) {
				console.log(value.spg_id);
				// $("#spg_id").val(value.spg_id);
				$("#spg_name").val(value.name);
				if (value.enable == 1) {
					$("#enable_perGedit").prop("checked", true);
				} else {
					$("#disable_perGedit").prop("checked", true);
				}
			});
		});
	}
	// });
	function btndelete(pg_id) {
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
			url: '<?php echo base_url(); ?>Permission/deletepergroup',
			type: "post",
			data: {
				id: pg_id
			},success:function (data) {
				console.log(data);
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

</script>
