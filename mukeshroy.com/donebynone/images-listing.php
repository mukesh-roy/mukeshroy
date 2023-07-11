
<?php require_once'header.php';?>
<div class="row product-category">
    <div class="large-4 column hide"><a href="javascript:void(0)"><img src="sprite/dbn-sprite1.png"></a></div>
<?php
$dir = "/var/www/newdesign/new-images/*";
//$dir = "/var/www/newdesign/images/*";

$images = glob( $dir );


foreach( $images as $image ){

    $image = str_replace('/var/www/newdesign/','',$image);
    echo '<div class="large-4 column"><img src="'.$image.'"></div>';

}

?>
</div>
<?php require_once'footer.php';?>
