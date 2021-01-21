<html>
<head>
  <?php
  include 'header.php';
  ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides">
  <div class="numbertext">1 / 3</div>
  <div class="col-12 col-sm-12 col-lg-3">
                        <div class="services__item" style="border: 1px solid yellow;">
                            <div data-role="hover-overlay">Basic Website</div>
                            <h3 class="services__title">Single Page Web </h3> 
                            <br>
                            <div class="services__text" >
                                <div class="row pkg-detail col-md-12">
                                    <div class="col-md-10 col-sm-10 detail">Web Pages </div> 
                                    <div class="col-md-2  col-sm-2 detail3">1</div>
                                </div>

                                <div class="row pkg-detail col-md-12">
                                    <div class="col-md-10 detail">Design Mockups </div> 
                                    <div class="col-md-2 detail3">2</div>
                                </div>

                                <div class="row pkg-detail col-md-12">
                                    <div class="col-md-10 detail">Contact Form </div> 
                                    <div class="col-md-2 detail3">Yes</div>
                                </div>

                                <div class="row pkg-detail col-md-12">
                                    <div class="col-md-8 detail"> Google Map  </div> 
                                    <div class="col-md-3 detail3"> Yes </div>
                                </div>

                                <div class="row pkg-detail col-md-12">
                                    <div class="col-md-6 detail"> Emails  </div> 
                                    <div class="col-md-4 detail3"> Multiple </div>
                                </div>

<!--                                 <br><br> -->
                                <!-- <div class="row">
                                        <h2 class="btn btn--blue" onclick="changePrices()" ><span id="prices_button">Prices in £</span></h2>
                                </div> -->
                                <div class="row $prices col-md-12">&#160;&#160;&#160;&#160;&#160;&#160;&#160;$<strong>&#160;100&#160;+ Tax</strong></div>
                                <div class="row £prices col-md-12" style="display: none;">&#160;&#160;&#160;&#160;&#160;&#160;&#160;£<strong>&#160;80&#160;+ Tax</strong></div>
                            </div>
                        </div>
                    </div>
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <div class="col-12 col-sm-3 col-lg-3 d-flex" data-animation="fade-in-up">
                        <div class="services__item" data-role="ultra-hover" style="border: 1px solid green;">
                            <div data-role="hover-overlay">Standered Website</div>
                            <h3 class="services__title">Standared Web.. </h3> 
                            <br>
                            <div class="services__text" >
                                <div class="row pkg-detail col-md-12 col-sm"><div class="col-md-9 col-sm detail"> Web Pages  </div> <div class="col-md-3 col-sm detail3"> 3-5 </div></div>
                                <div class="row pkg-detail col-md-12 col-sm"><div class="col-md-8 col-sm detail"> Emails  </div> <div class="col-md-4 detail3 col-sm"> 2000 </div></div>
                                <div class="row pkg-detail col-md-12 col-sm"><div class="col-md-8 col-sm detail"> Databases  </div> <div class="col-md-4 detail3 col-sm"> 1 </div></div>
                                <div class="row pkg-detail col-md-12 col-sm"><div class="col-md-8 col-sm detail"> SSL / SEO </div> <div class="col-md-4 detail3 col-sm"> Yes </div></div>
                                <br><br><br>
                                <br><br><!-- 
                                <br><br>
                                <br><br>
                                <br><br> -->
                               <!--  <div class="row">
                                        <h2 class="btn btn--blue" onclick="changePrices()" ><span id="prices_button">Prices in £</span></h2>
                                </div> -->
                                <div class="row $prices col-md-12">&#160;&#160;&#160;&#160;&#160;&#160;&#160;$<strong>&#160;165&#160;</strong>  <em> +&#160;Tax</em></div>
                                <div class="row £prices col-md-12" style="display: none">&#160;&#160;&#160;&#160;&#160;&#160;&#160;£<strong>&#160;136&#160;</strong>  <em> +&#160;Tax</em></div>
                            </div>
                        </div>
                    </div>
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <div class="col-12 col-sm-3 col-lg-3 d-flex" data-animation="fade-in-up">
                        <div class="services__item" data-role="ultra-hover" style="border: 1px solid orange;">
                            <div data-role="hover-overlay">Professional Website</div>
                            <h3 class="services__title">Professional    </h3>
                            <br>

                            <div class="services__text" style="text-align: center;">
                                <div class="row pkg-detail col-md-12"><div class="col-md-7 detail2">Web Pages</div><div class="col-md-5">5-10</div></div>
                                <div class="row pkg-detail col-md-12"><div class="col-md-6 detail2"> Emails </div><div class="col-md-6">  Unlimited  </div></div>
                                <div class="row pkg-detail col-md-12" pull-left><div class="col-md-6 detail2"> Databases </div><div class="col-md-6">  Multiple </div></div> 
                                <!-- <div class="row pkg-detail col-md-12" pull-left><div class="col-md-8 detail2"> Backup </div><div class="col-md-2">  Yes </div></div>  -->
                                <div class="row pkg-detail col-md-12"><div class="col-md-8 detail2"> SEO / SSL </div><div class="col-md-2">  Yes </div></div>
                                <div class="row pkg-detail col-md-12"><div class="col-md-9 detail2 pull-left"> Domains </div><div class="col-md-1">  2  </div></div> 
                                <div class="row pkg-detail col-md-12" pull-left><div class="col-md-8 detail">Responsive </div><div class="col-md-4 ">  Yes </div></div> 
                                <div class="row pkg-detail col-md-12" pull-left><div class="col-md-10 detail"> Admin Panel </div><div class="col-md-2 detail3">  Yes </div></div> 
                                <br>
                                <!-- <br><br> -->
                                <!-- <div class="row">
                                        <h2 class="btn btn--blue" onclick="changePrices()" ><span id="prices_button">Prices in £</span></h2>
                                </div> -->
                                <div class="row $prices col-md-12">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;$<strong>640.00 + Tax</strong> </div>
                                <div class="row £prices col-md-12" style="display: none">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;£<strong>522.00 + Tax</strong> </div>
                            </div>
                            
                        </div>
                    </div>
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
