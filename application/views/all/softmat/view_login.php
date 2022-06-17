<style>
	* {
		padding: 0;
		margin: 0;
		color: #1a1f36;
		box-sizing: border-box;
		word-wrap: break-word;
		font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Ubuntu, sans-serif;
	}

	.xxx {
		min-height: 100%;
		background-color: #ffffff;
	}

	h1 {
		letter-spacing: -1px;
	}

	a {
		color: #5469d4;
		text-decoration: unset;
	}

	.login-root {
		background: #fff;
		display: flex;
		width: 100%;
		min-height: 100vh;
		overflow: hidden;

	}

	.loginbackground {
		min-height: 692px;
		position: fixed;
		bottom: 0;
		left: 0;
		right: 0;
		top: 0;
		z-index: 0;
		overflow: hidden;
	}

	.flex-flex {
		display: flex;
	}

	.align-center {
		align-items: center;
	}

	.center-center {
		align-items: center;
		justify-content: center;
	}

	.box-root {
		box-sizing: border-box;
	}

	.flex-direction--column {
		-ms-flex-direction: column;
		flex-direction: column;
	}

	.loginbackground-gridContainer {
		display: -ms-grid;
		display: grid;
		-ms-grid-columns: [start] 1fr [left-gutter] (86.6px) [left-gutter] 1fr [end];
		grid-template-columns: [start] 1fr [left-gutter] repeat(16, 86.6px) [left-gutter] 1fr [end];
		-ms-grid-rows: [top] 1fr [top-gutter] (64px) [bottom-gutter] 1fr [bottom];
		grid-template-rows: [top] 1fr [top-gutter] repeat(8, 64px) [bottom-gutter] 1fr [bottom];
		justify-content: center;
		margin: 0 -2%;
		transform: rotate(-12deg) skew(-12deg);
	}

	.box-divider--light-all-2 {
		/* box-shadow: inset 0 0 0 2px #e3e8ee; */
		background-color: #7B89CF;
	}

	.box-background--blue {
		background-color: #5469d4;
	}

	.box-background--white {
		background-color: #ffffff;
	}

	.box-background--blue800 {
		background-color: #212d63;
	}

	.box-background--gray100 {
		background-color: #7fd3ed;
	}

	.box-background--cyan200 {
		background-color: #7fd3ed;
	}

	.padding-top--64 {
		padding-top: 64px;
	}

	.padding-top--24 {
		padding-top: 24px;
	}

	.padding-top--48 {
		padding-top: 60px;
	}

	.padding-bottom--24 {
		padding-bottom: 4px;

	}

	.padding-horizontal--48 {
		padding: 48px;
	}

	.padding-bottom--15 {
		padding-bottom: 15px;
	}

	.bbb {
		border-style: solid;
		border: 2px solid gray;
		border-radius: 5px;
	}

	.flex-justifyContent--center {
		-ms-flex-pack: center;
		justify-content: center;
	}

	.formbg {
		margin: 0px auto;
		width: 100%;
		max-width: 448px;
		background: #FCFEFF;
		border-radius: 4px;
		box-shadow: rgba(60, 66, 87, 0.12) 0px 7px 14px 0px, rgba(0, 0, 0, 0.12) 0px 3px 6px 0px;
	}

	span {
		display: block;
		font-size: 20px;
		line-height: 28px;
		color: #1a1f36;
	}

	label {
		margin-bottom: 10px;
	}

	.reset-pass a,
	label {
		font-size: 14px;
		font-weight: 600;
		display: block;
	}

	.reset-pass>a {
		text-align: right;
		margin-bottom: 10px;
	}

	.grid--50-50 {
		display: grid;
		grid-template-columns: 50% 50%;
		align-items: center;
	}

	.field input {
		font-size: 16px;
		line-height: 28px;
		padding: 8px 16px;
		width: 100%;
		min-height: 44px;
		border: unset;
		border-radius: 4px;
		outline-color: rgb(84 105 212 / 0.5);
		background-color: rgb(255, 255, 255);
		box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px,
			rgba(0, 0, 0, 0) 0px 0px 0px 0px,
			rgba(0, 0, 0, 0) 0px 0px 0px 0px,
			rgba(60, 66, 87, 0.16) 0px 0px 0px 1px,
			rgba(0, 0, 0, 0) 0px 0px 0px 0px,
			rgba(0, 0, 0, 0) 0px 0px 0px 0px,
			rgba(0, 0, 0, 0) 0px 0px 0px 0px;
	}

	input[type="submit"] {
		background-color: rgb(84, 105, 212);
		box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px,
			rgba(0, 0, 0, 0) 0px 0px 0px 0px,
			rgba(0, 0, 0, 0.12) 0px 1px 1px 0px,
			rgb(84, 105, 212) 0px 0px 0px 1px,
			rgba(0, 0, 0, 0) 0px 0px 0px 0px,
			rgba(0, 0, 0, 0) 0px 0px 0px 0px,
			rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;
		color: #fff;
		font-weight: 600;
		cursor: pointer;
	}

	a.ssolink {
		display: block;
		text-align: center;
		font-weight: 600;
	}

	.xxx {
		margin-top: 5px;
	}

	.fontx {
		font-size: 90px;
		color: #00ECB3;
		/* font-family: Times;
        font-style: italic;
        font-weight: bold;
        text-shadow: 0 0 3px #000000; */
	}

	.color {
		color: #FF8D0E;
	}

	.listing a {
		color: #697386;
		font-weight: 600;
		margin: 0 10px;
	}

	.animationRightLeft {
		animation: animationRightLeft 2s ease-in-out infinite;
	}

	.animationLeftRight {
		animation: animationLeftRight 2s ease-in-out infinite;
	}

	.tans3s {
		animation: animationLeftRight 3s ease-in-out infinite;
	}

	.tans4s {
		animation: animationLeftRight 4s ease-in-out infinite;
	}

	@keyframes animationLeftRight {
		0% {
			transform: translateX(0px);
		}

		50% {
			transform: translateX(1000px);
		}

		100% {
			transform: translateX(0px);
		}
	}

	@keyframes animationRightLeft {
		0% {
			transform: translateX(0px);
		}

		50% {
			transform: translateX(-1000px);
		}

		100% {
			transform: translateX(0px);
		}
	}
    .classcenter{
		margin-top: auto !important;
		margin-bottom: auto !important;
		margin-left: auto !important;
		margin-right: auto !important;
}
.background{
	/* background-color: #FF8D0E; */
	background-image: url('<?php echo base_url(); ?>./themes/softmat/img/bg4.png');
	background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
}
</style>
		
<div class="login-root">
	<div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
		<div class="loginbackground box-background--white padding-top--64 background">
			<div class="loginbackground-gridContainer">
				<div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
					<div class="box-root"
						style=" flex-grow: 1;">
					</div>
				</div>
				<div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
					<div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
				</div>
				<div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
					<div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
				</div>
				<div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
					<div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
				</div>
				<div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
					<div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
				</div>
				<div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
					<div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
				</div>
				<div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
					<div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
				</div>
				<div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
					<div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
				</div>
				<div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
					<div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
				</div>
			</div>
		</div>
		<div class="box-root  flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">

			<div class="formbg-outer classcenter">
			<div class="box-root  padding-bottom--24 flex-flex flex-justifyContent--center">
				<h1><b class="fontx">Helpdesk</b></h1>
				<span class="light-logo"><img src="<?php echo base_url();?>./themes/softmat/img/xnxx.png" height="20"
						alt="logo"></span>
			</div>
				<div class="formbg">
					<div class="formbg-inner padding-horizontal--48">
						<!-- <?php 
					if ($str_validate == FALSE){
						echo validation_errors();
					} 
					if ($this->session->flashdata('msg_error') != ''){
						echo $this->session->flashdata('msg_error');
					}
					?> -->
						<?php echo form_open("login/user", array('id'=>'login-form'));?>
						<div id="error_msg"></div>
						<div class="field padding-bottom--24">
	
							<label class="bbb">
								<input id="userr" type="text" name="userr" value="<?php echo set_value('userr');?>" placeholder="User"required  >
							</label>
						</div>
						<div class="field padding-bottom--24">
							<div class="grid--50-50">
							</div>

							<label class="bbb">
								<input id="password" type="password" name="pass" placeholder="Password"required >
								<span></span>
							</label>
						</div>
						<div class="space-4"></div>
						<div class="field padding-bottom--24">
							<input id="submit" type="submit" name="submit" value="Login">
						</div>
						<div class="field">
						</div>
						<input type="hidden" name="action" value="<?php echo base64_encode('login');?>" />
						<?php echo form_close();?>
					</div>
				</div>
				<h4 class="blue" id="id-company-text" style="text-align:center; font-size:15px;">&copy; TBKK THAILAND</h4>
			</div>
		</div>



		<div class="loginbackground padding-top--64" style="margin-top: 20%;">
			<div class="loginbackground-gridContainer">
				<div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
					<div class="box-root"
						style=" flex-grow: 1;">
					</div>
				</div>

				<div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
					<div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
				</div>


			</div>
		</div>





	</div>
</div>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.js"></script> -->
<script>





			

	$('#userr').on("blur",function(){
		// alert('55555555555555');
		var username =$('input[name=userr]').val();
		if(username === ""){
			// alert('xxxxx');
			// $('#smg_user').attr('');
		}

// 		$(function() {
// 			$('#userr').popover({
// placement: 'right',
// content: "Right?",
// template: '<div class="popover"><div class="arrow"></div><div class="popover-body"></div></div>'
// })
// console.log($(this).attr());
		

// 			})

		if(username !== ""){
			// alert('xxxxx');
			$('#smg_user').text("");
		}
		
		console.log("ttttttttt"+username);
		// $.ajax({
		// 	type: "POST",
		// 	// dataType: "json",
		// 	url: '<?php echo base_url(); ?>login/user',
		// 	data:{ 
		// 		user:username
		// 	},
		// 	success: function (data) {}
		// })
	})

	$('#password').on("blur",function(){
		// alert('55555555555555');
		var password =$('input[name=pass]').val();
		if(password === ""){
			// alert('xxxxx');
			$('#smg_pass').html("<span style='color:red;'>⚠กรุณากรอก Password</span>");
		}
		if(password !== ""){
			// alert('xxxxx');
			$('#smg_pass').text("");
		}
		
		console.log(password);
	})


</script>