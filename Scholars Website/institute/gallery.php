<!DOCTYPE html>  
    <html>  
    <head>  
        <meta charset="utf-8" />  
        <title>My Slider</title>  
        <style type="text/css">  
            * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
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
        </style>  
    </head>  
    <body>  
        <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  
 
  <div class="mySlides fade">
  
    <div class="numbertext">1 / 8</div>
    <img src="picture/group.jpg" style="width:100%">
    <div class="text"><b>Group Photo Of Bridge course</b></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 8</div>
    <img src="picture/exam.jpg" style="width:100%">
    <div class="text"><b>exam</b></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 8</div>
    <img src="picture/staff.jpg" style="width:100%">
    <div class="text"><b>Scholars staff</b></div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">4 / 8</div>
    <img src="picture/picnicc.jpg" style="width:100%">
    <div class="text"><b>Narpani Picnic</b></div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">5 / 8</div>
    <img src="picture/picnic.jpg" style="width:100%">
    <div class="text"><b>Picnic</b></div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">6 / 8</div>
    <img src="picture/visit.jpg" style="width:100%">
    <div class="text">School visit</div>
  </div>
   <div class="mySlides fade">
    <div class="numbertext">7 / 8</div>
    <img src="picture/birthday.jpg" style="width:100%">
    <div class="text">Birthday Celebration</div>
  </div>


  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
 
  <div class="mySlides fade">
    <div class="numbertext">8 / 8</div>
    <img src="picture/motivation.jpg" style="width:100%">
    <div class="text"><b>MotivationClass </b></div>
  </div>
  
<br>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>

</div>
        <script type="text/javascript">  
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