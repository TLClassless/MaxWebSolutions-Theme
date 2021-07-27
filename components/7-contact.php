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
                <?php
                    $post_85 = get_post(85);
                    $postcontent = $post_85->post_content;
                    echo $postcontent
                ?>
            </p>
        </div>
        <div class="jg-cnt-form">
            <form action="<?php echo get_template_directory_uri();?>/form_validation.php" id="contact-form" method="post">
                <?php
                    if (isset($_POST['submit']))
                    {
                        if (isset($error))
                        {
                            echo "<p style='color:red;'>" 
                            . $error . "</p>";
                        }
                    }
                ?>    
                <input class="jg-form-name" type="text" name="name" placeholder= "Name*" required />
                <input class="jg-form-number" type="tel" name="phone" placeholder="Phone Number*" required/>
                <input class="jg-form-time" type="time" name="time" placeholder="Best time to call" />
                <input class="jg-form-email" type="email" name="email" placeholder="Email Address*" required />
                <textarea class="jg-form-textarea" rows="4" name="msg" placeholder="Message*" form="contact-form" required></textarea>
                <input class="jg-form-submit" type="submit" value="Submit" name="submit" />
            </form>
        </div>
    </div>
</div>