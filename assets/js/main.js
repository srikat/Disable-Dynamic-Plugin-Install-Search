jQuery(function( $ ){

	var e = $._data( $('.wp-filter-search')[0], 'events' );
	delete( e.keyup );
	e.input2 = e.input;
	delete( e.input );
	$('.wp-filter-search').keypress(function(e) {
		if ( 13 === e.which ) {
			$(this).trigger( 'input2' );
		}
	});

});
