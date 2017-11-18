		<header class="col-sm-12 col-md-12 col-lg-12">
			<div id="lang-control">
				<?php $links = $functions->getLanguageLinks(ACTION); ?>
				<a title="Ελληνικά" href="<?=constant('LINK') . '/' . $links[0]?>"><img alt="gr-flag" class="l-img" src="images/gr.jpg"/></a>
				<a title="Αγγλικά" href="<?=constant('LINK') . '/' . $links[1] ?>"><img alt="uk-flag" class="l-img" src="images/uk.png"/></a>
			</div>
			<div id="clues" class="col-sm-12 col-md-6 col-lg-6">
				<h2 id="name">Βασίλης Ζαφειράκης</h2>
				<p id="prof">Κτηνίατρος Α.Π.Θ.</p>
				<img alt="veterinarian-logo" id="logo" src="images/logo.jpg" alt="vent logo"/>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 text-center">
				<div id="info">
					<p id="email"><span class="icon-paper-plane"></span>vas.zafeirakis@gmail.com</p>
					<p id="phone"><span class="icon-mobile"></span>6986798497</p>
				</div>
				<center id="slideshow"></center>
			</div>
			<div id="main-menu" class="col-sm-12 col-md-12 col-lg-12">
				<div class="col-sm-12 col-md-3 col-lg-3 <?= (constant('ACTION') === 'homepage') ? 'active' : '' ?>">
					<a href="<?=constant('LINK')?>/αρχική" title="Αρχική"><span>Αρχική</span></a>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3 <?= (constant('ACTION') === 'services') ? 'active' : '' ?>">
					<a href="<?=constant('LINK')?>/υπηρεσίες" title="Υπηρεσίες"><span>Υπηρεσίες</span></a>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3 <?= (constant('ACTION') === 'articles') ? 'active' : '' ?>">
					<a href="<?=constant('LINK')?>/άρθρα" title="Άρθρα"><span>Άρθρα</span></a>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3 <?= (constant('ACTION') === 'contact') ? 'active' : '' ?>">
					<a href="<?=constant('LINK')?>/επικοινωνία" title="Επικοινωνία"><span>Επικοινωνία</span></a>
				</div>
			</div>
		</header>
