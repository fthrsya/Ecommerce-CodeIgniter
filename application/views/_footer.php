<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Site Haritası</h4>
						<ul class="nav">
							<li><a href="<?=base_url()?>" >Anasayfa</a></li>  
							<li><a href="<?=base_url()?>home/hakkimizda ">Hakkımızda</a></li>
							<li><a href="<?=base_url()?>home/bize_yazin">Bize yazın</a></li>
							<li><a href="<?=base_url()?>uye/sepetim">Sepetim</a></li>
													
						</ul>					
					</div>
					<div class="span4">
						<h4>Hesap Bilgileriniz</h4>
						<ul class="nav">
							<li><a href="<?=base_url()?>uye/hesabim">Hesabım</a></li>
							<li><a href="<?=base_url()?>uye/sepetim">Sepetim</a></li>
							<li><a href="<?=base_url()?>uye/mesajlar">Yorumlarım</a></li>
							
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="<?=base_url()?>assets/themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Kuyuk kitapçılık olarak her zaman müşterinin yanında olan bir politika izlemekteyiz bize verdiginiz destek için teşşekürler.Herhangi bir sorununuzda bizlere yazmaktan çekinmeyin.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="http://www.facebook.com">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>KUYUK KİTAPÇILIK HER HAKKI SAKLIDIR.</span>
			</section>
		</div>
		<script src="<?=base_url()?>assets/themes/js/common.js"></script>
		<script src="<?=base_url()?>assets/themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: true,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>