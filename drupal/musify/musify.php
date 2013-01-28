<?php
// Musify, written by Corey Mwamba, Sep 2010. Licence: BY-NC-SA 3.0 - http://creativecommons.org/licenses/by-nc-sa/3.0/


function musify($text) {
  $musnum = 'font-size: 70%; white-space: nowrap; vertical-align: 1.1ex;';
  $timden = 'font-size: 70%; vertical-align: -0.6ex; margin-right: 0.8ex; min-width: 1em; max-width:1.6em; margin-left:-0.55em;';
  $musden = 'font-size: 70%; white-space: nowrap; vertical-align: -0.1ex;';
  $musdim = 'font-weight:normal; font-size: 110% !important; vertical-align: 0.1ex;';
  $mushdim = 'font-weight:normal; font-size: 40% !important;';
  $musitie = '-ms-transform: translate(0.1em,1em); -o-transform: translate(0.1em,1em); -moz-transform: translate(0.1em,1em); -webkit-transform: translate(0.1em,1em); transform: translate(0.1em,1em);font-size: 150%; line-height: 1;';
  $musotie = 'font-size: 150%; vertical-align: text-top';
  $dblsharp_css = '-ms-transform: rotate(45deg); -o-transform: rotate(45deg); -moz-transform: rotate(45deg); -webkit-transform: rotate(45deg); transform: rotate(45deg);';

  $sharp = '&#9839;';
  $dblsharp = '<span style="' . $dblsharp_css . '">&#10021;</span>';
  $flat = '&#9837;';
  $dim = '<sup style="' . $musdim . '">&#176;</sup>';
  $hdim = '<sup style="' . $mushdim . '">&#216;</sup>';
  $ext1 = '<sup>(';
  $ext2 = ')</sup>';
  $var1 = '<sup>';
  $var2 = '</sup>';
  $chain = '&#215;';
  $plus = '&#43;';
  $tss = '<span style="' . $musnum . '">';
  $tsm = '</span>&#8260;<span style="' . $musden . '">';
  $ivm = '</span><span style="' . $timden . '">';
  $tri = '&#916;';
  $tse = '</span>';
  $u1 = '<sub>';
  $u2 = '</sub>';
  $tied = '<span style="' . $musitie . '">&#861;</span>';
  $tieu = '<span style="' . $musotie . '">&#865;</span>';
  $br = '<br />';
  $ellip = '&#8230;';
  $nat = '&#9838;';
  $losq = '&#10092;';
  $rosq = '&#10093;';
  $text = html_entity_decode($text);
  $text = htmlspecialchars_decode($text);
  $text = str_replace('<|', $losq, $text);
  $text = str_replace('|>', $rosq, $text);
  $text = str_replace('...', $ellip, $text);
  $text = str_replace("£", $flat, $text);
  $text = str_replace("$", $flat, $text);
  $text = str_replace("¤", $flat, $text);
  $text = str_replace("#", $sharp, $text);
  $text = str_replace($sharp . $sharp, $dblsharp, $text);
  $text = str_replace("?", $nat, $text);
  $text = str_replace("&" . $sharp . "8230;", $ellip, $text);
  $text = str_replace("&" . $sharp . "9837;", $flat, $text);
  $text = str_replace("&" . $sharp . "916;", "&#916;", $text);
  $text = str_replace("&" . $sharp . "215;", $chain, $text);
  $text = str_replace("&" . $sharp . "10092;", $losq, $text);
  $text = str_replace("&" . $sharp . "10093;", $rosq, $text);
  $text = str_replace("~", $hdim, $text);
  $text = str_replace("&" . $sharp . "176;", "&176;", $text);
  $text = str_replace("_", $dim, $text);
  $text = str_replace("*", $chain, $text);
  $text = str_replace("+", $plus, $text);
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
  $text = str_replace("!!", $br, $text);
  return $text;
}

function musify_tag($str) {
  //so: change "[mus]musify markup[/mus]" to musical notation.
  $pat = "/\[mus\](.*?)\[\/mus\]/";
  $n = preg_match_all($pat, $str, $m);
  preg_match_all($pat, $str, $m);
  for ($i = 0; $i < $n; $i++) {
    $mus[] = musify($m[1][$i]);

  }
  foreach ($m as $subj) {

    $str = str_replace($subj, $mus, $str);
  }
  return $str;
}
?>
