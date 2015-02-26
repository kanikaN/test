<?php

// Create DOM from URL or file
header( 'Content-type: text/html; charset=utf-8' );
 
$html = file_get_contents('https://maps.google.com/maps/place/Victoria,+Australia');
//$html->find('input[id=searchboxinput]',0)->innerhtml='Victoria,Australia';   
echo $html;

//// Find all images 
//foreach($html->find('img') as $element) 
//       echo $element->src . '<br>';
//
//// Find all links 
//foreach($html->find('a') as $element) 
//       echo $element->href . '<br>';
//
//
//$html = str_get_html('<div id="hello">Hello</div><div id="world">World</div>');
//
//$html->find('div', 1)->class = 'bar';
//
//$html->find('div[id=hello]', 0)->innertext = 'foo';
//
//echo $html;
