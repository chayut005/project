<style>
    select {
		border: 1px solid;
		font-size: 16px;
		padding: 6px;
		border-radius: 3px;
		color: #8a97a0;
	}
      .vvv{
        background-color: white;
        font-size:12px;
      text-align:center;
      }
      .bor{
        border-radius:5px;
      }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pa">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <span class="light-logo"><img src="<?php echo base_url();?>./themes/softmat/img/xnxx.png"height="20" alt="logo"></span>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <!--<li class="breadcrumb-item active">Dashboard</li>-->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
									<div class="vvv2">
                  <h1 style="text-align:center;" class="font">Permission</h1>
                  <button style="color:white;background: linear-gradient(45deg, #75D247, #2ABF00 , #1F9B00);" data-target="#modal_peradd" data-toggle="modal" class="btn bg-success button1 "><i
						class="fa fa-plus"></i></button>
                                    <table id="datatable"  class="table vvv"style="width:100%">
    <thead>
        <tr>
    <th style="cursor: no-drop;color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">No</th>
    <th style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">Name</th>
    <th style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">Group</th>
    <th style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">Status</th>
    <th style="color:white;background: linear-gradient(45deg, #4575DA, #6F9EFF , #4575DA);border-radius:5px;">Action</th>
  </tr>
    </thead>
<tbody>
												

			</tbody>
  </table>
  </div>




				<!-- --------------------------------------------------------------modal--------Addpermissiongroup-------------------------------------------------- -->






				<div  id="modal_peradd" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
						
							<div  class="modal-body">
							<button style="font-size:15px;" type="button" class="close glyphicon glyphicon-remove"
									data-dismiss="modal" aria-hidden="true"></button>
								<h2 class="font">Add Permission</h2>
								<form name="frmadd" id="frmadd" method="post">
									</label>

                  <div class="input-group">
											<span class="input-group-addon"><i class="fa fa-unlock" ></i></span>
											<input name="txt_name" type="text" class="form-control" placeholder="Permission Name">
										</div>
                    
                    <div class="input-group"style="padding-top:10px";>
											<span class="input-group-addon"><i class="fa fa-pencil" ></i></span>
											<input name="txt_cont" type="text" class="form-control" placeholder="Controller/Method">
										</div>

                    
											<section>
                      <label style="padding-top:10px">
                        <?php
                           $optName = array();
    
                           $optName['0'] = '-- Please Select Groups --';
                           foreach($excLoadG->result() as $g){
                           if($g->{'del_by'} == '0');{
                            $optName[$g->spg_id] = $g->name;
                              }
                              }
                              $selected = (set_value('sel_group')) ? set_value('sel_group') : '-- Please Select Groups --';
                              if(form_error('sel_group')){ 
                              $setErrSel = "class='err'"; }
                              echo form_dropdown('sel_group', $optName,  $selected/*, $setErrSel*/);
                            ?>
                        </label>            
	
                                      
											</section>

									<section>
										<label>Status :
											<input checked="checked" type="radio" name="rad_status" id="enable"
												value="1" /><label title="1" for="enable">Enable</label>
											<input type="radio" name="rad_status" id="disable" value="0" /><label
												title="2" for="disable">Disable</label>
										</label>

									</section>





									<button type="submit" class="bgc btn btn-primary bgc" onclick="addper()">
										Add
									</button>
                  <input type="hidden" name="action" value="<?php echo base64_encode('addPermission');?>"  />
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






                    <?php if($frmEdit==FALSE){ ?>
                    <?php }else{// Form Edit ?>
							



                      <div id="input-modal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button style="font-size:15px;" type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal" aria-hidden="true">x</button>
          <h2 class="font">Edit Permission</h2>
        </div>

        <?php echo form_open('permission/editper/'.$perDataEdit['sp_id'].'');?>
              <div class="vvv2">
              
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-unlock" ></i></span>
                  <input name="txt_name" type="text" class="form-control" placeholder="Permission Name" value="<?php echo $perDataEdit['name']; ?>">
                </div>
                 
                  
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-pencil" ></i></span>
                  <input name="txt_cont" type="text" class="form-control" placeholder="Controller/Method" value="<?php echo $perDataEdit['controller']; ?>">
                </div>
                  
                  <section>
                    <label class="selectx">
                      
                      <?php
                                                        
                                    $optName = array();
                                    $optName['0'] = '-- Please Select Groups --';
                                    
                                    foreach($excLoadG->result() as $g){
                                        
                                        $optName[$g->spg_id] = $g->name;
                                        
                                        
                                    }
                                
                                    $selected = ($perDataEdit['spg_id']) ? $perDataEdit['spg_id'] : '-- Please Select Groups --';
                                    if(form_error('sel_group')){ $setErrSel = "class='err'"; }
                                    echo form_dropdown('sel_group', $optName,  $selected/*, $setErrSel*/);


                                    ?>

                                    <i></i>
                     </label>
                  </section>
                  <section>
              
                    <div class="radio">
                    <label>Status :
                      <input checked="checked" type="radio" id="under_10"  name="rad_status"value="1"<?php echo set_radio('rad_status', '1', TRUE); ?>><label for="under_10">Enable</label>
                      <input type="radio" id="over_10"  name="rad_status"value="0"<?php echo set_radio('rad_status','0'); ?>><label for="over_10">Disable</label>
                      </label>
                    </div>
            
                  </section>
                  
              

              <footer>
                <button type="submit" class="btn btn-primary">
                  Save
                </button>
                
                <input type="hidden" name="action" value="<?php echo base64_encode('editPermission');?>"  />
              </footer>
            <?php echo form_close(); ?>
          
      </div>
    </div>
  </div>
  <?php } ?>








            </div>
          </div>
          </div>
            
    


                </div>
                </div><!-- /.span -->
              </div><!-- /.row -->

      <!-- /.row -->	      
	</section>
    <!-- /.content -->
  </div>
  <script>
		function addper() {
			event.preventDefault();
      console.log($("#frmadd").serialize());
			$.ajax({
				type: "POST",
				// dataType: "json",
				url: '<?php echo base_url(); ?>Permission/addper',
				data: $("#frmadd").serialize(),
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
    }

    function btndelete(p_id) {
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
			url: '<?php echo base_url(); ?>Permission/deleteper/',
			type: "post",
			data: {
				id: p_id
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
				url: '<?php echo base_url(); ?>Permission/table_p'
			},
			columns: [
				{
					// data: "row_num",
					data: "sp_id",
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
					data: "groupName"
				},
				{ 
					data: "enable" ,
                              "render" : function(data, type, row, meta){
                                if(type === 'display'){
									console.log(data);
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
					data: "sp_id",
					"render": function (data, type, row, meta) {
						if (type === 'display') {
							html_data = '<button style="color:white;background: linear-gradient(45deg, #75D247, #2ABF00 , #1F9B00);" onclick="submit(' + data +
								')" class="btn bg-success button1"><i class="fa fa-edit "></i></button> <button style="color:white;background: linear-gradient(45deg, #FF9797, #DE321F , #DE321F);" onclick="btndelete('+data+')" class="btn bg-danger button1"><i class="fa fa-bitbucket"></i></button>';
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
			// table.ajax.reload();
		}, 1000);
	})
</script>














<!-- 
  <?php $list_permission = array_filter($list_permission);

if (!empty($list_permission)) {
 
$i = 1;	  											  
foreach ($list_permission as $permission_detail){
    if ($permission_detail['del_flag'] == '1'){

    
    if ($permission_detail['enable'] == '1'){ 
    
        $txt_status = '<span class="label label-sm label-success">Enable</span>'; 
        $txt_color = '#0EC952';
    
    }else{
       
      $txt_status = '<span class="label label-sm label-warning">Disable</span>'; 
        $txt_color = '#FF0000'; 
      
    }
?>
				<tr>
                <td style="text-align:center;"><?php echo $i;?></td>
				<td><?php echo $permission_detail['name'];?></td>
				<td><?php echo $permission_detail['groupName'];?></td>
                <td><?php echo '<span style="color:'.$txt_color.'">'.$txt_status.'</span>';?></td>
				<td>
        <a href="#input-modal" data-toggle="modal">
               
               <button class="btn bg-success button1"><i class="fa fa-edit "></i></button>
               </a>

            <a data-original-title='Delete' onclick="javascript:if(confirm('คุณต้องการลบรายการนี้ใช่หรือไม่?')){ window.location='<?php echo base_url().'permission/deleteper/'.$permission_detail['sp_id'];?>'; }else{ return false; }">
                    <button class="btn bg-danger button1"><i class="fa fa-bitbucket "></i></button>
              		</a>
				</td>
				</tr>
			<?php   $i++; }} } ?> -->