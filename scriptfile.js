function resize() {
	jQuery( '#content > a > img' ).css( "max-width", "100%" );
	jQuery( '#content > a > img' ).css( "height", "auto" );
	jQuery( '#content > a > img' ).css( "width", "auto" );
}

function cover_scroll() {
	jQuery('.excerpt').hide();
	jQuery('.featured-article').hover(function() {
		jQuery(this).find(".excerpt").show('fast');
	});
	jQuery('.featured-article').mouseleave(function() {
		jQuery(this).find(".excerpt").hide('fast');
	});
}