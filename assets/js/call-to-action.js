/* Center the call to action div on top of the banner image */
var call_div = $('#call');
var call_width = $('#call').outerWidth();
var call_height = $('#call').outerHeight();
call_height = -1*(call_height/2);
call_width = -1*(call_width/2);
call_div.css('marginTop', call_height);
call_div.css('marginLeft', call_width);
call_div.fadeIn('slow');

