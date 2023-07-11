<?php
header("Content-type: text/css");
//$get_styles = array('../bower_components/modernizr/modernizr.min.js','../bower_components/jquery/dist/jquery.min.js','../bower_components/foundation/js/foundation.min.js','app.js');
$get_styles = array('../bower_components/modernizr/modernizr.min.js','../bower_components/jquery/dist/jquery.min.js','../bower_components/foundation/js/foundation.min.js');
$myFile = 'app.min.js';$min_content='';unlink($myFile);

function compress($buffer)
{
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
    $buffer = str_replace(array("/\n\s*\n/"), '', $buffer);
    return $buffer;
}

foreach ($get_styles as $sheet) {
    $sheets = trim($sheet);
    if (file_exists($sheets)) {
        echo "/*".$sheets."*/";
        $min_content.=compress(file_get_contents($sheets));
    }
}
$fh = fopen($myFile, 'w+') or die("can't open file");
fwrite($fh, $min_content);
fclose($fh);
?>
