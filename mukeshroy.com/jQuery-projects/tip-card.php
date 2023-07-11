<?php include_once 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/tip_cards.css">
<div class="row">
    <div class="large-12 column">

        <!--        <div class="animationwrapper">
                    <ul class="no-bullet">
                        <li class="1"><img src="http://placehold.it/970x400&text=1"></li>
                    </ul>

                </div>-->
        <ul class="tips no-bullet">
            <li>
                <div class="tc_front">
                    <a href="#tip1">Small box 1 Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a galley of type and scrambled</a>
                </div>
                <div class="tc_back">Android Application Training basics</div>
                <div id="tip1" class="tip">
                    <div class="tc_front">asdfasf asfsafdsafd asfas fsafd sadf asdfas fdas fdasfasfdsafdasfdddfg
                        sdfgsdgf sdfgdsfgds gsd fgsdfg sdfg sdgfdsffgdfsgdg dfsgdfsg dsfgdsfgsdf
                    </div>
                    <div class="tc_back">ABOUT ANDROIDAndroid is a Linux based operating system, It’s an open source,
                        This open-source code and permissive licensing allows the software to be freely modified and
                        distributed by device manufacturers, wireless carriers and enthusiast developers. Additionally,
                        Android has a large community of developers writing applications ("apps") that extend the
                        functionality of devices, written primarily in a customized version of the java programming
                        language.OUR TRAINING PROGRAM
                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>

<?php include_once 'footer.php'; ?>
<script src="css/jquery.tip_cards.js"></script>
<script>
    $(".tips").tip_cards();
</script>