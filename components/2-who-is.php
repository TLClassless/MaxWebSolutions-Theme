<!-- Replace all text with wp api data -->

<div class="jg-container">
    <div class="jg-section">
        <div class="jg-whois-content">
            <span class="jg-whois-title">
                <h2>Who is</h2>
                <h2 class="jg-emphasis">John Gillen?</h2>
            </span>
            <p>
                <?php
                    $post_69 = get_post(69);
                    $postcontent = $post_69->post_content;
                    echo $postcontent
                ?>
            </p>
        
        <div class="wp-block-button is-style-outline jg-btn"><a class="wp-block-button__link" href="#centres">Find Out More</a></div>
        </div>
    </div>
    <img src="http://localhost/wordpress/wp-content/uploads/2021/07/support.jpg" />
</div>