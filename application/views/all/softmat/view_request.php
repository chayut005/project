<style>
    select {
      border: 1px solid;
      font-size: 16px;
      padding: 6px;
      border-radius: 3px;
      color: #8a97a0;
      width: 100%;
      box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    }


      .container{
        max-width:50%;
		}  
    
</style>
  <div class="content-wrapper pa">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <span class="light-logo"><img src="<?php echo base_url();?>./themes/softmat/img/xnxx.png"height="20" alt="logo"></span>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active">user</li>
        <li class="breadcrumb-item active">add_user</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
 
<div class="container">
<div class="vvv2">
<h1 class="font">Request Form</h1>
          <form method="POST" id="frmre" name="frmre">
                <div class="form-group">
              <label>Plant:</label>
                <input check="check" type="radio" id="under_13"  name="phase"value="phase10" <?php echo set_radio('phase', 'phase10', TRUE); ?>><label for="under_13" class="light">Phase 10</label>
              <input type="radio" id="over_13"  name="phase"value="phase8"<?php echo set_radio('phase', 'phase8'); ?>><label for="over_13" class="light">Phase 8</label>
            </div>
            <div class="form-group">
            <label>Type:</label>
                        <?php
                           $optName = array();
    
                           $optName['0'] = '-- Select Type --';
                           foreach($excLoadG->result() as $g){
                           if($g->{'del_by'} == '1');{
                            $optName[$g->tus_id] = $g->name;
                              }
                              }
                              $selected = (set_value('types')) ? set_value('types') : '-- Select Type --';
                              if(form_error('types')){ 
                              $setErrSel = "class='err'"; }
                              echo form_dropdown('types', $optName,  $selected/*, $setErrSel*/);
                            ?>
                   </div>
                   <div class="form-group">
            <label>System:</label>
                        <?php
                           $optName = array();
    
                           $optName['0'] = '-- Select System --';
                           foreach($excLoadGx->result() as $g){
                           if($g->{'del_by'} == '1');{
                            $optName[$g->sys_id] = $g->name;
                              }
                              }
                              $selected = (set_value('syst')) ? set_value('syst') : '-- Select System --';
                              if(form_error('syst')){ 
                              $setErrSel = "class='err'"; }
                              echo form_dropdown('syst', $optName,  $selected/*, $setErrSel*/);
                            ?>
                   </div>  
            <div class="form-group">
              <label>Detail</label>
              <textarea style="height:100px;" class="form-control" name="comment" placeholder="Detail........"></textarea>
            </div>
            <div class="form-group">
            <label>Priority:</label>
                        <?php
                           $optName = array();
    
                           $optName['0'] = '-- Select Priority --';
                           foreach($excLoadGs->result() as $g){
                           if($g->{'del_by'} == '1');{
                            $optName[$g->pri_id] = $g->name;
                              }
                              }
                              $selected = (set_value('pri')) ? set_value('pri') : '-- Select Priority --';
                              if(form_error('pri')){ 
                              $setErrSel = "class='err'"; }
                              echo form_dropdown('pri', $optName,  $selected/*, $setErrSel*/);
                            ?>
                            </div>
                   

            <div class="file-upload">
          <div class="image-upload-wrap">
            <input class="file-upload-input"type="file" id="file" name="image-title" onchange="readURL(this);" >
            <div class="drag-text">
              <h3>UPLOAD PICTURE</h3>
            </div>
          </div>
          <div class="file-upload-content">
            <img class="file-upload-image" src="#" alt="your image" />
            <div class="image-title-wrap">
              <button type="button" onclick="removeUpload()" class="remove-image">Remove <span id="image-title" name="image-title">UPLOAD PICTURE</span></button>
            </div>
          </div>
        </div>


















            
            <div class="form-group">
            <footer style="padding-top:20px;">
                <button id="addre" type="submit" class="bgc btn btn-primary">
                    Submit
                </button>
                </footer>
            </div>
            <input type="hidden" name="action" value="<?php echo base64_encode('request');?>"  />
          </form>










<!-- 
          <form id="form" method="post" enctype="multipart/form-data">
            <div class="file-upload">
              <div class="image-upload-wrap">
                <input class="file-upload-input" type='file' id="image-title" name="image-title" onchange="readURL(this);" />
   
                <div class="drag-text">
                  <h3>UPLOAD PICTURE</h3>
                </div>
              </div>
              <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                  <button type="button" onclick="removeUpload()" class="remove-image">Remove <span id="image-title" name="image-title">UPLOAD PICTURE</span></button>
                </div>
              </div>
            </div>
            <div class="form-group">
            <footer style="padding-top:20px;">
                <button type="submit" class="bgc btn btn-primary">
                    Submit
                </button>
              
                </footer>
            </div>

        </form> -->






        
          </div>
          </div>
	</section>
    <!-- /.content -->
  </div>

  <script>
      $(document).ready(function(){

$("#frmre").on("submit",function(e){
e.preventDefault();
var fd = new FormData(this);
var dt = $("#frmre").serialize();
var img = $('input[name=image-title]').val();


alert(img);

var files = $('#file')[0].files;
// console.log($("#frmre").serialize());
//   console.log( new FormData(this));
// e.preventDefault();0

$.ajax({
 url:'<?php echo base_url(); ?>Form/add_request',
type: "POST",
cache: false,
data: fd,dt,img,
  processData: false,
  contentType: false,


success: function(data)  {
  alert(data)
  if (data == "suc") {
					Swal.fire({
						title: 'Success!',
						html: "<p>???????????????????????????????????????????????????????????????!</p><p>Success : Add data success.!</p>",
						icon: 'success',
						showConfirmButton: false,
						timer: 1500,
					})
					$('input[name=txt_name]').val(" ");
				} else if (data == "err") {
					Swal.fire({
						title: 'Error!',
						html: "<p>?????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????!</p><p>Error : Add data not found.!</p>",
						icon: 'error',
						showConfirmButton: false,
						timer: 1500,
					})
					$('input[name=txt_name]').val(" ");
				}else if (data == "errimg") {
					Swal.fire({
						title: 'Error!',
						html: "<p>?????????????????????????????????????????? ???????????????????????????????????????!</p><p>Error : Add data not found.!</p>",
						icon: 'error',
						showConfirmButton: false,
						timer: 1500,
					})
					$('input[name=txt_name]').val(" ");
				}
				if (data == "errorT") {
					Swal.fire({
						title: 'Error!',
						html: "<p>????????????????????????????????? ???????????????????????????????????????????????????????????????!</p><p>Error :Data not found.!</p>",
						icon: 'warning',
						showConfirmButton: false,
						timer: 1500,

					})
				}
			

}       
});

// }
});
})
 </script>


<script>
  function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {

      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('#image-title').html(input.files[0].name);
   var $pic = input.files[0].name;
   alert($pic);
   
    };
 // 
    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
//   alert(input.files[0].name); exit();
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
  $('.image-upload-wrap').addClass('image-dropping');
 });
 $('.image-upload-wrap').bind('dragleave', function () {
  $('.image-upload-wrap').removeClass('image-dropping');
});

</script>


















  <!-- <script>
    $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url:'<?php echo base_url(); ?>Form/add_request',
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
    if(data=='invalid')
    {
     // invalid file format.
     $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
     $("#preview").html(data).fadeIn();
     $("#form")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 })); -->

		<!-- // function addre() {
    //   var img= $('input[name=image-title]').val();
		// 	$.ajax({
		// 		type: "POST",
		// 		// dataType: "json",
		// 		url: '<?php echo base_url(); ?>Form/add_request',
		// 		data:{
    //       img:img,
    //       form:form,
    //     },
		// 		success: function (datare) {
		// 			alert(datare);
		// 			if (datare == "suc") {
		// 				Swal.fire({
		// 				title:'Success!',
		// 				html: "<p>???????????????????????????????????????????????????????????????!</p><p>Success : Add data success.!</p>",
		// 				icon: 'success',
		// 				showConfirmButton: false,
		// 				timer: 1500,
		// 			})
    $("from").serialL
		// 				$('input[name=txt_name]').val(" ");
    //         $('input[name=comment]').val(" ");
		// 			} else if (datare == "err") {
		// 				Swal.fire({
		// 				title:'Error!',
		// 				html: "<p>?????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????!</p><p>Error : Add data not found.!</p>",
		// 				icon: 'error',
		// 				showConfirmButton: false,
		// 				timer: 1500,
		// 			})
		// 				$('input[name=txt_name]').val(" ");
    //         $('input[name=comment]').val(" ");

		// 			}
		// 			if (datare == "errorT") {
		// 				Swal.fire({
		// 				title:'Error!',
		// 				html: "<p>????????????????????????????????? ???????????????????????????????????????????????????????????????!</p><p>Error :Data not found.!</p>",
		// 				icon: 'warning',
		// 				showConfirmButton: false,
		// 				timer: 1500,

		// 			})
		// 			}
		// 		}
		// 	});
    // } -->





<!-- 
    $(document).ready(function(){

$("#frmre").on("submit",function(e){
e.preventDefault();
var fd = new FormData(this);
var files = $('#file')[0].files;
// console.log($("#frmre").serialize());
//   console.log( new FormData(this));
// e.preventDefault();0


if(files.length > 0 ){
console.log(files.length);
fd.append('file',files[0]);
$.ajax({
 url:'<?php echo base_url(); ?>Form/add_request',
type: "POST",
data: fd,
contentType: false,
processData: false,


//  success: function(data)         
});
};
// }
});
}) -->
    </script>