<?php
// Musify, written by Corey Mwamba, Sep 2010. Licence: BY-NC-SA 3.0 - http://creativecommons.org/licenses/by-nc-sa/3.0/
// last change:13 Jul 2012 by Corey Mwamba: better tie symbols.
//

// For use in WordPress: remove the double slashes from the two lines below:

//$test = $atts['text'];
//echo musify($test);

// And then install the shortcode Exec PHP plugin from 
// http://wordpress.org/extend/plugins/shortcode-exec-php/
// in your WordPress installation, you will see a menu option called "Shortcode Exec"; 
// select it, paste the contents of this file into the code window and SAVE.

function musify($text) {
$sharp = '<abbr title="sharp">&#9839;</abbr>';
$dblsharp = '<abbr class="dblsharp" title="double sharp">&#10018;</abbr>';
$flat = '<abbr title="flat">&#9837;</abbr>';
$dim = '<sup class="musdim"><abbr title="diminished">&#176;</abbr></sup>';
$hdim = '<sup class="mushdim"><abbr title="half-diminished">&#248;</abbr></sup>';
$ext1 = '<sup>(';
$ext2 = ')</sup>';
$var1 = '<sup>';
$var2 = '</sup>';
$chain = '&#215;';
$plus = '&#43;';
$tss = '<span class="musnum">';
$tsm = '</span>&#8260;<span class="musden">';
$ivm = '</span><span class="timden">';
$tri = '&#916;';
$tse = '</span>';
$u1 = '<sub>';
$u2 = '</sub>';
$simile = '<abbr title="simile">&#247;</abbr>';
$tied = '<span class="musitie">&#9181;</span>';
$tieu = '<span class="musotie">&#9180;</span>';
$br = '<br />';
$ellip = '&#8230;';
$nat = '<abbr title="natural">&#9838;</abbr>';
$losq = '&#10092;';
$rosq = '&#10093;';
$text = html_entity_decode($text);
$text = htmlspecialchars_decode($text);
$text = str_replace('<|',$losq,$text);
$text = str_replace('|>',$rosq,$text);
$text = str_replace ('...', $ellip, $text);
$text = str_replace ( "£", $flat, $text);
$text = str_replace ( "$", $flat, $text);
$text = str_replace ( "€", $flat, $text);
$text = str_replace ( "¥", $flat, $text);
$text = str_replace ( "¤", $flat, $text);
$text = str_replace ( "%", $simile, $text);
$text = str_replace ( "#", $sharp, $text);
$text = str_replace($sharp.$sharp, $dblsharp, $text);
$text = str_replace ( "?", $nat, $text);
$text = str_replace ( "&".$sharp."247;", $simile, $text);
$text = str_replace ( "&".$sharp."8230;", $ellip, $text);
$text = str_replace ( "&".$sharp."9837;", $flat, $text);
$text = str_replace ( "&".$sharp."916;", "&#916;", $text);
$text = str_replace ( "&".$sharp."215;", $chain, $text);
$text = str_replace ("&".$sharp."10092;", $losq, $text);
$text = str_replace ("&".$sharp."10093;", $rosq, $text);
$text = str_replace ( "~", $hdim, $text);
$text = str_replace ( "&".$sharp."176;", "&176;", $text);
$text = str_replace ( "_", $dim, $text);
$text = str_replace ( "*", $chain, $text);
$text = str_replace ( "+", $plus, $text);
$text = str_replace("((", $ext1, $text);
$text = str_replace("))", $ext2, $text);
$text = str_replace("[[", $var1, $text);
$text = str_replace("]]", $var2, $text);
$text = str_replace("[-", $u1, $text);
$text = str_replace("-]", $u2, $text);
$text = str_replace("{{", $tss, $text);
$text = str_replace("//", $tsm, $text);
$text = str_replace("@", $ivm, $text);
$text = str_replace("}}", $tse, $text);
$text = str_replace("==", $tieu, $text);
$text = str_replace("--", $tied, $text);
$text = str_replace("^", $tri, $text);
$text = str_replace ("!!", $br, $text);
$text = str_replace ('<abbr title="flat"><abbr title="flat">&#9837;</abbr></abbr>', $flat, $text);
return $text;
}

function musify_tag($str) {
//so: change "[mus]musify markup[/mus]" to musical notation. 
$pat = "/\[mus\](.*?)\[\/mus\]/";
$n = preg_match_all($pat,$str,$m);
preg_match_all($pat,$str,$m);
for ($i = 0;$i < $n;$i++) {
 $mus[] = musify($m[1][$i]);

}
foreach ($m as $subj) {

$str = str_replace($subj,$mus,$str);
}
return $str;
}

?>