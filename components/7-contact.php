<div class="jg-container blue-bg">
    <div class="jg-section">
        <div class="jg-cnt-information">
            <div class="jg-contact-title">
                <h2>
                    Contact me
                </h2>
                <h2 class="jg-emphasis">
                    Looking to get in touch?
                </h2>
            </div>
            <p>
                <!-- Looking to get in touch with me? Not a problem, just enter your information below to send me a message or use the information below to ask me any questions.
            </p>
            <p class="jg-contact-method">
                <b>Tel:</b> 0151 1234 1234
            </p>
            <p class="jg-contact-method">
                <b>Email:</b> johngillen@nadresearch.co.uk -->
                <?php
                    $post_85 = get_post(85);
                    $postcontent = $post_85->post_content;
                    echo $postcontent
                ?>
            </p>
        </div>
        <div class="jg-cnt-form">
            <!-- insert contact form -->
        </div>
    </div>
</div>