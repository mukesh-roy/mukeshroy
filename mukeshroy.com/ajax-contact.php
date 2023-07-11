<?php require_once 'header.php'; ?>
<style>
    .text-center {
        text-align: center;
    }

    .light-box, .light-bg {
        display: none;
    }

    .light-bg {
        background: #000;
        width: 100%;
        height: 100%;
        opacity: .8;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 2;
    }

    .light-box {
        background: #fff;
        border: solid 10px #000;
        width: 50%;
        padding: 1em;
        position: absolute;
        left: 50%;
        top: 10%;
        margin-left: -25%;
        z-index: 3;
    }

    .close-box {
        background: #c75f05;
        color: #fff;
        font: bold 2em/1 Arial;
        position: absolute;
        display: inline-block;
        right: 0;
        top: 0;
        z-index: 4;
    }
</style>
<div class="text-center">
    <a href="javascript:void(0);" class="open-light-window">Click to show light window</a>
</div>


<div class="light-box">
    <a href="javascript:void(0);" class="close-box">X</a>

    <h3>:: Welcome to Light box :: </h3>

    <p class="text-justify">
        content will comes here..content will comes here..content will comes here..content will comes
        here..content will comes here..content will comes here..content will comes here..content will comes
        here..content will comes here..content will comes here..content will comes here..content will comes
        here..content will comes here..content will comes here..content will comes here..
    </p>
</div>
<div class="light-bg"></div>




<?php require_once 'footer.php'; ?>

<script>
    $(document).ready(function () {
        function lightWindow() {
            $('.light-bg').fadeIn('slow');
            $('.light-box').slideDown('slow');
        }

        function closelightWindow() {
            $('.light-bg').fadeOut('slow');
            $('.light-box').slideUp('fast');
        }

        $('.open-light-window').on('click', function () {
            lightWindow();
        })
        $('.close-box,.light-bg').on('click', function () {
            closelightWindow();
        })
    });
</script>