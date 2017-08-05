		<header class="col-sm-12 col-md-12 col-lg-12">
			<div id="lang-control">
				<?php $links = Functions::getLanguageLinks(ACTION); ?>
				<a href="<?=constant('LINK') . $links[0]?>"><img alt="gr-flag" class="l-img" src="images/gr.jpg"/></a>
				<a href="<?=constant('LINK') . $links[1] ?>"><img alt="uk-flag" class="l-img" src="images/uk.png"/></a>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div id="clues">
					<h2 id="name">Vasilis Zafeirakis</h2>
					<p id="prof">Veterinarian</p>
					<img alt="veterinarian-logo" id="logo" src="images/logo.jpg" alt="vent logo"/>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 text-center">
				<div id="info">
					<p id="email"><span class="icon-paper-plane"></span>vas.zafeirakis@gmail.com</p>
					<p id="phone"><span class="icon-mobile"></span>+30 6986798497</p>
				</div>
				<div id="slideshow">slideshow</div>
			</div>
			<div id="main-menu" class="col-sm-12 col-md-12 col-lg-12">
				<div class="col-sm-12 col-md-3 col-lg-3">
					<a href="<?=constant('LINK')?>homepage" title="Home"><span>Home</span></a>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3">
					<a href="<?=constant('LINK')?>services" title="Services"><span>Services</span></a>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3">
					<a href="<?=constant('LINK')?>articles" title="Articles"><span>Articles</span></a>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3">
					<a href="<?=constant('LINK')?>contact" title="Contact"><span>Contact</span></a>
				</div>
			</div>
		</header>

