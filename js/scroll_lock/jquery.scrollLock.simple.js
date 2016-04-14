$j.scrollLock = ( function scrollLockSimple(){
	var locked   = false;
	var $body;
	var previous;

	function lock(){
	  if( !$body ){
	    $jbody = $j( 'body' );
	  }

	  previous = $jbody.css( 'overflow' );

	  $jbody.css( 'overflow', 'hidden' );

	  locked = true;
	}

	function unlock(){
	  $jbody.css( 'overflow', previous );

	  locked = false;
	}

	return function scrollLock( on ) {
		// If an argument is passed, lock or unlock depending on truthiness
		if( arguments.length ) {
			if( on ) {
				lock();
			}
			else {
				unlock();
			}
		}
		// Otherwise, toggle
		else {
			if( locked ){
				unlock();
			}
			else {
				lock();
			}
		}
	};
}() );