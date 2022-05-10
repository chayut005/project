<style>
    .xxx{
        background: #00FA87;
        margin-left:168px;
    }
    .xxx2{
        background: #6DD100;
    }
    .xxx3{
      width: 100%;
    }
    .container{
        position: absolute;
        top: 10%;
        left: 10%;
        width:50% ;
    }
    .text{
        color: white;
    }
    .topnav {
  overflow: hidden;
  background-color: #444444;
}
.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #202020;
  color: white;
}

.topnav a.active {
  background-color: #2196F3;
  color: black;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
.top{
    position: absolute;
    top: 10px;
}
.t{
	position:absolute;
    top:-15px;
    left:42%;
    z-index:3;
	font-size:50px;
	color:#01BEB1;
}
.t2{
	position:absolute;
    top:-1px;
    left:56%;
    z-index:4;
	font-size:15px;
	color:#FF8D0E;
}
.color2 {
  background-color: white;
}
.bbb2{
   border-style: solid;
   border: 2px solid white;
}
.color3{
  color:white;
}
.t3{
  position:absolute;
    top:25px;
    left:5px;
    z-index:5;
	font-size:13px;
	color:white;
}
.t4{
  position:absolute;
    top:5px;
    left:25px;
    z-index:6;
	font-size:13px;
	color:white;
}
</style>
<div  class="topnav">
  <a style="float:right" class="text" href="#contact"><?php echo "ผู้ใช้:"." ".$this->session->userdata('sessName');?></a>
</div>
<div class="t"><b>Helpdesk</b></div>
<div class="t2">System</div>
<div class="t3"id="date"></div>
<div class="t4"id="time"></div>