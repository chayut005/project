<style>
	.vvv {
		font-size: 12px;
		background-color: white;
		text-align: center;
	}



	select {
		border: none;
	}

</style>
<div class="content-wrapper pa">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<span class="light-logo"><img src="<?php echo base_url(); ?>./themes/softmat/img/xnxx.png" height="20"
				alt="logo"></span>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<!--<li class="breadcrumb-item active">Dashboard</li>-->
			<li class="breadcrumb-item active">groups</li>
			<li class="breadcrumb-item active">user_group</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">




		<div class="row">
			<div class="col-xs-12">




				<div class="clearfix">
					<div class="pull-right tableTools-container"></div>
				</div>
			</div>

			<!-- div.table-responsive -->

			<!-- div.dataTables_borderWrap -->
		</div>
		<!-- <?php if ($this->session->flashdata('msgError') != '') {
			echo $this->session->flashdata('msgError');
		} ?>
		<?php if ($this->session->flashdata('msgResponse') != '') {
			echo $this->session->flashdata('msgResponse');
		} ?> -->
		<div class="vvv2">



			<h1 style="text-align:center;" class="font">User Groups</h1>
			<button style="color:white;background: linear-gradient(45deg, #75D247, #2ABF00 , #1F9B00);" data-target="#modal_Gadd" data-toggle="modal" class="btn bg-success button1 "><i
						class="fa fa-plus"></i></button>
			<table id="datatable" class="table vvv"style="width:100%;">
				<thead>
					<tr>
						<th  style="cursor: no-drop;color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;" class="detail-col">No</th>
						<th  style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">Name</th>
						<th  style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">Status</th>
						<th  style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;" class="hidden-480">Action</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
			
			</table>

		</div>





		<!-- --------------------------------------------------------------modal--------Add_group-------------------------------------------------- -->






		<div id="modal_Gadd" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<form name="form_add" id="form_add">
						<h2 class="font">Add Permissiongroup</h2>
						<fieldset>


							<div class="">
								<div class="input-group">
									<span class="input-group-addon"><i class="icon-append fa fa-group"></i></span>

									<input name="txt_name" type="text" class="form-control"
										placeholder="Usergroup Name">

								</div>

								<label>Status :
									<input checked type="radio" id="under_13" name="rad_status" value="1"><label for="under_13">Enable</label>
									<input type="radio" id="over_13" name="rad_status" value="0"><label for="over_13">Disable</label>
								</label>



						</fieldset>
						<footer>
							<button onclick="addgroup()" type="submit" class="btn btn-primary">
								Add
							</button>
							<input type="hidden" name="action" value="<?php echo base64_encode('addUsergroup'); ?>" />
						</footer>
					</div>
					</form>
				</div>
			</div>
		</div>
</div>















<!-- --------------------------------------------------------------modal--------Edit_group-------------------------------------------------- -->











<div id="modal_Gedit" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button style="font-size:15px;" type="button" class="close glyphicon glyphicon-remove"
					data-dismiss="modal" aria-hidden="true"></button>
				<h2 class="font">Edit Permissiongroup</h2>
			</div>
			<div class="modal-body">
				<?php echo form_open('manage_group/edit/', array('id' => 'smart-form-register', 'class' => 'smart-form')); ?>

				<div class="">
					<fieldset>

						<div class="input-group">

							<span class="input-group-addon"><i class="icon-append fa fa-group"></i></span>

							<input name="txt_name" type="text" class="form-control long" placeholder="Usergroup Name"
								id="g_name">

						</div>


						<label>Status :

							<input type="radio" class="chk_end" checked="" id="enable_perGedit" name="rad_status"
								<?php echo set_radio('rad_status', '1', TRUE); ?>>
							<label id="enable" for="enable_perGedit">Enable</label>

							<input type="radio" id="disable_perGedit" checked="" class="chk_dis" name="rad_status"
								<?php echo set_radio('rad_status', '0'); ?>>
							<label id="disable" for="disable_perGedit">Disable</label>
						</label>


					</fieldset>
					<div class="show_data">5555</div>
					<footer>
						<button type="submit" class="btn btn-primary">
							Save
						</button>
						<input type="hidden" name="action" value="<?php echo base64_encode('editUsergroup'); ?>" />
					</footer>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>

<!-- ------------------------------------------------------------------end--modal-------------------------------------------------------- -->

</section>
<!-- /.content -->
</div>
<script>
	function submit(para) {
		var part = $.ajax({
			url: '<?php echo base_url(); ?>Manage_group/GET_MASTER_SYS_PERMISSION_GROUP',
			type: "post"
			//   data:{
			// 	  id:para
			//   }
		});

		part.done(function (data) {

			var data2 = JSON.parse(data);
			var text_html = ""

			var part2 = $.ajax({
				url: '<?php echo base_url(); ?>Manage_group/load_permission_by_id',
				type: "post",
				data: {
					id: para
				}
			});
			part2.done(function (data_value) {
				var result = JSON.parse(data_value);
				var i = 1;
				var d = "vehicle";
				console.log("result = " , result)
				console.log("data2 = " , data2)
				$.each(data2, function (key, value) {	
					if ( value.spg_id === "1") {
							text_html += "<input type='checkbox' id='"+ d + i +"' name='"+ d + i +"' value='" + value1.spg_id + "' checked>"
							etext_html += "<label for='"+ d + i +"'> " + value.name + "</label><br>"
							
							
							$.each(result, function (key, value1) {
				
							text_html += "<input type='checkbox' id='"+ d + i +"' name='"+ d + i +"' value='" + value1.spg_id + "' checked>"
							etext_html += "<label for='"+ d + i +"'> " + value.name + "</label><br>"
						})
					}	
						
					
					
					
						
						
					i++;
				});
				
				$(".show_data").html(text_html)
			})
		});
	}

</script>
<script>
	$(document).ready(function () {
		var cnt = 1;
		var table = $('#datatable').DataTable({
			buttons: ['copy', 'excel', 'pdf', 'colvis'],
			// order: [1, 'asc'],
			lengthMenu: [
				[5, 10, 25, 50],
				[5, 10, 25, 'All'],
			],
			// lengthChange: false,
			scrollX: true,
			ajax: {
				url: '<?php echo base_url(); ?>Manage_group/table_g'
			},
			columns: [
				{
					// data: "row_num",
					data: "sug_id",
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
									if(row.enable === '0'){
										data = '<div  style="color:white; background: linear-gradient(45deg, #FFC43B, #FF9D30 , #FF7530);border-radius:30px;height: 25px;margin:auto;max-width: 100px;padding: 3px;">disable</div>';

									}else{
										data = '<div  style="color:white;background: linear-gradient(45deg, #6F9EFF, #3868CD , #6F9EFF);border-radius:30px;height: 25px;margin:auto;max-width: 100px;padding: 3px;">enable</div>';

									}
                                }          
							    
                                return data;
                              }
                            },
				{
					data: "sug_id",
					"render": function (data, type, row, meta) {
						if (type === 'display') {
							html_data = '<button style="color:white;background: linear-gradient(45deg, #75D247, #2ABF00 , #1F9B00);" onclick="submit(' + data +
								')" class="btn bg-success button1"><i class="fa fa-edit "></i></button> <button style="color:white;background: linear-gradient(45deg, #FF9797, #DE321F , #DE321F);"onclick="btndelete(' + data +')" class="btn bg-danger button1"><i class="fa fa-bitbucket"></i></button>';
						}
						return html_data;
					}

				}
				
			]

		});
		table.buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');
		setInterval(function () {
			$('#datatable').DataTable().ajax.reload(null, false);
			cnt=1;
		}, 1000);
	})
</script>






<script>
		function addgroup() {
			event.preventDefault();
			$.ajax({
				type: "POST",
				url: '<?php echo base_url(); ?>manage_group/add',
				data: $("#form_add").serialize(),
				success: function (data) {
					console.log(data);
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
					}else{
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
		}
		function btndelete(g_id) {
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
			url: '<?php echo base_url(); ?>manage_group/delete',
			type: "post",
			data: {
				id: g_id
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




























<!-- 


<tbody>

<?php


$list_usergroup = array_filter($list_usergroup);

if (!empty($list_usergroup)) {


	$i = 1;
	foreach ($list_usergroup as $usergroup_detail) {
		if ($usergroup_detail['del_flag'] == '1') {

			if ($usergroup_detail['enable'] == '1') {

				$txt_status = '<span class="label label-sm label-success">Enable</span>';
				$txt_color = '#0EC952';
			} else {

				$txt_status = '<span class="label label-sm label-warning">Disable</span>';
				$txt_color = '#FF0000';
			}


?>

<tr>
	<td style="text-align:center;"><?php echo $i; ?></td>
	<td><?php echo $usergroup_detail['name']; ?></td>

	<td><?php echo '<span style="color:' . $txt_color . '">' . $txt_status . '</span>'; ?></td>

	<td>
		<a data-target="#modal_Gedit" data-toggle="modal"
			onclick="submit(<?php echo $usergroup_detail['sug_id']; ?>)">

			<button class="btn bg-success button1"><i class="fa fa-edit "></i></button>
		</a>
		<a data-original-title='Delete'
			onclick="javascript:if(confirm('คุณต้องการลบรายการนี้ใช่หรือไม่?')){ window.location='<?php echo base_url() . 'usergroup/delete/' . $usergroup_detail['sug_id']; ?>'; }else{ return false; }">
			<button class="btn bg-danger button1"><i class="fa fa-bitbucket "></i></button>
		</a>
	</td>
</tr>
<?php $i++;
		}
	}
} ?>
</tbody> -->