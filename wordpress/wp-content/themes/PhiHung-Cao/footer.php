<footer class="footer-distributed">

<div class="footer-left">

    <h3>Vancouver Medical College</h3>

    <p class="footer-links">
    <?php 
                wp_nav_menu( array(
                    'theme_location' => 'header_menu',
                    'menu_class' => 'topnav',
                    'menu_id' => 'navbar'
                ) );
            ?>
    </p>

    <p class="footer-company-name">Phi Hung Cao &copy; 2018</p>
    <div id="googleMap" style="width:100%;height:200px;padding-top:10px"></div>
</div>

<div class="footer-center">

    <div>
        <i class="fa fa-map-marker"></i>
        <p><span>5684 Aberdeen St</span> Vancouver, Canada</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+1 236 888 7070</p>
    </div>

    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:support@company.com">henrycao70@gmail.com</a></p>
    </div>

</div>

<div class="footer-right">

    <p class="footer-company-about">
        <span>About the College</span>
        Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
    </p>

    <div class="footer-icons">

        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
        <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
        <a href="https://github.com/CaoPhiHung"><i class="fa fa-github"></i></a>

    </div>

</div>

</footer>
    <script src="<?php echo get_template_directory_uri();?>/js/loginmodal.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8cKAF3Kp4eX4dGebz8iwax3Z33pvC9cQ&callback=initMap"
  type="text/javascript"></script>
    <?php wp_footer(); ?>
    </BODY>
</HTML>
<!-- End page footer -->