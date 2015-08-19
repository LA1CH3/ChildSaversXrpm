			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="newsletter">
					<div class="search-bar">
						<span>Sign Up For Our Newsletter</span>
					 	<form role="search" method="POST" action="https://visitor2.constantcontact.com/api/signup">
					 	<input data-id="ca:input" type="hidden" name="ca" value="fd4030bf-1d41-40de-b5cb-cdc0e57fc362">
					    <input data-id="email:input" name="email" type="search" placeholder="Enter Email">
					    <input data-id="url:input" name="url" value="<?php echo site_url('thanks/'); ?>" type="hidden">
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
								<a class="email" target="_blank" href="mailto:info@childsavers.org"></a>
							</li>
							<li>
								<a class="rss" target="_blank" href="<?php bloginfo('atom_url'); ?>"></a>
							</li>
						</ul>
						<a class="read-mores" target="_blank" href="https://ssl.charityweb.net/childsavers/">Donate</a><br><br><br><br>
						<a href="<?php echo site_url('/events/'); ?>" target="_blank" class="read-mores">Events</a>
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
						contact/'); ?>">Contact Us</a>
					</div>
				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.5/slick.min.js"></script>

	</body>
</html>
