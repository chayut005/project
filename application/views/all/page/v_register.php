<style>
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

	@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

.wrapper{
  width: 100%;
  background: #fff;
  box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
  padding: 30px;
  border-radius:10px;
}


.wrapper .title{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 25px;
  color: black;
  text-transform: uppercase;
  text-align: center;
}

.wrapper .form{
  width: 100%;
}

.wrapper .form .inputfield{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}

.wrapper .form .inputfield label{
   width: 200px;
   color: #757575;
   margin-right: 10px;
  font-size: 14px;
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea{
  width: 100%;
  outline: none;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea{
  width: 100%;
  height: 125px;
  resize: none;
}

.wrapper .form .inputfield .custom_select{
  position: relative;
  width: 100%;
  height: 37px;
}

.wrapper .form .inputfield .custom_select:before{
  content: "";
  position: absolute;
  top: 12px;
  right: 10px;
  border: 8px solid;
  border-color: #d5dbd9 transparent transparent transparent;
  pointer-events: none;
}

.wrapper .form .inputfield .custom_select select{
  -webkit-appearance: none;
  -moz-appearance:   none;
  appearance:        none;
  outline: none;
  width: 100%;
  height: 100%;
  border: 0px;
  padding: 8px 10px;
  font-size: 15px;
  border: 1px solid #d5dbd9;
  border-radius: 3px;
}


.wrapper .form .inputfield .input:focus,
.wrapper .form .inputfield .textarea:focus,
.wrapper .form .inputfield .custom_select select:focus{
  border: 1px solid #fec107;
}

.wrapper .form .inputfield p{
   font-size: 14px;
   color: #757575;
}
.wrapper .form .inputfield .check{
  width: 15px;
  height: 15px;
  position: relative;
  display: block;
  cursor: pointer;
}
.check{
    position: absolute;
    top: -8px;
}
.wrapper .form .inputfield .check input[type="checkbox"]{
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
.wrapper .form .inputfield .check .checkmark{
  width: 15px;
  height: 15px;
  display: block;
  position: relative;
}
.wrapper .form .inputfield .check .checkmark:before{
  content: "";
  position: absolute;
  top: 4px;
  left: 1px;
  width: 12px;
  height: 2px;
  border: 2px solid;
  border-color: transparent transparent #fff #fff;
  transform: rotate(-45deg);
  display: none;
}
.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark{
  background: #fec107;
}

.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark:before{
  display: block;
}

.wrapper .form .inputfield .btn{
  width: 100%;
   padding: 8px 10px;
  font-size: 15px; 
  border: 0px;
  background:  #fec107;
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
}

.wrapper .form .inputfield .btn:hover{
  background: #ffd658;
}

.wrapper .form .inputfield:last-child{
  margin-bottom: 0;
}

@media (max-width:420px) {
  .wrapper .form .inputfield{
    flex-direction: column;
    align-items: flex-start;
  }
  .wrapper .form .inputfield label{
    margin-bottom: 5px;
  }
  .wrapper .form .inputfield.terms{
    flex-direction: row;
  }
}
</style>
        <link rel="stylesheet" type="text/css" href="fonts/style.css">
		<link rel="stylesheet" type="text/css" href="css/main-style.css">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<div class="wrapper ">
    <div class="title">
      Adduser
    </div>
    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input"required>
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input"required>
       </div>  
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input"required>
       </div>  
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" class="input"required>
       </div> 
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select>
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input"required>
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input name="bb" type="radio"required>
            <span class="checkmark"></span>
          </label>
          <p>Employee &nbsp&nbsp&nbsp</p>
          <label class="check">
            <input name="bb" type="radio"required>
            <span class="checkmark"></span>
          </label>
          <p>Admin</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn btn-primary">
      </div>
    </div>
</div>