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
        <h1><u>About Me:</u></h1>
        <div class='row1a'>
        <p style='padding:15px;'>Hello, my name is Lynette Pearson. I am a birth photographer serving the central California area.  I have raised 3 boys as a single mother and now live alone with my 4 dogs and 2 cats in Clovis ca.  I enjoy working in my church nursery, board games and love animals. Since I received my first camera at age 12 I have always enjoyed taking pictures. It was not until I photographed my first birth that discovered my true passion. Documenting the power of a woman and the miracle of childbirth. I started my birth journey by empowering women through child birth as a doula. I have since embraced my joy through capturing the artistic and raw miracle of child birth through birth stories. 

        -Glow from faces when mommy sets eyes on her baby

        -Daddy sees the true strength power in his beautiful partner

        -Birth stories portray the Incredible stories of strength, fear, pain and joy no matter what type of birth
        <br>
          <u>Training:</u><br>
        I’ve been professionally trained to know the process of birth and what mom thinks she can expect. it’s unexpected changes and craziness, raw feelings and emotions are some things that are often forgotten after baby comes earthside. No birth will ever plan out the same.   
As a BP I capture the sacred moments of your birth story by portraying the strength and power of a woman no matter how or where she chooses to her birth journey. Powerful moments, the intimate moments and the strength of a woman and intimate between mommy in the miraculous birth of their baby,deep commitment to my<br>
        <div class='slider2' id='main-slider'>
	<div class='slider-wrapper2'>
		<img src='PICS/preg1.jpg' alt='First' class='slide2' />
		<img src='PICS/preg2.jpg' alt='Second' class='slide2' />
		<img src='PICS/preg3.jpg' alt='Third' class='slide2' />
        <img src='PICS/fam3.jpg' alt='fourth' class='slide2' />
	</div>
</div> 
 clients and their sacred journey through childbirth. I capture connection between partners and baby coming earth side with grace and passion, relive experience of joy strength and love, raw and beautiful artistry. BP can be a healing experience as mom looks back on the forgotten moments of her birth and realizes the strength and power she really had over her body no matter what the outcome,  and often portrays the power a woman really has in the birth of her baby. My favorite moment is the unspoken language between mommy and daddy when he realizes the power she really has, the look in his eyes and his compassion cannot be captured if he is taking the pictures or family caught up in the moments of hustle and bustle.As a doula(birth companion) my passion is to empower women to read their body, know their body, and embrace it through education and encouragement. I recognized After giving birth women forget what their birth experience was. I desire to document their birth story taking a journalistic approach to telling her/your birth story through video and (photography) still photos. 
</p>
        </div>
        
<script>
(function() {
	
	function Slideshow( element ) {
		this.el = document.querySelector( element );
		this.init();
	}
	
	Slideshow.prototype = {
		init: function() {
			this.wrapper = this.el.querySelector( '.slider-wrapper2' );
			this.slides = this.el.querySelectorAll( '.slide2' );
			this.previous = this.el.querySelector( '.slider2-previous' );
			this.next = this.el.querySelector( '.slider2-next' );
			this.index = 0;
			this.total = this.slides.length;
			this.timer = null;
			
			this.action();
			this.stopStart();	
		},
		_slideTo: function( slide2 ) {
			var currentSlide = this.slides[slide2];
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