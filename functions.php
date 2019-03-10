<?php



if (!function_exists('show_about_me')) {
    function show_about_me () {
        ?>
        <section id="about" class="section section-about">
            <div class="section-box-outer">
                <div class="section-box">
                    <div class="profile">
                        <div class="section-content">
                            <h3>Hello! I’m Shahadat Hossain.</h3>
                            <p>Experienced in Web development and IT consulting. Open to new innovation and challenges across all fields. With adequate knowledge on Hybrid Mobile Application development, Linux servers and Containers. I like to read and constantly improve my knowledge as a self-learner. Prefer OSX / Linux environment for work.</p>

                            <p>I am an open minded and good-tempered person with a positive approach. I am accustomed to build an optimal relation with clients and colleagues and to create a network within the organization based on personal trust.</p>
                        </div>
                    </div>
                    <div class="profile-footer">
                        <div class="social">
                            <?php czr_fn_print_social_links(); ?>
                        </div>
                        
                        <div class="resume-btn">
                            <p><a class="btn btn-lg"  href="/about">About Me</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    add_action('__after_header', 'show_about_me');
}

/*custom credits   		*/
add_filter('tc_credits_display', 'my_custom_credits');
function my_custom_credits(){ 
$credits = '';
$newline_credits = 'Logo created using <a href="http://www.logogarden.com/">logogarden</a>';
return '
<div class="span4 credits">
    		    	<p> &middot; &copy; '.esc_attr( date( 'Y' ) ).' <a href="'.esc_url( home_url() ).'" title="'.esc_attr(get_bloginfo()).'" rel="bookmark">'.esc_attr(get_bloginfo()).'</a> &middot; '.($credits ? $credits : 'Designed by <a href="http://www.themesandco.com/">Themes &amp; Co</a>').' &middot;  <a href="http://www.ashutoshdas.com/about/"> about/contact </a> &middot; '.($newline_credits ? '<br />&middot; '.$newline_credits.' &middot;' : '').'</p>		</div>';
}