<?php


$embedded = '';
if (preg_match_all('/(http:\/\/|https:\/\/)soundcloud\.com\/(.+)/i', $vars['object']->body, $matches)) {
    
    foreach ($matches[0] as $m)
        $embedded .= '<div id="sc_'.md5($m).'" class="soundcloud-embed" data-url="'.$m.'"></div>';
}

echo $embedded;


 