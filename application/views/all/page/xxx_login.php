<style>
  .box{
  padding: 20px 10px;
  max-width: 1000px;
  margin: 0 auto;
}





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
</style>
<div class="table-reponsive box">
<table id="example" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
            </tr>
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
            </tr>
            <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
            </tr>
            <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
            </tr>
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
            </tr>
            <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>$237,500</td>
            </tr>
            <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>$132,000</td>
            </tr>
            <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>$217,500</td>
            </tr>
            <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>$345,000</td>
            </tr>
            <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>$675,000</td>
            </tr>
            <tr>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011/12/12</td>
                <td>$106,450</td>
            </tr>
            <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sidney</td>
                <td>23</td>
                <td>2010/09/20</td>
                <td>$85,600</td>
            </tr>
            <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009/10/09</td>
                <td>$1,200,000</td>
            </tr>
            <tr>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>2010/12/22</td>
                <td>$92,575</td>
            </tr>
            <tr>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>2010/11/14</td>
                <td>$357,650</td>
            </tr>
            <tr>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>2011/06/07</td>
                <td>$206,850</td>
            </tr>
            <tr>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>2010/03/11</td>
                <td>$850,000</td>
            </tr>
            <tr>
                <td>Shou Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td>2011/08/14</td>
                <td>$163,000</td>
            </tr>
            <tr>
                <td>Michelle House</td>
                <td>Integration Specialist</td>
                <td>Sidney</td>
                <td>37</td>
                <td>2011/06/02</td>
                <td>$95,400</td>
            </tr>
            <tr>
                <td>Suki Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td>53</td>
                <td>2009/10/22</td>
                <td>$114,500</td>
            </tr>
            <tr>
                <td>Prescott Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td>2011/05/07</td>
                <td>$145,000</td>
            </tr>
            <tr>
                <td>Gavin Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td>2008/10/26</td>
                <td>$235,500</td>
            </tr>
            <tr>
                <td>Martena Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td>2011/03/09</td>
                <td>$324,050</td>
            </tr>
            <tr>
                <td>Unity Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/12/09</td>
                <td>$85,675</td>
            </tr>
            <tr>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>2008/12/16</td>
                <td>$164,500</td>
            </tr>
            <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010/02/12</td>
                <td>$109,850</td>
            </tr>
            <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009/02/14</td>
                <td>$452,500</td>
            </tr>
            <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008/12/11</td>
                <td>$136,200</td>
            </tr>
            <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008/09/26</td>
                <td>$645,750</td>
            </tr>
            <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011/02/03</td>
                <td>$234,500</td>
            </tr>
            <tr>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011/05/03</td>
                <td>$163,500</td>
            </tr>
            <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2009/08/19</td>
                <td>$139,575</td>
            </tr>
            <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>2013/08/11</td>
                <td>$98,540</td>
            </tr>
            <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/07/07</td>
                <td>$87,500</td>
            </tr>
            <tr>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2012/04/09</td>
                <td>$138,575</td>
            </tr>
            <tr>
                <td>Zenaida Frank</td>
                <td>Software Engineer</td>
                <td>New York</td>
                <td>63</td>
                <td>2010/01/04</td>
                <td>$125,250</td>
            </tr>
            <tr>
                <td>Zorita Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
                <td>2012/06/01</td>
                <td>$115,000</td>
            </tr>
            <tr>
                <td>Jennifer Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>43</td>
                <td>2013/02/01</td>
                <td>$75,650</td>
            </tr>
            <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
            </tr>
            <tr>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>2011/03/21</td>
                <td>$356,250</td>
            </tr>
            <tr>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>2009/02/27</td>
                <td>$103,500</td>
            </tr>
            <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010/07/14</td>
                <td>$86,500</td>
            </tr>
            <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008/11/13</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011/06/27</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
            </tr>
        </tbody>
    </table>
</div>