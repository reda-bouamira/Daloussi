function load(){
	var browserWidth = getWidth();

	dropDownMenuCheckBoxes();

	// setOverflowYScroll();


}

function loadOptions()
{
	
}

function dropDownMenuCheckBoxes(){
	$(function() {
		var options = [];

		$( '.dropdown-menu a' ).on( 'click', function( event ) {

		   var $target = $( event.currentTarget ),
		       val = $target.attr( 'data-value' ),
		       $inp = $target.find( 'input' ),
		       idx;

		   if ( ( idx = options.indexOf( val ) ) > -1 ) {
		      options.splice( idx, 1 );
		      setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
		   } else {
		      options.push( val );
		      setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
		   }

		   $( event.target ).blur();
		      
		   console.log( options );
		   return false;
		});
	});
}

// Gets the width of the browser.
function getWidth(){
	var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

	return width;
}


document.addEventListener("DOMContentLoaded", load, false);
window.addEventListener("resize", load);


//console.log(  ); use it to verify the values!!!!!