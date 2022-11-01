//var STbullet = ['#d','#c','#l','#r','#t','#bt','#lt','#rt'];
//var SBbullet = ['⏺','○','⇦','⇨','△','▲','⏴','⏵'];
jQuery('.todoinnertext').each(function(){
        var rawtext=jQuery(this).text();
	for(var i = 0; i < STbullet.length; i+=1) {
       if (jQuery(this).text().match(STbullet[i])){
          newtext= rawtext.replace(STbullet[i], SBbullet[i]);
	      jQuery(this).text(newtext);
          break;
       }
    }
 });


