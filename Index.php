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
            <a href='Index5.php' class='button'><em>Pricing</em></a>
        </div>
        <h1>Home</h1>
        <div class='row1'>
        <p style='padding:15px;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique. Dui ut ornare lectus sit. Libero id faucibus nisl tincidunt eget nullam non. Interdum varius sit amet mattis vulputate enim nulla. Eu ultrices vitae auctor eu augue ut lectus. Tellus orci ac auctor augue mauris. Tortor condimentum lacinia quis vel eros donec ac odio tempor. Arcu risus quis varius quam. Egestas pretium aenean pharetra magna. Gravida cum sociis natoque penatibus et magnis dis parturient. Sed vulputate odio ut enim blandit volutpat maecenas volutpat.</p>
        </div>
        <div class='slider' id='main-slider'>
	<div class='slider-wrapper'>
		<img src='PICS/a.jpg' alt='First' class='slide' />
		<img src='PICS/b.jpg' alt='Second' class='slide' />
		<img src='PICS/c.jpg' alt='Third' class='slide' />
        <img src='PICS/d.jpg' alt='fourth' class='slide' />
        <img src='PICS/e.jpg' alt='fifth' class='slide' />
        <img src='PICS/f.jpg' alt='fifth' class='slide' />
        <img src='PICS/g.jpg' alt='fifth' class='slide' />
        <img src='PICS/h.jpg' alt='fifth' class='slide' />
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