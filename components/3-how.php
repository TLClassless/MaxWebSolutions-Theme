<!-- Replace all text with wp api data -->

<div id="centres" class="jg-container">
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
        <!-- replace with slider plugin -->
        <img class="jg-how-img" src="http://localhost/wordpress/wp-content/uploads/2021/07/Nova-Entrance.jpeg">
</div>