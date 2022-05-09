<style>
	@import url('https://fonts.googleapis.com/css?family=Questrial&display=swap');
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}
article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}
body{line-height:1}
ol,ul{list-style:none}
blockquote,q{quotes:none}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}
table{border-collapse:collapse;border-spacing:0}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-tap-highlight-color: rgb(220, 20, 60,0.6);
  -webkit-text-size-adjust:none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

  /* Let's get this party started */
::-webkit-scrollbar {
    width: 6px;
    height: 7px;
}

/* Track */
::-webkit-scrollbar-track {
    background: transparent;
    -webkit-border-radius: 0;
    border-radius: 100px;
}

/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 100px;
    border-radius: 100px;
      background: #fff;
}
::-webkit-scrollbar-thumb:window-inactive {
  background: transparent;
}

body {margin: 0;padding: 0;width: 100%;background-image: linear-gradient(180deg, #171717, #171717);height: 100vh; color: #fff;font-size: 62.5%;font-variant-ligatures: normal;font-kerning: normal;overflow-x: hidden;font-family: 'Questrial', sans-serif;font-size: 16px;line-height: 1.5;letter-spacing: 1.5px;font-weight: 500;}
p, span, a, div, input {font-family: inherit;font-size: 30px;}
img {max-width: 100%;}
h1, h2, h3, h4 {font-family: inherit;}
h2 {font-size: 40px;margin-bottom: 1rem;}
p {line-height: 1.5;margin-bottom: 1rem;}
a {text-decoration: none;cursor: pointer;font-size: inherit;color: inherit;position: relative;}
.btn {padding: 15px 50px;font-size: 18px;color: #fff;border-radius: 3px;background: #575757;display: inline-block;}
.side-header {position: fixed;width: 20%;height: 100vh;padding: 1rem 1.5%;overflow-x: hidden;background: #292a2c;z-index: 2;}
.navbar-side {margin-top: 2rem;height: 450px;position: relative;width: 100%;}.logo {width: 60%;height: auto;margin: auto;margin-top: 1rem !important;}
.navbar-side ul li {width: 100%;padding: 4px 1em;margin-bottom: 3px;display: block;border-radius: 3px;transition: background 0.1s ease-in-out;}
.navbar-side ul li:hover, .navbar-side ul li.active {background: #575757;}.bottom {position: absolute;bottom: 0;left: 0;}
          .navbar-side a {
            font-weight: bold;
            font-size: 14px;
            color: #fff;
            letter-spacing: 1.2px;
            position: relative;
            display: -webkit-box;
              display: -ms-flexbox;
                display: flex;
            -webkit-box-align: center;
              -ms-flex-align: center;
                  align-items: center;
          }
            .navbar-side li.active a{
              color: #81b1ef;
            }
            .navbar-side li.active a svg {
              fill: #81b1ef !important;
            }
            .navbar-side ul li a .svg-space {
              width: 60px;
            }
              .navbar-side ul li a .svg-space svg {
                width: 40px;
                height: 40px;
                margin-bottom: -12px;
                fill: #fff;
              }

    .main-wrapper {
      width: 80%;
      height: auto;
      float: right;
      padding: 2rem 4rem;
      position: relative;
    }
      .top-navbar {
        position: relative;
        width: 100%;
        height: 120px;
        background: #171717;
        display: -webkit-box;
          display: -ms-flexbox;
            display: flex;
        -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      }
        .page-title {
          position: absolute;
          left: 0;
          font-size: 27px;
          color: #fff;
          border-bottom: 2px solid #81b1ef;
        }
            .menu-toggle {
              cursor: pointer;
              display: none !important;
            }

        .navbar-top {
          position: absolute;
          right: 0;
          z-index: 99;
        }
          .navbar-top li {
            margin-left: 10px;
            display: inline-block;
          }
            .navbar-top li a svg {
              fill: #fff;
              width: 30px;
              height: 30px;
            }

        .works {
          -webkit-column-count: 3; 
          -moz-column-count: 3;
          column-count: 3;
          -webkit-column-gap: 2rem;
          -moz-column-gap: 2rem;
          column-gap: 2rem;
          -webkit-column-width: 33.3%;
          -moz-column-width: 33.3%;
          column-width: 33.3%;
          margin-top: 1rem;
        }
          .work, .lab {
            display: block;
            min-height: auto;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            margin-bottom: 2rem;
          }
            .work img {
              max-width: 100%;
            }
              .work:hover {
                transform: translateY(-10px);
              }
        .labs {
          -webkit-column-count: 2; 
          -moz-column-count: 2;
          column-count: 2;
          -webkit-column-width: 50%;
          -moz-column-width: 50%;
          column-width: 50%;
          -webkit-column-gap: 2rem;
          -moz-column-gap: 2rem;
          column-gap: 2rem;
        }
          .lab {
            min-height: 350px;
            margin-bottom: 2rem;
          }
            .lab .lab-img {
              height: 80%;
            }
            .lab .lab-title {
              font-size: 20px;
              display: block;
              height: 20%;
            }
        .about {
          width: 95%;
        }

        .contact {
          width: 60%;
        }
          .contact .contact-form {
            
          }
            .contact .contact-form input {
              padding: 30px 15px;
              width: 100%;
              border: 1px solid rgb(255,255,255,0.35);
              font-size: 18px;
              color: lightblue;
              border-radius: 3px;
              text-align: left;
              background: #575757;
              display: inline-block;
              margin-bottom: 2rem;
              outline: none;
              transition: background 0.1s ease-in-out;
            }
            .contact .contact-form textarea {
              padding: 30px 15px;
              width: 100%;
              border: 1px solid rgb(255,255,255,0.35);
              font-size: 18px;
              color: lightblue;
              border-radius: 3px;
              text-align: left;
              background: #575757;
              display: inline-block;
              margin-bottom: 2rem;
              min-height: 300px;
              outline: none;
              font-family: inherit;
              transition: background 0.1s ease-in-out;
            }
              .contact .contact-form input:focus, .contact .contact-form textarea:focus {
                border-color: rgb(255,255,255,0.7);
              }

        footer {
          width: 100%;
          margin-top: 4rem;
        }
          .footer-nav ul li {
            margin-right: 20px;
            display: inline-block;
          }
            .footer-nav ul li a {
              font-size: 27px;
              color: #575757;
              position: relative;
              transition: color 0.2s ease-in-out;
            }
            .footer-nav ul li:last-child {
              border-bottom: 1px solid #575757;
            }
              .footer-nav ul li a:hover {
                color: #81b1ef;
              }

        .searchbar {
          position: absolute;
          width: 100%;
          height: 120px;
          background: #171717;
          display: flex;
          align-items: center;
          padding: 0 1rem;
          z-index: 0;
          visibility: hidden;
          opacity: 0;
        }
          .searchbar input {
            width: 100%;
            background: transparent;
            border: none;
            outline: none;
            color: lightblue;
          }
          input[type="search"]::-webkit-search-decoration,
          input[type="search"]::-webkit-search-cancel-button,
          input[type="search"]::-webkit-search-results-button,
          input[type="search"]::-webkit-search-results-decoration {
            -webkit-appearance:none;
          }
          ::-ms-clear {
            display: none;
          }
          input[type=text]::-ms-clear {  display: none; width : 0; height: 0; }
          input[type=text]::-ms-reveal {  display: none; width : 0; height: 0; }
            
            .searchbar a svg {
              width: 30px;
              height: 30px;
              margin-top: 12px;
            }
            .bar--is-visible {
              opacity: 1;
              z-index: 102;
              visibility: visible;
            }

        .scroll-top {
          position: fixed;
          bottom: 2rem;
          right: 2rem;
          z-index: 99;
          width: 50px;
          height: 50px;
          cursor: pointer;
          fill: rgb(0,0,0,0.8);
          opacity: 0;
        }
        .scroll_turn.scroll-top {
          opacity: 1;
        }
    @media only screen and (max-width: 1280px) {
      .side-header {
        width: 25%;
      }
      .main-wrapper {
        width: 75%;
      }
      .works {
        -webkit-column-count: 2; 
        -moz-column-count: 2;
        column-count: 2;
        -webkit-column-width: 50%;
        -moz-column-width: 50%;
        column-width: 50%;
      }
    }

    @media only screen and (max-width: 1024px) {
      .side-header {
        width: 280px;
        z-index: 0;
        visibility: hidden;
        opacity: 0;
      }
      .menu-open .side-header {
        -webkit-transform: translateX(0px);
          transform: translateX(0px);
        opacity: 1;
        z-index: 102;
        visibility: visible;
      }
      .main-wrapper {
        width: 100%;
        padding: 0 2rem;
        padding-bottom: 2rem;
      }
      .about, .contact {
        width: 100%;
      }
      .works {
        -webkit-column-count: 3; 
        -moz-column-count: 3;
        column-count: 3;
        -webkit-column-width: 33.3%;
        -moz-column-width: 33.3%;
        column-width: 33.3%;
      }
      .menu-toggle {
        display: inline-block !important;
      }
      h2 {
        font-size: 35px;
      }
      p {
        font-size: 25px;
      }
    }

    @media only screen and (max-width: 768px) {
      .works {
        -webkit-column-count: 2; 
        -moz-column-count: 2;
        column-count: 2;
        -webkit-column-width: 50%;
        -moz-column-width: 50%;
        column-width: 50%;
      }
      h2 {
        font-size: 30px;
      }
      p {
        font-size: 20px;
      }
    }

    @media only screen and (max-width: 500px) {
      .works {
        -webkit-column-count: 1; 
        -moz-column-count: 1;
        column-count: 1;
        -webkit-column-gap: 0;
        -moz-column-gap: 0;
        column-gap: 0;
        -webkit-column-width: 100%;
        -moz-column-width: 100%;
        column-width: 100%;
      }
    }
    /*	
	Side Navigation Menu V2, RWD
	===================
	Author: https://github.com/pablorgarcia
 */

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
	  font-weight: normal;
      border: 1px solid black;
	  font-size: 13px;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  

	  width: 105%;
	  margin: 0 auto;
  display: table;
  border: 1px solid black;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 1%;
	  padding-top: 2%;
  padding-left:2%;  
  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
      border: 1px solid black;
      text-align:left;
      font-size: 14px;

}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
   
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
</style>
		<link rel="stylesheet" type="text/css" href="fonts/style.css">
		<link rel="stylesheet" type="text/css" href="css/main-style.css">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


<p>USER LIST</p>

<table class="container">
<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>
															<i class="ace-icon fa fa-user"></i>
															Username
														</th>
														<th>Password</th>
														<th>Name</th>
														<th>Group</th>
														<th>Status</th>
                                                        <th>
															<i class="ace-icon fa fa-calendar"></i>
															Date Created
														</th>
														<th>Action</th>
													</tr>
												</thead>
                                               

                                                <tbody>
												
												<?php
												 

												  $list_user = array_filter($list_user);
												  
										    	  if (!empty($list_user)) {
													  											  
												  foreach ($list_user as $user_detail){
													  if ($user_detail['del_flag'] == '1'){ 
													  
													  if ($user_detail['enable'] == '1'){ 
													  
													  	$txt_status = '<span class="label label-sm label-success">Enable</span>'; 
													  	$txt_color = '#0EC952';
													  
													  }else{
														 
														$txt_status = '<span class="label label-sm label-warning">Disable</span>'; 
													  	$txt_color = '#FF0000'; 
														
													  }
											  
													 
												?>


												<tr>
													<td style="text-align:left;">
														<label class="pos-rel">
																<input type="checkbox" class="ace" name="chk_uid[]" value="<?php echo $user_detail['su_id'];?>"/>
																<span class="lbl"></span>
															</label>
													<!-- <input class="checkbox_uid" type="checkbox" name="chk_uid[]" value="<?php echo $user_detail['su_id'];?>"> -->
													</td>
													<td><?php echo $user_detail['username'];?></td>
													<td><?php echo $user_detail['password'];?></td>
													<!-- <td><?php echo base64_decode($user_detail['password']);?></td> -->
													
												
													<td><?php echo $user_detail['firstname'].'  '.$user_detail['lastname'];?></td>
													<td style="text-align:left;"><?php echo $user_detail['group_name'];?></td>
													<td style="text-align:left;"><?php echo '<span style="color:'.$txt_color.'">'.$txt_status.'</span>';?></td>
													<td style="text-align:left;"> <?php echo date('Y-m-d H:i:s', strtotime($user_detail['date_create']));?></td>
													<td>
										
													</td>

												</tr>
												
												<?php }} } ?>


												
											</tbody>
</table>

		</main>

