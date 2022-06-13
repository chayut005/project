<div id="input_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button style="font-size:15px;" type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal" aria-hidden="true">x</button>
          <h2 class="font">Edit Permissiongroup</h2>
        </div>

        <?php echo form_open('permission/editpergroup/'.$perDataEdit['spg_id'].'', array('id'=>'smart-form-register', 'class'=>'smart-form'));?>

            
            
            
            
        <fieldset class="vvv2">
      <section>
      <div class="box">
        <div class="input-group">
         <span class="input-group-addon"><i class="icon-append fa fa-group"></i></span>
         <input name="txt_name" type="text" class="form-control" placeholder="Permission Group Name" value="<?php echo $perDataEdit['name']; ?>">
        </div>
              </div>

      </section>
      </label>
      <section>
        <div class="radio">
        <label>Status :
                                            <input checked="checked" type="radio" id="under_10"value="1" name="rad_status"<?php echo set_radio('rad_status', '1', TRUE); ?>><label for="under_10">Enable</label>
                                            <input  type="radio" id="over_10" value="0" name="rad_status"<?php echo set_radio('rad_status','0'); ?>><label for="over_10">Disable</label>
												</label>
        </div>
        </label>
      </section>
      
  </fieldset>

  <footer class="vvv2">
    <button type="submit" class="btn btn-primary">
      Save
    </button>
    
    <input type="hidden" name="action" value="<?php echo base64_encode('editPermissionGroup');?>"  />
  </footer>  
            
            
            
            <?php echo form_close(); ?>
          
      </div>
    </div>
  </div>
















  <div id="modal_per" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button style="font-size:15px;" type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal" aria-hidden="true">x</button>
          <h2 class="font">Edit Permissiongroup</h2>
        </div>
<div class="modal-body">
    
</div>
      </div>
    </div>
  </div>