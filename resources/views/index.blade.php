
 <!-- Fonts -->
 <link rel="icon" type="image/png" href="{{ url('favicon.png') }}"/>
 <link href="{{ url('./ddmenu/ddmenu.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <script src="ddmenu/ddmenu.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    

<style>
   @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

   *{
     font-family: 'roboto';
     font-size: 0.99em;
   }

   @font-face {
    font-family: 'roboto';
    src: url('fonts/roboto_regular.ttf')  format('truetype');
  }

  .row-bottom-margin{

  }

  #box-one{

    background:#F3F3F3;

    font-family:Helvetica
  }

  #box-one p, .total{
    color:#333333;
    font-weight:normal
  }

  #box-one p{
    font-size:1.3em;
    text-align:center;
    line-height:0.8;
  }

  #box-one .total{
    font-size:4.0em;
    text-align:center;
    display:block;
  }

  .counter-value, .counter-value-partnerships{
    text-align: center;
    font-weight: bold;
    color: #333333;
    font-size: 180%;
    margin-bottom: 30px;
  }

  .heading-test {
    text-align: center;
    color: #454343;
    font-size: 30px;
    font-weight: 700;
    position: relative;
    margin-bottom: 70px;
    text-transform: uppercase;
    z-index: 999;
  }
  .white-heading{
    color: #ffffff;
  }
  .heading-test:after {
    content: ' ';
    position: absolute;
    top: 100%;
    left: 50%;
    height: 40px;
    width: 180px;
    border-radius: 4px;
    transform: translateX(-50%);
    background: url(img/heading-line.png);
    background-repeat: no-repeat;
    background-position: center;
  }
  .white-heading:after {
    background: url(https://i.ibb.co/d7tSD1R/heading-line-white.png);
    background-repeat: no-repeat;
    background-position: center;
  }

  .heading-test span {
    font-size: 18px;
    display: block;
    font-weight: 500;
  }
  .white-heading span {
    color: #ffffff;
  }
  /*-----Testimonial-------*/

  .testimonial:after {
    position: absolute;
    top: -0 !important;
    left: 0;
    content: " ";
    background: url(img/testimonial.bg-top.png);
    background-size: 100% 100px;
    width: 100%;
    height: 100px;
    float: left;
    z-index: 99;
  }

  .testimonial {
    min-height: 375px;
    position: relative;
    background: url(https://i.ibb.co/PTJDkgb/testimonials.jpg);
    padding-top: 50px;
    padding-bottom: 50px;
    background-position: center;
    background-size: cover;
  }
  #testimonial4 .carousel-inner:hover{
    cursor: -moz-grab;
    cursor: -webkit-grab;
  }
  #testimonial4 .carousel-inner:active{
    cursor: -moz-grabbing;
    cursor: -webkit-grabbing;
  }
  #testimonial4 .carousel-inner .item{
    overflow: hidden;
  }

  .testimonial4_indicators .carousel-indicators{
    left: 0;
    margin: 0;
    width: 100%;
    font-size: 0;
    height: 20px;
    bottom: 15px;
    padding: 0 5px;
    cursor: e-resize;
    overflow-x: auto;
    overflow-y: hidden;
    position: absolute;
    text-align: center;
    white-space: nowrap;
  }
  .testimonial4_indicators .carousel-indicators li{
    padding: 0;
    width: 14px;
    height: 14px;
    border: none;
    text-indent: 0;
    margin: 2px 3px;
    cursor: pointer;
    display: inline-block;
    background: #000000;
    -webkit-border-radius: 100%;
    border-radius: 100%;
  }
  .testimonial4_indicators .carousel-indicators .active{
    padding: 0;
    width: 14px;
    height: 14px;
    border: none;
    margin: 2px 3px;
    background-color: #000000;
    -webkit-border-radius: 100%;
    border-radius: 100%;
  }

  .testimonial4_indicators .carousel-indicators::-webkit-scrollbar{
    height: 3px;
  }
  .testimonial4_indicators .carousel-indicators::-webkit-scrollbar-thumb{
    background: #eeeeee;
    -webkit-border-radius: 0;
    border-radius: 0;
  }

  .testimonial4_control_button .carousel-control{
    top: 175px;
    opacity: 1;
    width: 40px;
    bottom: auto;
    height: 40px;
    font-size: 10px;
    cursor: pointer;
    font-weight: 700;
    overflow: hidden;
    line-height: 38px;
    text-shadow: none;
    text-align: center;
    position: absolute;
    background: transparent;
    border: 2px solid #000000;
    text-transform: uppercase;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all 0.6s cubic-bezier(0.3,1,0,1);
    transition: all 0.6s cubic-bezier(0.3,1,0,1);
  }
  .testimonial4_control_button .carousel-control.left{
    left: 7%;
    top: 50%;
    right: auto;
  }
  .testimonial4_control_button .carousel-control.right{
    right: 7%;
    top: 50%;
    left: auto;
  }
  .testimonial4_control_button .carousel-control.left:hover,
  .testimonial4_control_button .carousel-control.right:hover{
    color: #000;
    background: #000000;
    border: 2px solid #fff;
  }

  .testimonial4_header{
    top: 0;
    left: 0;
    bottom: 0;
    width: 550px;
    display: block;
    margin: 30px auto;
    text-align: center;
    position: relative;
  }
  .testimonial4_header h4{
    color: #ffffff;
    font-size: 30px;
    font-weight: 600;
    position: relative;
    letter-spacing: 1px;
    text-transform: uppercase;
  }

  .testimonial4_slide{
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 70%;
    margin: auto;
    padding: 20px;
    position: relative;
    text-align: center;
  }
  .testimonial4_slide img {
    top: 0;
    left: 0;
    right: 0;
    width: 136px;
    height: 136px;
    margin: auto;
    display: block;
    color: #f2f2f2;
    font-size: 18px;
    line-height: 46px;
    text-align: center;
    position: relative;
    border-radius: 50%;
    box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    -moz-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    -o-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    -webkit-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
  }
  .testimonial4_slide p {
    color: #ffffff;
    font-size: 20px;
    line-height: 1.4;
    margin: 40px 0 20px 0;
  }
  .testimonial4_slide h4 {
    color: #ffffff;
    font-size: 22px;
  }

  .testimonial .carousel {
    padding-bottom:50px;
  }
  .testimonial .carousel-control-next-icon, .testimonial .carousel-control-prev-icon {
    width: 35px;
    height: 35px;

  }
  .carousel-control-prev-icon{
    background-color: #333333;
    color: #333333;
    background: #333333;

  }

  .our-partners{
    text-align:center;
    padding: 20px;
  }

  /* Slider */
  .slick-slide {
    margin: 0px 20px;
  }

  .slick-slide img {
    width: 100%;
  }

  .slick-slider
  {
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
  }

  .slick-list
  {
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
  }
  .slick-list:focus
  {
    outline: none;
  }
  .slick-list.dragging
  {
    cursor: pointer;
    cursor: hand;
  }

  .slick-slider .slick-track,
  .slick-slider .slick-list
  {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  .slick-track
  {
    position: relative;
    top: 0;
    left: 0;
    display: block;
  }
  .slick-track:before,
  .slick-track:after
  {
    display: table;
    content: '';
  }
  .slick-track:after
  {
    clear: both;
  }
  .slick-loading .slick-track
  {
    visibility: hidden;
  }

  .slick-slide
  {
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
  }
  [dir='rtl'] .slick-slide
  {
    float: right;
  }
  .slick-slide img
  {
    display: block;
  }
  .slick-slide.slick-loading img
  {
    display: none;
  }
  .slick-slide.dragging img
  {
    pointer-events: none;
  }
  .slick-initialized .slick-slide
  {
    display: block;
  }
  .slick-loading .slick-slide
  {
    visibility: hidden;
  }
  .slick-vertical .slick-slide
  {
    display: block;
    height: auto;
    border: 1px solid transparent;
  }
  .slick-arrow.slick-hidden {
    display: none;
  }


  .butn:link,
  .butn:visited {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    text-transform: uppercase;
    text-decoration: none;
    background-color: #5e16bd;
    background-image: linear-gradient(90deg, #0059A9, #3088ED);
    padding: 1rem 1.5rem;
    height: 3rem;
    width: 12rem;
    margin-right: 13px;
    border-radius: 4px;
    border: none;
    color: #fff;
    position: relative;
    overflow: hidden;
    transition: all .3s ease-in-out;
  }
  .butn::before {
    background: #fff;
    content: "";
    height: 155px;
    opacity: 0;
    position: absolute;
    top: -50px;
    transform: rotate(35deg);
    width: 50px;
    transition: all 3000ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  .butn::after {
    background: #fff;
    content: "";
    height: 20rem;
    opacity: 0;
    position: absolute;
    top: -50px;
    transform: rotate(35deg);
    transition: all 3000ms cubic-bezier(0.19, 1, 0.22, 1);
    width: 8rem;
  }
  .butn__new::before {
    left: -50%;
  }

  .butn__new::after {
    left: -100%;
  }

  .butn:hover,
  .butn:active {
    transform: translateY(-3px);
    color: #fff;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .3);
  }

  .butn__new:hover::before {
    left: 120%;
    opacity: 0.5s;
  }

  .butn__new:hover::after {
    left: 200%;
    opacity: 0.6;
  }
  .butn span {
    z-index: 20;
  }
  .grid-top-box {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 2fr));
    grid-auto-rows: 180px;
    grid-gap: 20px;
    height: 100%;
    text-align: center;
    justify-content: center;
  }
  .grid-second-box {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 2fr));
    grid-auto-rows: 180px;
    grid-gap: 20px;
    height: 100%;
    text-align: center;
    justify-content: center;
  }


  .grid-card {
   /* display: flex;*/
   background: #f2f2f2;
   border-radius: 5px;
   justify-content: center;
   box-shadow: 4px 4px 8px -3px rgba(0, 0, 0, 0.15);
 }

 .grid-card:hover{
   box-shadow: 4px 4px 8px -1px rgba(0, 0, 0, 0.15);
 }
/*.content-container {
  display: flex;
  flex-direction: column;
  align-items: flex-top;
  padding-left:  20px;
  padding-right:  20px;
  justify-content: center;
}
*/

.dc-heading{
  font-weight: bolder;
  font-size: 1.6em;
}
.title {
  margin: 26px 0 5px 0;
  font-weight: bold;
}

.content {
  font-size: 0.8em;
  margin: 0;
}


.img-logo{
  vertical-align:none;
}
.inner-nav{
 width: 92%;
 margin: auto;
 display: flex;
 flex-wrap: wrap;
 box-sizing: border-box;
 justify-content: center;
}

.grid-top-boxes {
  background-color: #eee;
  width: 1000px;
  margin: 30px auto;
  display: grid;
  grid-template-rows: repeat(2, 150px);
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 30px;
}

.item {
  padding: 20px;
  font-size: 30px;
  font-family: sans-serif;
  color: white;
}
.item--1 {
  background-color: orangered;
  grid-row: 2 / 3;
  grid-column: 2 / 3;
}
.item--2 {
  background-color: yellowgreen;
}
.item--3 {
  background-color: blueviolet;
}
.item--4 {
  background-color: palevioletred;
}
.item--5 {
  background-color: royalblue;
  grid-area: 1 / 3 / 2 / 4;
}
.item--6 {
  background-color: goldenrod;
  grid-row: 1 / 2;
  grid-column: 2 / 3;
}

</style>
  <section >
<!--
    ####################################################
    C A R O U S E L
    ####################################################
  -->
  <div id="carousel-2" class="carousel slide carousel-fade" style="margin-bottom: -20px;" data-ride="carousel" data-interval="6000">
    <ol class="carousel-indicators">
      <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
      
      <li data-target="#carousel-2" data-slide-to="2"></li>
      <li data-target="#carousel-2" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">

      <div class="carousel-item active">

       <img src="images/banner_1.png" alt="responsive image" class="" width="100%">

                   <!--  <div class="carousel-caption">
                        <div>
                            <h2>Sparsh Innovators</h2>
                            <p>We meticously build each site to get results</p>

                        </div>
                      </div> -->

                    </div>
                    <!-- /.carousel-item -->


                    
                    <!-- /.carousel-item -->
                    <div class="carousel-item">

                     <img src="images/banner_3.png" alt="responsive image" class="d-block img-fluid" width="100%">

<!--
                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2>Performance Optimization</h2>
                            <p>We monitor and optimize your site's long-term performance</p>

                        </div>
                      </div> -->
                    </div>
                    <div class="carousel-item">

                     <img src="images/banner_4.png" alt="responsive image" class="d-block img-fluid" width="100%">

<!--
                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2>Performance Optimization</h2>
                            <p>We monitor and optimize your site's long-term performance</p>

                        </div>
                      </div> -->
                    </div>
                    <!-- /.carousel-item -->
                  </div>
                  <!-- /.carousel-inner -->
                  <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                    <span class="" style="font-size: 200%; color: #333333; font-weight: bold;"  aria-hidden="true">
                      <i class="las la-angle-double-left"></i>
                    </span>
                    <span class="sr-only" >Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                    <span class="" style="font-size: 200%; color: #333333;  font-weight: bold;" aria-hidden="true">
                      <i class="las la-angle-double-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!-- /.carousel -->

                <!-- /.container -->

              </section>

              <section style=" background-color: #F3F3F3;">
                <style type="text/css">
                  .counters-heading{
                   text-align:center;
                   padding-top: 60px;
                   background: -webkit-linear-gradient(#333333, #333333);
                   -webkit-background-clip: text;
                   -webkit-text-fill-color: transparent;
                 }
               </style>
               <h2 class="counters-heading" >Sparsh - Your Trusted Partner for Technology</h2>
               <style type="text/css">

                .text-center {
                  text-align: center;
                }

                .color-white {
                  color: #fff;
                }

                .box-container {
                  align-items: center;
                  display: flex;
                  flex-direction: column;
                  justify-content: space-around;
                  padding: 3px 1px;
                  width: 100%;
                }

                @media screen and (min-width:1380px) {
                  .box-container {
                    flex-direction: row
                  }
                }

                .box-item {
                  position: relative;
                  -webkit-backface-visibility: hidden;
                  width: 100px;
                  margin-bottom: 10px;
                  max-width: 100%;
                }

                .flip-box {
                  -ms-transform-style: preserve-3d;
                  transform-style: preserve-3d;
                  -webkit-transform-style: preserve-3d;
                  perspective: 1000px;
                  -webkit-perspective: 1000px;
                }

                .flip-box-front,
                .flip-box-back {
                  background-size: cover;
                  background-position: center;
                  border-radius: 8px;
                  min-height: 100px;
                  -ms-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
                  transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
                  -webkit-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
                  -webkit-backface-visibility: hidden;
                  backface-visibility: hidden;
                }

                .flip-box-front {
                  -ms-transform: rotateY(0deg);
                  -webkit-transform: rotateY(0deg);
                  transform: rotateY(0deg);
                  -webkit-transform-style: preserve-3d;
                  -ms-transform-style: preserve-3d;
                  transform-style: preserve-3d;
                }

                .flip-box:hover .flip-box-front {
                  -ms-transform: rotateY(-180deg);
                  -webkit-transform: rotateY(-180deg);
                  transform: rotateY(-180deg);
                  -webkit-transform-style: preserve-3d;
                  -ms-transform-style: preserve-3d;
                  transform-style: preserve-3d;
                }

                .flip-box-back {
                  position: absolute;
                  top: 0;
                  left: 0;
                  width: 100%;

                  -ms-transform: rotateY(180deg);
                  -webkit-transform: rotateY(180deg);
                  transform: rotateY(180deg);
                  -webkit-transform-style: preserve-3d;
                  -ms-transform-style: preserve-3d;
                  transform-style: preserve-3d;
                }

                .flip-box:hover .flip-box-back {
                  -ms-transform: rotateY(0deg);
                  -webkit-transform: rotateY(0deg);
                  transform: rotateY(0deg);
                  -webkit-transform-style: preserve-3d;
                  -ms-transform-style: preserve-3d;
                  transform-style: preserve-3d;
                }

                .flip-box .inner {
                  position: absolute;
                  left: 0;
                  width: 100%;
                  padding: 5px;
                  outline: 1px solid transparent;
                  -webkit-perspective: inherit;
                  perspective: inherit;
                  z-index: 2;
                  transform: translateY(-50%) translateZ(60px) scale(.94);
                  -webkit-transform: translateY(-50%) translateZ(60px) scale(.94);
                  -ms-transform: translateY(-50%) translateZ(60px) scale(.94);
                  top: 50%;
                }


                .flip-box p {
                  font-size: 20px;
                  line-height: 1.5em;
                }

                .flip-box-img {
                  margin-top: 25px;
                }

              </style>
              <div class="container">
                <div class="row">
                  <div class="col-xl-2 col-md-4 col-xs-6">


                    <div class="box-container">
                      <div class="box-item">
                        <div class="flip-box">
                          <div class="flip-box-front text-center" style="background-image: url('images/img_1.jpg');">
                            <div class="inner color-white">
                              <h3 class="flip-box-header"><i class="fa fa-cubes"></i></h3>

                            </div>
                          </div>
                          <div class="flip-box-back text-center" style="background-image: url('images/card_flip.jpg');">
                            <div class="inner color-white">
                              <h3 class="flip-box-header"><i class="fa fa-cubes"></i></h3>


                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- here -->
                    <div id="box-one">
                      <p>Products</p>
                      <div class="counter-value" data-count="350">0 </div>
                    </div>

                  </div>
                  <div class="col-xl-2 col-md-4 col-xs-6">
                    <div class="box-container">
                      <div class="box-item">
                        <div class="flip-box">
                          <div class="flip-box-front text-center" style="background-image: url('images/img_1.jpg');">
                            <div class="inner color-white">
                              <h3 class="flip-box-header"><i class="fa fa-handshake-o"></i></h3>

                            </div>
                          </div>
                          <div class="flip-box-back text-center" style="background-image: url('images/card_flip.jpg');">
                            <div class="inner color-white">
                              <h3 class="flip-box-header"><i class="fa fa-handshake-o"></i></h3>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="box-one">
                      <p>Partnerships</p>

                      <div id="counter-partnerships">
                        <div class="counter-value-partnerships" data-count-partnerships="12">0</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-2 col-md-4 col-xs-6">
                    <div class="box-container">
                      <div class="box-item">
                        <div class="flip-box">
                          <div class="flip-box-front text-center" style="background-image: url('images/img_1.jpg');">
                            <div class="inner color-white">
                              <h3 class="flip-box-header"><i class="fa fa-ticket"></i></h3>

                            </div>
                          </div>
                          <div class="flip-box-back text-center" style="background-image: url('images/card_flip.jpg');">
                            <div class="inner color-white">
                              <h3 class="flip-box-header"><i class="fa fa-ticket"></i></h3>


                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="box-one">
                      <p>Support Tickets</p>
                      <div class="fake-div">
                      </div>

                      <div id="counter">
                        <div class="counter-value" data-count="30000">0</div>
                      </div>

                    </div>
                  </div>
                  <div class="col-xl-2 col-md-4 col-xs-6">
                    <div class="box-container">
                      <div class="box-item">
                        <div class="flip-box">
                          <div class="flip-box-front text-center" style="background-image: url('images/img_1.jpg');">
                            <div class="inner color-white">
                              <h3 class="flip-box-header"><i class="fa fa-comments-o"></i></h3>

                            </div>
                          </div>
                          <div class="flip-box-back text-center" style="background-image: url('images/card_flip.jpg');">
                            <div class="inner color-white">
                              <h3 class="flip-box-header"><i class="fa fa-comments-o"></i></h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="box-one">
                      <p>Feedback</p>
                      <div class="counter-value" data-count="10000">0</div>
                    </div>

                  </div>
                  <div class="col-xl-2 col-md-4 col-xs-6">

                    <div class="box-container">
                      <div class="box-item">
                        <div class="flip-box">
                          <div class="flip-box-front text-center" style="background-image: url('images/img_1.jpg');">
                            <div class="inner color-white">
                              <h3 class="flip-box-header"><i class="fa fa-group"></i></h3>

                            </div>
                          </div>
                          <div class="flip-box-back text-center" style="background-image: url('images/card_flip.jpg');">
                            <div class="inner color-white">
                              <h3 class="flip-box-header"><i class="fa fa-group"></i></h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="box-one">
                      <p>Team Size</p>
                      <div class="counter-value" data-count="49">0</div>
                      <span class="total"></span>
                    </div>

                  </div>
                  <div class="col-xl-2 col-md-4 col-xs-6">

                    <div class="box-container">
                      <div class="box-item">
                        <div class="flip-box">
                          <div class="flip-box-front text-center" style="background-image: url('images/img_1.jpg');">
                            <div class="inner color-white">
                              <h3 class="flip-box-header"><i class="fa fa-smile-o"></i></h3>

                            </div>
                          </div>
                          <div class="flip-box-back text-center" style="background-image: url('images/card_flip.jpg');">
                            <div class="inner color-white">
                              <h3 class="flip-box-header"><i class="fa fa-smile-o"></i></h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="box-one">
                      <p>Customers</p>
                      <div class="counter-value" data-count="5000">0</div>
                    </div>

                  </div>
                </div>
              </div>

            </section>

            <!-- Values Starts-->
            <section style="background-color: #98CFCE">

              <!--Text-->
              <h2 class="text-center mt-0 " style="color: #343434; padding-top: 45px;">The Sparsh Advantage</h2>

              <!--Container-->

              <div class="container mt-5">

                <!--First Row-->

                <div class="row lines">
                  <div class="col text-center hvr-pulse">
                    <a href="#" class="nav-link">
                      <img src="images/quality.png" width="70" height="70" alt="">
                      <br>
                      <p class="adv-text text-dark">Quality</p>
                    </a>
                  </div>
                  <div class="col text-center hvr-pulse">
                    <a href="#" class="nav-link">
                      <img src="images/price.png" width="70" height="70" alt="">
                      <p class="adv-text text-dark">Industry Best Prices
                      & Offers</p>
                    </a>
                  </div>
                  <div class="col text-center hvr-pulse">
                    <a href="#" class="nav-link">
                      <img src="images/support.png" width="70" height="70" alt="">
                      <p class="adv-text text-dark">Multi-Channel
                      24/7 Support</p>
                    </a>
                  </div>
                  <div class="col  text-center hvr-pulse ">
                    <a href="#" class="nav-link">
                      <img src="images/setup.png" width="70" height="70" alt="">
                      <p class="adv-text text-dark">Easy Setup &
                      Integration</p>
                    </a>
                  </div>
                  <div class="col text-center hvr-pulse">

                    <a href="#" class="nav-link">
                      <img src="images/customer-satisfaction.png" width="70" height="70" alt="">
                      <p class="adv-text text-dark">Customer Satisfaction</p>
                    </a>

                  </div>
                </div>


  </div>
  <!--/Second Row End-->

  <style type="text/css">

    /*Row Section*/

    .adv-text{
      font-weight: bold;
      margin-top: 20px;
      font-size: 16px;
    }
    .lines
    {
     border-radius:60px;
     transition:.5s;
     background-size: cover;
   }

   .category
   {
    color: #333333;
  }
  .row
  {
    margin-bottom:20px;
    padding:2rem;
  }
</style>
</section>
<!-- Values Ends-->


<section style="background-color: #ffffff;" class="pt-3 pb-5">
  <div class="container">

    <div class="container">

      <h2 class="our-partners">Our Partnerships</h2>
      <section class="customer-logos slider">
        <div class="slide"><img src="images/partnerships_tally.jpg"></div>
        <div class="slide"><img src="images/partnerships_cleartax.jpg"></div>
        <div class="slide"><img src="images/partnerships_microsoft.jpg"></div>
        <div class="slide"><img src="images/partnerships_google.jpg"></div>
        <div class="slide"><img src="images/partnerships_aws.jpg"></div>
        <div class="slide"><img src="images/partnerships_quickheal.jpg"></div>
        <div class="slide"><img src="images/partnerships_autodesk.jpg"></div>
        <div class="slide"><img src="images/partnerships_adobe.jpg"></div>
        <div class="slide"><img src="images/partnerships_honeywell.jpg"></div>
        <div class="slide"><img src="images/partnerships_matrix.jpg"></div>
        <div class="slide"><img src="images/partnerships_hikvision.jpg"></div>
        <div class="slide"><img src="images/partnerships_emudhra.jpg"></div>
      </section>
    </div>
  </div>

</section>



<section style="background-color: #F3F3F3;">
 <style type="text/css">
   .testimonial-text{
    font-size: 50%;
    color:#333333;
    text-align: justify;
  }

  .testimonial-arrows{
    text-align: center;
  }

  .testimonial-quote-icon{
    width: 1vw;
    height: 1vh;
    color: #075593;
  }
</style>

<div class="container" id="testimonials-row">
  <div class="row">
    <div class="col-md-12 column">
      <h2 class="our-partners" style="color: #333333;">Testimonials</h2>
      <div class="carousel slide" id="testimonials-rotate">
        <ol class="carousel-indicators" >
          <li class="active" data-slide-to="0" data-target="#testimonials-rotate" style="background-color: #075593;">
          </li>
          <li data-slide-to="1" data-target="#testimonials-rotate" style="background-color: #075593;">
          </li>
<!-- <li data-slide-to="2" data-target="#testimonials-rotate">
</li> -->
</ol>
<div class="carousel-inner">
  <div class="item active">
    <div class="col-md-3 col-lg-3"><img alt="" src="images/ic_pawan_sonthalia.jpeg" class="img-circle img-fluid" width="200" />
      <p style="font-size: 40%; text-align: center; color: #333333; margin-top: 20px; margin-bottom: 71px;" class="lead">Mr Pawan Sonthalia, Partner at <br> Shiv Shakti Corporation, Jamshedpur</p></div>

      <div class="testimonials col-md-9">

        <sup><i class="fa fa-quote-left testimonial-quote-icon"></i></sup>
        <p class="testimonial-text">
          Since 2005, Sparsh has been our preferred service provider for Tally, for an all-encompassing solution to ease our day to day business processes. Our company makes full use of Tally and its variety of features to cater to almost all of our departments, from administration, to finance and accounting.
        </p>
        <sup><i class="fa fa-quote-right testimonial-quote-icon"  style="position: relative; left:100%;"></i></sup> &nbsp;
      </div>
      <br><br><br>
      <div class="clearfix"></div>
    </div>

    <!-- Second -->
    <div class="item">
      <div class="col-md-3 col-lg-3"><img alt="" src="images/ic_testimonials_two.png" class="img-circle img-fluid" width="200" />
        <p style="font-size: 50%; text-align: center; color: #333333; margin-top: 20px;" class="lead">Vijay Chandra Jha, <br> Owner, Om Agency, Jamshedpur <br>President, Jamshedpur Motor Dealers' Association</p></div>

        <div class="testimonials col-md-9">
         <sup><i class="fa fa-quote-left testimonial-quote-icon"></i></sup>
         <p class="testimonial-text">

          In our years working with Tally since 2006, through Sparsh we have never once faced issues that weren’t solved faultlessly to ensure smooth sailing ahead. We are very satisfied with Sparsh’s untiring customer service and support. Sparsh has displayed utmost professionalism in delivering a seamless yet disciplined way of providing support. Their implementation and support is commendable as they have been the backbone of our business during the implimentation of VAT as well as GST. They are a highly recommended business partner and the approachability of the executive management and the expertise of the support team and development team makes them stand apart from others.
        </p>
        <sup><i class="fa fa-quote-right testimonial-quote-icon" style="position: relative; left:100%;"></i></sup> &nbsp;
      </div>
   
      <div class="clearfix"></div>
    </div>
  </div>

</div>
<!-- test -->

   <!-- test end -->

<script type="text/javascript">
  



  $(document).ready(function(){
    $('.customer-logos').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 520,
        settings: {
          slidesToShow: 3
        }
      }]
    });
  });


  /*Counter with scroll*/
  var a = 0;
  $(window).scroll(function() {

    var oTop = $('#counter').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
      $('.counter-value').each(function() {
        var $this = $(this),
        countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
          countNum: countTo
        },

        {
          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum+" +");
            //alert('finished');
          }

        });
      });
      a = 1;
    }

  });

  /*Counter with scroll*/
  var b = 0;
  $(window).scroll(function() {

    var oTop = $('#counter-partnerships').offset().top - window.innerHeight;
    if (b == 0 && $(window).scrollTop() > oTop) {
      $('.counter-value-partnerships').each(function() {
        var $this = $(this),
        countTo = $this.attr('data-count-partnerships');
        $({
          countNum: $this.text()
        }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }
        });
      });
      b = 1;
    }
  });
</script>

