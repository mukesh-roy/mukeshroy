<!--FAV ICON-->
<link rel="shortcut icon" href="<?php echo $AccessoriesURL; ?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo $AccessoriesURL; ?>/favicon.ico" type="image/x-icon">

<!-- Apple Touch Icons -->
<link rel="apple-touch-icon" href="<?php echo $AccessoriesURL; ?>/images/meta/apple-touch-icon.png"/>
<?php
function getAbsoluteURL() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];
    $uri = $_SERVER['REQUEST_URI'];

    return $protocol . $host . $uri;
}

// Example usage
$absoluteURL = getAbsoluteURL();
//echo $absoluteURL;
?>

<link rel="canonical" href="<?php echo $absoluteURL; ?>">