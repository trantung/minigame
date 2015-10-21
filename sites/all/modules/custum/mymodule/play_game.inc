<?php
function content_play_game(){
$id=arg(1);
global $base_url;
$url = "/sites/default/files/gameonline/game3/game3/main.html";
$test = $base_url.$url;

$out='<div align="center">
		 <object width="640" height="480">
		  <embed src= "'.$test.'" quality="high" width="640" height="400">
		  </embed>
		 </object>
		 <br/>
		 </div>';
 return $out;
}
?>