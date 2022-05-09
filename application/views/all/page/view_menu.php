<style>
  .chid{
    margin-left:-50px;
  }
  .chid2{
    margin-left:-40px;
  }
  .zzz{
    width: 150px;
    height: 150px;
    border-radius: 50%;
  }
</style>
<header class="side-header">

<a href="<?php echo site_url('manage/home'); ?>">
  <div class="logo">
    <img class="zzz" src="https://s.isanook.com/ns/0/rp/r/w850/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL25zLzAvdWQvMzE5LzE1OTY2MzMvdG9vLmpwZw==.jpg">
  </div>
</a>

<nav class="navbar-side">
  
  <ul>
  <!--class="active"-->
    <li><a style="font-size:20px;" href="">
      <div class="svg-space chid2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 80" enable-background="new 0 0 64 64" xml:space="preserve"></svg></div><i class="">&nbsp</i><?php echo "Account : ".$this->session->userdata('sessName');?></a>
    </li>
    <hr>
    <li><a href="labs.html">
      <div class="svg-space chid"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 80" enable-background="new 0 0 64 64" xml:space="preserve"></svg></div><i class="fa fa-paper-plane bigger-180">&nbsp&nbsp</i> Request</a>
    </li>
    <li><a href="labs.html">
      <div class="svg-space chid"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 80" enable-background="new 0 0 64 64" xml:space="preserve"></svg></div><i class="fa fa-table bigger-180">&nbsp&nbsp</i> Table Account</a>
    </li>
    <li><a href="<?php echo site_url('register'); ?>">
      <div class="svg-space chid"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 80" enable-background="new 0 0 64 64" xml:space="preserve"></svg></div><i class="fa fa-user-plus bigger-180">&nbsp&nbsp</i> Register</a>
    </li>

    <li class="bottom"><a href="<?php echo site_url('manage/logout'); ?>">
      <div class="svg-space"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 80" enable-background="new 0 0 64 64" xml:space="preserve"></svg></div><i class="ace-icon fa fa-power-off bigger-180">&nbsp</i> Logout </a>
    </li>

  </ul>

</nav>

</header>

<main class="main-wrapper">

<header class="top-navbar">
  
  <div>
  <img class="animate__animated animate__heartBeat" src="<?php echo base_url(); ?>./help/page/img/help.png"  height="80"/>
  </div>


<!--
  <nav class="navbar-top">
    
    <ul>
      <li>
      <div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
      </div>
      </li>

    </ul>

  </nav> -->

</header>