<!-- FOOTER -->
<footer class="c-footer c-section">
    <div class="c-contain">
        <ul class="c-footer__list c-text-content">
            <li><a class="" href="tel:1-604-813-0496">+1 (604) 813-0496</a></li>
            <li><a class="" href="mailto:hello@lawnpartyfilms.com">hello@devonmussett.com</a></li>
        </ul>
        <ul class="c-footer__list c-text-content">
            <li><a class="" href="https://facebook.com/LawnPartyFilms">Facebook</a></li>
            <li><a class="" href="https://twitter.com/devonmussett">Twitter</a></li>
        </ul>
        <ul class="c-footer__list c-text-content">
            <li><a class="" href="https://instagram.com/lawnpartyfilms">Instagram</a></li>
            <li><a class="" href="https://vimeo.com/user18727376">Vimeo</a></li>
        </ul>
        <div class="u-float-end" style="padding-top:2.5rem;">
            <p class="u-mono u-small-text u-grey">
                Copyright © 2010 – 2018 Devon Mussett.<br />
                All rights reserved.
                <a href="<?php echo $site->url() ?>/privacy" class="u-underline">Privacy</a>
                |
                <a href="https://house-house.design" class="u-underline">Credits</a>
            </p>
        </div>
    </div>
</footer>

<!-- CLOSE MAIN :: opened in head.php-->
</main>

<!-- ADDITIONAL STYLES -->
<?php snippet('scss.critical') ?>

<!-- SCRIPTS -->

<script type="text/javascript" src="assets/slick/slick.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.your-class').slick({
      setting-name: setting-value
    });
  });
</script>
<script>$(function(){$('.js-lazy').Lazy({});});</script>

<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
    <script><?php readfile('assets/js/ga.js'); ?></script>
<?php endif; ?>

<!-- LA FIN -->
</body>
</html>
