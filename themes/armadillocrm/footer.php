
</div>
    <!-- Footer ----------------------->
    <footer>
        <div class="container">
            
            <div class="contact">
                <dl class="details">
                    <dt><?php the_field('phone_number_title', 'option'); ?></dt>
                    <dd><a href="tel:<?php the_field('phone_number', 'option'); ?>"><span class="js-number"><?php the_field('phone_number', 'option'); ?></span></a></dd>
                    <dt><?php the_field('email_title', 'option'); ?></dt>
                    <dd><a href="mailto:<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a></dd>
                </dl>
            </div>

            <div class="contact">
                <dl class="details">
                    <dt><?php the_field('address_title', 'option'); ?></dt>
                    <dd><?php the_field('office_address', 'option'); ?></dd>
                </dl>
            </div>

            <div class="sitemap">

                <ul>
                    <li><?php wp_nav_menu(); ?></li>
                    <li><a href="#" class="backToTop">Back to top</a></li>
                </ul>
                
                <ul class="social">
                <?php 
                    if(have_rows('social_links', 'option')): 
                        while ( have_rows('social_links', 'option') ) : the_row();
                ?>
                    <li>
                        <a href="<?php the_sub_field('url', 'option')?>" target="_blank">
                            <span class="fa fa-<?php the_sub_field('platform', 'option') ?>"></span>
                        </a>   
                    </li>
                <?php
                        endwhile;
                    endif;
                ?>
                </ul>

            </div>

            <p class="copyright">&copy; <?php echo date('Y'); ?> Armadillo CRM <a class="privacyPolicy" href="/privacy-policy">Privacy policy</a></p>
            
        </div>
    </footer>
    
</div>

<!-- analytics -->
<script>
(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
ga('send', 'pageview');
</script>
<?php wp_footer(); ?>
	</body>
</html>
