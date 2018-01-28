$(function()
{
	var $features = $( ".featured-news" );

	for( var i = 0, len = $features.length; i < len; i++ )
	{
		var $feature = $features.eq( i ),
			$cover   = $feature.find( ".cover-img" ),

			$img     = $feature.find( "img:eq(0)" ),
			$text    = $feature.find( ".txt-featured:eq(0)" );

		$cover.css(
		{
			backgroundImage : "url(" + $img.attr( "src" ) + ")"
		});

		$img.hide();

		$feature.css(
		{
			height   : $text.outerHeight( true )
		});

		$text.css( "position", "absolute" );
	}
});