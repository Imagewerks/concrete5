<?php defined('C5_EXECUTE') or die('Access Denied.'); $this->inc('elements/header.php'); ?>


<div class="container">
    <div class="row">
        <div class="span3">
            <div class="well">
                <?php
                   $a = new Area('Sidebar');
                   $a->display($c);
                ?>
            </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
            <div class="hero-unit">
                <?php
                   $a = new Area('Hero Content');
                   $a->display($c);
                ?>
            </div>
            
            <div class="row">
            	<div class="span12">
					<?php
						$a = new Area('Main');
						$a->display($c);
				   ?>
            	</div>
            </div>    
                
            <div class="row">
                <div class="span3">
                
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!--/span-->
                <div class="span3">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!--/span-->
                <div class="span3">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!--/span-->
            </div><!--/row-->
            <div class="row">
                <div class="span3">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta <a href="#">gravida at eget metus</a>. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!--/span-->
                <div class="span3">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!--/span-->
                <div class="span3">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!--/span-->
            </div><!--/row-->
        </div><!--/span-->
    </div><!-   -/row-->
</div><!--/.-container-->

<?php $this->inc('elements/footer.php'); ?>
    