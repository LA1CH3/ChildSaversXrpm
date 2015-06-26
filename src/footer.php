			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="newsletter">
					<div class="search-bar">
						<span>Sign Up For Our Newsletter</span>
					 	<form role="search">
					    <input type="search" placeholder="Enter Search">
					    <button class="cs-button" type="submit">
					      Submit
					    </button>
						  </form>
					</div>
				</div>

				<div class="row">
					<div class="footer-third box-content contact-box">
						<h2>Contact Us</h2>
						<address>
							<p>200 North 22nd Street<br>
						       Richmond, VA 23233</p>
						</address>
						<p>Phone (804) 644 9590</p>
						<p>Fax (804) 644 9596</p>
						<p>info@childsavers.org</p>
					</div>
					<div class="connect footer-third box-content pink">
						<h2>Connect</h2>
						<ul>
							<li>
								<a class="fb" target="_blank" href="https://www.facebook.com/ChildSaversRVA"></a>
							</li>
							<li>
								<a class="twit" target="_blank" href="https://twitter.com/childsaversrva"></a>
							</li>
							<li>
								<a class="email" target="_blank" href="#"></a>
							</li>
							<li>
								<a class="rss" target="_blank" href="#"></a>
							</li>
						</ul>
						<a class="read-mores" target="_blank" href="https://ssl.charityweb.net/childsavers/">Donate</a>
					</div>
					<div class="footer-third box-content calendar_wrap">
						<h2>Calendar</h2>
						<?php dynamic_sidebar( 'widget-area-2' ); ?>
					</div>
				</div>

				<div class="copyright">
					<div class="copy-left">
						<span>Copyright <?php echo date('Y'); ?> ChildSavers. All Rights Reserved.</span>
					</div>
					<div class="copy-right">
						<a href="#">Privacy Policy</a>
						<a href="<?php echo site_url('
						/contact/'); ?>">Contact Us</a>
					</div>
				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.5/slick.min.js"></script>

	</body>
</html>
