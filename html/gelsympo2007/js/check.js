function check_browser_6_or_later() {
	var ret = 0;
	if ( document.getElementById ) { 
		ret = 1;
	}
	if( navigator.userAgent.indexOf("MSIE 4") != -1 
		||
		navigator.userAgent.indexOf("MSIE4") != -1 
	) {
		ret = 0;
	}
	if( navigator.userAgent.indexOf("MSIE 5") != -1 
		||
		navigator.userAgent.indexOf("MSIE5") != -1 
	){
		ret = 0;
	}
	if ( document.layers ) {
		ret = 0;
	}
	return ret;
}