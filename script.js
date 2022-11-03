jQuery(document).ready(function(){
var STbullet = ['#d','#c','#l','#r','#t','#bt','#lt','#rt'];
var SBbullet = ['⚫','⚪','⇦','⇨','△','▲','◀','▶'];
var SCbullet = ['⚪','⚫','⇺','⇻','▲','△','⋪','⋫'];
jQuery('.todotext clickabletodo todohlght').each(function(){
	if (jQuery(this).has('del')){
	var	Wbullet = SCbullet;
	}else{
	var Wbullet = SBbullet;
	}

    var rawtext=jQuery(this).jQuery('.todoinnertext').text();
	console.log(rawtext);
	for(var i = 0; i < STbullet.length; i+=1) {
       if (jQuery(this).jQuery('.todoinnertext').text().match(STbullet[i])){
          var newtext= rawtext.replace(STbullet[i], Wbullet[i]);
	      jQuery(this).jQuery('.todoinnertext').text(newtext);
	       console.log(newtext);
          break;
       }
    }

});
});


