/* This script is  written 
by YAKAMI Masahiro (yakami@kuhp.kyoto-u.ac.jp) on 2006/10/09.

modified
by  MRB (donto_koi@hotmail.com) on 2006/11/19.
*/

var g_browser_ok = check_browser_6_or_later();

var g_has_done_insertrule = 0;

function arrenge() {
	if( 0 == g_browser_ok ) {
		return;
	}
	var obj = window;
	if( window.opera ) {
		var w = obj.innerWidth;
		var h = obj.innerHeight;
	} else if( document.all ){
		var w = obj.document.body.clientWidth;
		var h = obj.document.body.clientHeight;
	} else if( document.getElementById ){
		var w = obj.innerWidth;
		var h = obj.innerHeight;
	}

	var header_style = document.getElementById("header").style;
	header_style.left = 0 + "px";
	header_style.top = 0 + "px";
	header_style.width = w + "px";
	header_style.height = 100 + "px";
	
	var lt_style = document.getElementById("lt").style;
	lt_style.left = 0 + "px";
	lt_style.top = 100 + "px";
	lt_style.width = 120 + "px";
	lt_style.height = ( h - 100 - 15 ) + "px";

//	コメントアウト、タイトルも固定にしようとした。
//	var main_title_style = document.getElementById("main_title").style;
//	main_title_style.left = 120 + "px";
//	main_title_style.top = 100 + "px";
//	main_title_style.width = ( w - 120 ) + "px";
//	main_title_style.height = 18 + "px";
//	ここまでコメントアウト

	var main_style = document.getElementById("main").style;
	main_style.left = 120 + "px";
	main_style.top = 100 + "px";
	main_style.width = ( w - 120 ) + "px";
	main_style.height = ( h - 100 - 15 ) + "px";
	
	var footer_style = document.getElementById("footer").style;
	footer_style.position = "absolute";
	footer_style.left = 0 + "px";
	footer_style.top = ( h - 15 ) + "px";
	footer_style.width = w + "px";
	footer_style.height = 15 + "px";
}

/*
g_browser_ok = check_browser_6_or_later();

if( g_browser_ok ) {
	document.write( "<link href=\"" + g_path + g_css_file + "\"" );
	document.write( " rel=\"stylesheet\" type=\"text/css\">" );
}
*/