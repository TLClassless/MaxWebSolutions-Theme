<!-- Replace all text with wp api data -->

<div id="centres" class="jg-container">
<div class="jg-how-content">
    <div class="jg-section">
            <div class="jg-how-title">
                <h2>How I'm helping people beat </h2>
                <h2 class="jg-emphasis">Drug & Alcohol Addiction</h2>
            </div>
            <div class="jg-how-info">
                <p>
                    <?php
                        $post_74 = get_post(74);
                        $postcontent = $post_74->post_content;
                        echo $postcontent
                    ?>
                </p>
            </div>
        </div>
        <div class="jg-how-slides"><?php echo do_shortcode('[metaslider id="97"]'); ?></div>
        <div class="jg-how-images">
            <img src="wp-content/uploads/2021/07/asanalodgelogo.jpg" />
            <img src="wp-content/uploads/2021/07/novarecoverylogo.jpg" />
            <img src="wp-content/uploads/2021/07/asanalodgelogo.jpg" />
        </div>
    </div>
    <div id="NAD"></div>
</div>