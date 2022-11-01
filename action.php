<?php
/**
 * DokuWiki Plugin bulletodo (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  dodotori <dodotori@localhost>
  
   
 */

class action_plugin_bulletodo extends \dokuwiki\Extension\ActionPlugin
{
function register(Doku_Event_Handler $controller) {
             $controller->register_hook('TPL_ACT_RENDER', 'AFTER', $this, 'bulletshow');
 		}
 function bulletshow($event, $param) {
   echo"var STbullet = [\'#d\',\'#c\',\'#l\',\'#r\',\'#t\',\'#bt\',\'#lt\',\'#rt\'];
var SBbullet = [\'⏺\',\'○\',\'⇦\',\'⇨\',\'△\',\'▲\',\'⏴\',\'⏵\'];
jQuery(\'.todoinnertext\').each(function(){
        var rawtext=jQuery(this).text();
		       console.log(rawtext);
	for(var i = 0; i \< STbullet.length; i+=1) {
       if (jQuery(this).text().match(STbullet[i])){
          var newtext= rawtext.replace(STbullet[i], SBbullet[i]);
	      jQuery(this).text(newtext);
	       console.log(newtext);
          break;
       }
    }
 });


";
   
 }
  
}
