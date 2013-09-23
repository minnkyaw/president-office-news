<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="scroll.js"></script>
<link href="scroll.css?<?php echo rand(0,9999999); ?>" rel="stylesheet" type="text/css" />
<style type="text/css">



</style>

<title>TEST</title>
</head>

<body>

<h2 class="widgettitle" align="center">Daily News</h2>
<div id="scrollholder" class="scrollholder" style="overflow: hidden;">
<div style="width: 248px; top: -48.3px; left: 0px; visibility: visible;" id="scroll" class="scroll">

<div id="mmpo_news" style="padding:10px;" align="justify">

<?php


$xml = file_get_contents("http://www.president-office.gov.mm/en/?q=briefing-room/news"); 

$linkAry = array();
	
$attr = "class";
$value = "views-row views-row-1 views-row-odd views-row-first";
$tag_regex = '/<div[^>]*'.$attr.'="'.$value.'">(.*?)<\\/div>/si';
preg_match($tag_regex, $xml, $matches); 
$subxml = $matches[1];
$attr = "class";
$value = "field-content";
$tag_regex = '/<span[^>]*'.$attr.'="'.$value.'">(.*?)<\\/span>/si';
preg_match($tag_regex, $subxml, $matches);
$matches[1] = '<a target="_blank" href="http://www.president-office.gov.mm'.substr($matches[1], 9);
array_push($linkAry, $matches[1]);
###############################################
$attr = "class";
$value = "views-row views-row-2 views-row-even";
$tag_regex = '/<div[^>]*'.$attr.'="'.$value.'">(.*?)<\\/div>/si';
preg_match($tag_regex, $xml, $matches); 
$subxml = $matches[1];
$attr = "class";
$value = "field-content";
$tag_regex = '/<span[^>]*'.$attr.'="'.$value.'">(.*?)<\\/span>/si';
preg_match($tag_regex, $subxml, $matches);
$matches[1] = '<a target="_blank" href="http://www.president-office.gov.mm'.substr($matches[1], 9);
array_push($linkAry, $matches[1]);
###############################################
$attr = "class";
$value = "views-row views-row-3 views-row-odd";
$tag_regex = '/<div[^>]*'.$attr.'="'.$value.'">(.*?)<\\/div>/si';
preg_match($tag_regex, $xml, $matches); 
$subxml = $matches[1];
$attr = "class";
$value = "field-content";
$tag_regex = '/<span[^>]*'.$attr.'="'.$value.'">(.*?)<\\/span>/si';
preg_match($tag_regex, $subxml, $matches); 
$matches[1] = '<a target="_blank" href="http://www.president-office.gov.mm'.substr($matches[1], 9);
array_push($linkAry, $matches[1]);	
###############################################
$attr = "class";
$value = "views-row views-row-4 views-row-even";
$tag_regex = '/<div[^>]*'.$attr.'="'.$value.'">(.*?)<\\/div>/si';
preg_match($tag_regex, $xml, $matches); 
$subxml = $matches[1];
$attr = "class";
$value = "field-content";
$tag_regex = '/<span[^>]*'.$attr.'="'.$value.'">(.*?)<\\/span>/si';
preg_match($tag_regex, $subxml, $matches); 
$matches[1] = '<a target="_blank" href="http://www.president-office.gov.mm'.substr($matches[1], 9);
array_push($linkAry, $matches[1]);
###############################################
$attr = "class";
$value = "views-row views-row-5 views-row-odd";
$tag_regex = '/<div[^>]*'.$attr.'="'.$value.'">(.*?)<\\/div>/si';
preg_match($tag_regex, $xml, $matches); 
$subxml = $matches[1];
$attr = "class";
$value = "field-content";
$tag_regex = '/<span[^>]*'.$attr.'="'.$value.'">(.*?)<\\/span>/si';
preg_match($tag_regex, $subxml, $matches); 
$matches[1] = '<a target="_blank" href="http://www.president-office.gov.mm'.substr($matches[1], 9);
array_push($linkAry, $matches[1]);
###############################################
$attr = "class";
$value = "views-row views-row-6 views-row-even";
$tag_regex = '/<div[^>]*'.$attr.'="'.$value.'">(.*?)<\\/div>/si';
preg_match($tag_regex, $xml, $matches); 
$subxml = $matches[1];
$attr = "class";
$value = "field-content";
$tag_regex = '/<span[^>]*'.$attr.'="'.$value.'">(.*?)<\\/span>/si';
preg_match($tag_regex, $subxml, $matches); 
$matches[1] = '<a target="_blank" href="http://www.president-office.gov.mm'.substr($matches[1], 9);
array_push($linkAry, $matches[1]);
##############################################
$attr = "class";
$value = "views-row views-row-7 views-row-odd";
$tag_regex = '/<div[^>]*'.$attr.'="'.$value.'">(.*?)<\\/div>/si';
preg_match($tag_regex, $xml, $matches); 
$subxml = $matches[1];
$attr = "class";
$value = "field-content";
$tag_regex = '/<span[^>]*'.$attr.'="'.$value.'">(.*?)<\\/span>/si';
preg_match($tag_regex, $subxml, $matches); 
$matches[1] = '<a target="_blank" href="http://www.president-office.gov.mm'.substr($matches[1], 9);
array_push($linkAry, $matches[1]);
###############################################
$attr = "class";
$value = "views-row views-row-8 views-row-even";
$tag_regex = '/<div[^>]*'.$attr.'="'.$value.'">(.*?)<\\/div>/si';
preg_match($tag_regex, $xml, $matches); 
$subxml = $matches[1];
$attr = "class";
$value = "field-content";
$tag_regex = '/<span[^>]*'.$attr.'="'.$value.'">(.*?)<\\/span>/si';
preg_match($tag_regex, $subxml, $matches); 
$matches[1] = '<a target="_blank" href="http://www.president-office.gov.mm'.substr($matches[1], 9);
array_push($linkAry, $matches[1]);
##############################################
$attr = "class";
$value = "views-row views-row-9 views-row-odd";
$tag_regex = '/<div[^>]*'.$attr.'="'.$value.'">(.*?)<\\/div>/si';
preg_match($tag_regex, $xml, $matches); 
$subxml = $matches[1];
$attr = "class";
$value = "field-content";
$tag_regex = '/<span[^>]*'.$attr.'="'.$value.'">(.*?)<\\/span>/si';
preg_match($tag_regex, $subxml, $matches); 
$matches[1] = '<a target="_blank" href="http://www.president-office.gov.mm'.substr($matches[1], 9);
array_push($linkAry, $matches[1]);

echo '<div id="mmpo_news">';
echo '<div class="views-field">1. '.$linkAry[0].'</div>';
echo '<div class="views-field">2. '.$linkAry[1].'</div>';
echo '<div class="views-field">3. '.$linkAry[2].'</div>';
echo '<div class="views-field">4. '.$linkAry[3].'</div>';
echo '<div class="views-field">5. '.$linkAry[4].'</div>';
echo '<div class="views-field">6. '.$linkAry[5].'</div>';
echo '<div class="views-field">7. '.$linkAry[6].'</div>';
echo '<div class="views-field">8. '.$linkAry[7].'</div>';
echo '<div class="views-field">9. '.$linkAry[8].'</div>';
echo '</div>';


/*
$txt = array(" ","a","b","c","d","e","f","g"," ","i","j","k","l","m","n","o"," ");
for($i=0;$i<5000;$i++){
	echo $txt[rand(0,16)]."";
}
*/

?>
 
</div>


</div>
</div>
<div align="right" style="margin-top:3px; width:248px"><a class="readmore" target="_blank" href="http://www.president-office.gov.mm/en/?q=briefing-room/news">Read More</a></div>
    
<script type="text/javascript">
<!--
	ScrollLoad ("scrollholder", "scroll", true);
//-->
</script>

</body>
</html>