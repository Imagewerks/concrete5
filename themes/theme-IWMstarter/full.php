<?php defined('C5_EXECUTE') or die('Access Denied.'); $this->inc('elements/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="span12">
                <?php
                    $a = new Area('Main');
                    $a->display($c);
                ?>
        </div><!--/span-->
    </div><!--/row-->

</div><!--/.-container-->

<?php $this->inc('elements/footer.php'); ?>
