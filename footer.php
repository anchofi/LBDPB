
<footer>

<!-- Intégration MailChimp pour email ou newsletter -->

	<div id="mc_embed_signup">
		<form action="http://laboxdupaysbasque.us8.list-manage.com/subscribe/post?u=a3c4828996625dfa68b7d611b&amp;id=9f33111ad2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="E-mail pour recevoir les infos de La Box du Pays Basque" required style="display:inline; width:350px; font-family:Ubuntu, sans-serif; font-size:13px; text-align: center; margin-left: 445px; ">
    		<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    		<div style="position: absolute; left: -5000px;"><input type="text" name="b_a3c4828996625dfa68b7d611b_9320041a2a" tabindex="-1" value=""></div>
    		<div class="clear"><input type="submit" value="Valider" name="subscribe" id="mc-embedded-subscribe" class="button" style="display:inline; width: 90px; font-family: Ubuntu, sans-serif; font-weight: 500; margin-left:-50px; margin-top: 0;" >
    		</div>
		</form>
	</div><!--End mc_embed_signup-->

	<ul class="foot">
		<li>
		Copyright © La Box du Pays Basque</a> -
		</li>

		<li>
		<a href="#">Paiement sécurisé</a> -
		</li>
	
		<li>
		<a href="#">Mentions légales / CGV</a> -
		</li>

		<li>
		<a href="#">FAQ</a> -
		</li>

		<li>
		<a href="mailto:bonjour@laboxdupaysbasque.fr">Contact</a>
		</li>
	</ul>

</footer>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		
		<!-- Lien pour aller chercher le fichier bootstrat.min.js dans mon dossier js dans mon dossier site -->
        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/bootstrap.min.js"></script>
		
		<!-- Lien pour aller chercher le fichier main.js dans mon dossier js dans mon dossier site -->
        <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>

        <?php wp_footer(); ?> <!-- shows the admin bar when logged in -->

    </body>
</html>
