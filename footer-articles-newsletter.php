<?php $block->open('footer-articles-newsletter'); ?>
    <div class="row">
        <?php
        $block->document->each('@list', function ($prop, $value) use ($block) { ?>
            <div class="col-sm-3">
                <div class="col-md-12 item">
                    <?php $value->tag('img', 'image', ['class' => ['img-responsive']]); ?>
                    <h2><?= $value['name']; ?></h2>
                    <p><?= $value['description']; ?></p>
                </div>
            </div>
        <?php
        }); ?>
    </div>
    <!-- Begin MailChimp Signup Form -->
    <div class="col-md-12" id="mc_embed_signup">
        <div class="row">
        <form action="<?= $block->document['url']; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="col-md-12 validate" target="_blank" validate>
            <div class="mc-field-group">
                <label class="col-md-7" for="mce-EMAIL"><?= $block->document['description']; ?></label>
                <div class="col-md-5">
                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your Email Here">
                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                </div>
            </div>
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;"><input type="text" name="b_e6d17630fcb33452412e766d5_039f558e85" tabindex="-1" value=""></div>
        </form>
        </div>
    </div>

<!--End mc_embed_signup-->
<?php
$block->close();
?>
<div class="footer-articles-newsletter copyright">
    <?php 
    $block->document->tag('span', 'name');
    ?>
</div>