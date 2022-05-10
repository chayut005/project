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

img {max-width: 100%;}
h1, h2, h3, h4 {font-family: inherit;}
h2 {font-size: 40px;margin-bottom: 1rem;}
p {line-height: 1.5;margin-bottom: 1rem;}
a {text-decoration: none;cursor: pointer;font-size: inherit;color: inherit;position: relative;}
.btn {padding: 15px 50px;font-size: 18px;color: #fff;border-radius: 3px;background: #575757;display: inline-block;}
.side-header {position: fixed;width: 20%;height: 100vh;padding: 1rem 1.5%;overflow-x: hidden;background: #292a2c;z-index: 2;}
.navbar-side {margin-top: 2rem;height: 450px;position: relative;width: 100%;}.logo {width: 60%;height: auto;margin: auto;margin-top: 1rem !important;}
.navbar-side ul li {width: 100%;padding: 4px 1em;margin-bottom: 3px;display: block;border-radius: 3px;}
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
  .padi{
  padding: 10px;;
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
    <li><a style="font-size:20px;" href="<?php echo site_url('manage/home'); ?>">
      <div class="svg-space chid2 padi"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 80" enable-background="new 0 0 64 64" xml:space="preserve"></svg></div><i class="">&nbsp</i><?php echo "Account : ".$this->session->userdata('sessName');?></a>
    </li>
    <hr>
    <li><a href="labs.html">
      <div class="svg-space chid padi"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 80" enable-background="new 0 0 64 64" xml:space="preserve"></svg></div><i class="fa fa-paper-plane bigger-180">&nbsp&nbsp</i> Request</a>
    </li>
    <li><a href="<?php echo site_url('table/table'); ?>">
      <div class="svg-space chid padi"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 80" enable-background="new 0 0 64 64" xml:space="preserve"></svg></div><i class="fa fa-table bigger-180">&nbsp&nbsp</i> Table Account</a>
    </li>
    <li><a href="<?php echo site_url('register'); ?>">
      <div class="svg-space chid padi"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 80" enable-background="new 0 0 64 64" xml:space="preserve"></svg></div><i class="fa fa-user-plus bigger-180">&nbsp&nbsp</i> Adduser</a>
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
    <a href="<?php echo site_url('manage/home'); ?>">
  <img class="animate__animated animate__heartBeat" src="<?php echo base_url(); ?>./help/page/img/help.png"  height="80"/>
   </a>
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