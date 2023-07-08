<?php
$userAgentString = $_SERVER['HTTP_USER_AGENT'];
$userAgentStrings = array();
$userAgentStrings = explode(" ", $userAgentString);
$targetOs = array(
    //'Window',
    //'Mac',
    'Android',
    'Linux',
    'BlackBerry'
);
$targetBrowsers = array(
    'Firefox',
    'AppleWebKit',
    'Opera'
);

$targetDevice = array(
    'Mobile'
);

////        Detect Browser Rendering Engine
foreach($targetBrowsers as $browser){
    $browser = '/'.$browser.'/';
    if(preg_match($browser, $userAgentString)){
        $browser = str_replace('/', '', $browser);
        echo '<div class="row"><div class="large-12 columns pd-5">Browser Vendor : <b>', $browser, '</b></div></div>';
        // echo '<link rel="stylesheet" href="css/appleWebKitOpera.css"/>';
    }
}

//Detect Mobile
foreach($targetDevice as $mobile){
    $mobile = '/'.$mobile.'/';
    if(preg_match($mobile, $userAgentString)){
        $mobile = str_replace('/', '', $mobile);
        echo '<div class="row"><div class="large-12 columns pd-5">Type of Device: <b>', $mobile, '</b></div></div>';
       // echo '<link rel="stylesheet" href="css/mobile.css"/>';
        //break;
    }

}



////        Detect Operating System
foreach($targetOs as $operatingSystem){
    $operatingSystem = '/'.$operatingSystem.'/';
    if(preg_match($operatingSystem, $userAgentString)){
        $operatingSystem = str_replace('/', '', $operatingSystem);
        echo '<div class="row"><div class="large-12 columns pd-5">operating system: <b>', $operatingSystem, '</b></div></div>';
        //echo '<link rel="stylesheet" href="css/mobile.css"/>';
        // break;
    }

}

?>

