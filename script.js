jQuery(document).ready(function(){
var STbullet = ['#d','#c','#l','#r','#t','#bt','#lt','#rt'];
var SBbullet = ['⏺','○','⇦','⇨','△','▲','⏴','⏵'];
jQuery('.todoinnertext').each(function(){
        var rawtext=jQuery(this).text();
		       console.log(rawtext);
	for(var i = 0; i < STbullet.length; i+=1) {
       if (jQuery(this).text().match(STbullet[i])){
          var newtext= rawtext.replace(STbullet[i], SBbullet[i]);
	      jQuery(this).text(newtext);
	       console.log(newtext);
          break;
       }
    }
 });
});



