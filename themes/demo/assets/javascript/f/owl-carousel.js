function initOwlCarousel( $carousel, $gallery )
{
	var data  = $carousel.data();

	data.items    = typeof data.items === "undefined"? 1 : data.items;
	data.autoplay = typeof data.autoplay === "undefined"? false : data.autoplay;

	if( data.items > 1 )
	{
		if( data.sizes )
		{
			data.responsive = {};

			for( var i = 0, len = data.sizes.length; i < len; i++ )
			{
				var s = data.sizes[ i ];
				data.responsive[ s[ 0 ] ] = 
				{
					items : s[ 1 ]
				};
			}
		}
	}


	if( data.nav )
	{

		data.navText = 
		[ 
			'<span class="ico arrow left"></span>', 
			'<span class="ico arrow right"></span>' 
		];
	}

	if( data.pad ){
		data.stagePadding= 30;
		data.margin=31;
	}

	$carousel.owlCarousel( data );

	if( typeof $gallery !== "undefined" && $gallery.length > 0 )
	{
		$( ".owl-item" ).on( "click", function()
		{
			var $img  = $( "<img/>" ),	
				$this = $( this );

			$img.attr( "src", $this.find( "img" ).attr( "src" ));
			$img.css(
			{
				width  : '100%',
				height : 'auto'
			});

			$gallery.html( $img );

			/**
			 * G.C
			 */
			$img = null;
		});

		$( ".owl-item:eq(0)" ).click();
	}
}

$(function()
{
	var $carousels 			= $( ".owl-carousel" ),
		$carousel_gallery 	= $( ".owl-carousel-gallery" ),
		i, len;
	for( i = 0, len = $carousels.length; i < len; i++ )
	{
		var $carousel = $carousels.eq( i );

		if( $carousel_gallery.length > 0 )
		{
			initOwlCarousel( $carousel, $carousel_gallery );
		}
		else
		{
			initOwlCarousel( $carousel );	
		}
	}

	/**
	 * G.C
	 */
	i = len = $carousels = null;

    $('.owl-carousel').owlCarousel({
   		stagePadding: 50,
	    margin:50,
	})


});