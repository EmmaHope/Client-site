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
            <a href='about.php' class='button'><em>About</em></a>
            <a href='collage.php' class='button'><em>Collage</em></a>
            <a href='contact.php' class='button'><em>Contact</em></a>
            <a href='pricing.php' class='button'><em>Pricing</em></a>
        </div>
        <h1>Blessed Beginnings Birth Photography</h1>
        <div class='row1'>
        <p style='padding:15px;'>Hi, my name is Lynette Pearson! I am a baby photographer and a doula(A birth companion). On my website you will be able to set up an appointment and see my work. Hope you enjoy!</p>
        </div>
        <div class='slider' id='main-slider'>
	<div class='slider-wrapper'>
		<img src='PICS/baby1.jpg' alt='First' class='slide' />
		<img src='PICS/baby2.jpg' alt='Second' class='slide' />
		<img src='PICS/fam1.jpg' alt='Third' class='slide' />
        <img src='PICS/fam2.jpg' alt='fourth' class='slide' />
        <img src='PICS/peg1.jpg' alt='fifth' class='slide' />
        <img src='PICS/fam4.jpg' alt='Second' class='slide' />
		<img src='PICS/fam5.jpg' alt='Third' class='slide' />
        <img src='PICS/fam6.jpg' alt='fourth' class='slide' />
        <img src='PICS/fam7.jpg' alt='fifth' class='slide' />
	</div>
</div>	 
        
<script>
(function() {
	
	function Slideshow( element ) {
		this.el = document.querySelector( element );
		this.init();
	}
	
	Slideshow.prototype = {
		init: function() {
			this.wrapper = this.el.querySelector( '.slider-wrapper' );
			this.slides = this.el.querySelectorAll( '.slide' );
			this.previous = this.el.querySelector( '.slider-previous' );
			this.next = this.el.querySelector( '.slider-next' );
			this.index = 0;
			this.total = this.slides.length;
			this.timer = null;
			
			this.action();
			this.stopStart();	
		},
		_slideTo: function( slide ) {
			var currentSlide = this.slides[slide];
			currentSlide.style.opacity = 1;
			
			for( var i = 0; i < this.slides.length; i++ ) {
				var slide = this.slides[i];
				if( slide !== currentSlide ) {
					slide.style.opacity = 0;
				}
			}
		},
		action: function() {
			var self = this;
			self.timer = setInterval(function() {
				self.index++;
				if( self.index == self.slides.length ) {
					self.index = 0;
				}
				self._slideTo( self.index );
				
			}, 3000);
		},
		stopStart: function() {
			var self = this;
			self.el.addEventListener( 'mouseover', function() {
				clearInterval( self.timer );
				self.timer = null;
				
			}, false);
			self.el.addEventListener( 'mouseout', function() {
				self.action();
				
			}, false);
		}
		
		
	};
	
	document.addEventListener( 'DOMContentLoaded', function() {
		
		var slider = new Slideshow( '#main-slider' );
		
	});
	
	
})();

</script>
    </body>
</html>";
echo "$a";

    ?>