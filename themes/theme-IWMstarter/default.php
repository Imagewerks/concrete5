<?php defined('C5_EXECUTE') or die('Access Denied.'); $this->inc('elements/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="span3">
            <?php
               $a = new Area('Side Content');
               $a->display($c);
            ?>
        </div><!--/span-->
        <div class="span9">
            <div class="row">
                <?php
                    $a = new Area('Main Content');
                    $a->display($c);
                ?>
            </div><!--/row-->
        </div><!--/span-->
    </div><!-   -/row-->
</div><!--/.-container-->


<?php $this->inc('elements/footer.php'); ?>  