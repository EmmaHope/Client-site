<?php 
$a = "<html>
    <head>
        <title>Client Site</title>
        <meta charset='utf-8' lang='en'>
        <link href='Index.css' rel='stylesheet'> 
    </head>
    <body>
        <div class='nav'>
            <a href='Index.php' class='button'><em>Home</em></a>
            <a href='Index2.php' class='button'><em>About</em></a>
            <a href='Index3.php' class='button'><em>Collage</em></a>
            <a href='Index4.php' class='button'><em>Contact</em></a>
        </div>
        <h1>Baby Photos</h1>
         <div class='row1' style='text-align:center;'>
        <img src='PICS/a.jpg' alt='1' style='width:100%' height='1000'>
        </div>
        <div class='row2' style='text-align:center;'>
        <img src='PICS/b.jpg' alt='1' style='width:100%' height='1000'>
         </div>
         <div class='row3' style='text-align:center;'>
        <img src='PICS/c.jpg' alt='1' style='width:100%' height='1000'>
         </div>
         <div class='row4' style='text-align:center;'>
        <img src='PICS/d.jpg' alt='1' style='width:100%' height='1000'>
         </div>
         <div class='row5' style='text-align:center;'>
        <img src='PICS/e.jpg' alt='1' style='width:100%' height='1000'>
        </div>
        <div class='row6' style='text-align:center;'>
        <img src='PICS/f.jpg' alt='1' style='width:100%' height='1000'>
        </div>
        <div class='row7' style='text-align:center;'>
        <img src='PICS/g.jpg' alt='1' style='width:100%' height='1000'>
        </div>
        <div class='row8' style='text-align:center;'>
        <img src='PICS/h.jpg' alt='1' style='width:100%' height='1000'>
        </div>
        
        <div class='slideshow-container'>

<div class='mySlides fade' style='text-align:center'>
  <div class='numbertext'>1 / 3</div>
  <img src='PICS/babypic7.jpg' style='width:50%' height='400'>
  <div class='text'></div>
</div>

<div class='mySlides fade' style='text-align:center'>
  <div class='numbertext'>2 / 3</div>
  <img src='PICS/babypic8.jpg' style='width:50%' height='400'>
  <div class='text'></div>
</div>

<div class='mySlides fade' style='text-align:center'>
  <div class='numbertext'>3 / 3</div>
  <img src='PICS/babypic9.jpg' style='width:50%' height='400'>
  <div class='text'></div>
</div>

<a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
<a class='next' onclick='plusSlides(1)'>&#10095;</a>

</div>
<div style='text-align:center'>
  <span class='dot' onclick='currentSlide(1)'></span> 
  <span class='dot' onclick='currentSlide(2)'></span> 
  <span class='dot' onclick='currentSlide(3)'></span> 
</div>
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
  var slides = document.getElementsByClassName('mySlides');
  var dots = document.getElementsByClassName('dot');
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = 'none';  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(' active', '');
  }
  slides[slideIndex-1].style.display = 'block';  
  dots[slideIndex-1].className += ' active';
}
</script>
    </body>
</html>";

echo "$a";

    ?>