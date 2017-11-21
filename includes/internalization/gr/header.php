		<header class="col-sm-12 col-md-12 col-lg-12">
			<div id="mobile-header" class="col-xs-12 col-sm-12 hidden-md hidden-lg">
				<span id="mobile-menu-switcher" class="icon-menu"></span>
				<div id="mobile-main-menu" class="col-sm-12 hidden-md hidden-lg hidden">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 <?= (constant('ACTION') === 'homepage') ? 'active' : '' ?>">
						<a href="<?=constant('BASEURL')?>/αρχική" title="Αρχική"><span>Αρχική</span></a>
					</div>
					<div class="col-xs-12 col-sm-12 hidden-md hidden-lg <?= (constant('ACTION') === 'services') ? 'active' : '' ?>">
						<a href="<?=constant('BASEURL')?>/υπηρεσίες" title="Υπηρεσίες"><span>Υπηρεσίες</span></a>
					</div>
					<div class="col-xs-12 col-sm-12 hidden-md hidden-lg <?= (constant('ACTION') === 'articles') ? 'active' : '' ?>">
						<a href="<?=constant('BASEURL')?>/άρθρα" title="Άρθρα"><span>Άρθρα</span></a>
					</div>
					<div class="col-xs-12 col-sm-12 hidden-md hidden-lg <?= (constant('ACTION') === 'contact') ? 'active' : '' ?>">
						<a href="<?=constant('BASEURL')?>/επικοινωνία" title="Επικοινωνία"><span>Επικοινωνία</span></a>
					</div>
				</div>
			</div>
			<div id="lang-control">
				<?php $links = $functions->getLanguageLinks(constant('ACTION')); ?>
				<a title="Ελληνικά" href="<?= constant('BASEURL') ?>/gr/<?= $links['gr'] ?>"><img alt="gr-flag" class="l-img" src="<?= constant('BASEURL') ?>/images/gr.jpg"/></a>
				<a title="Αγγλικά" href="<?= constant('BASEURL') ?>/en/<?= $links['en'] ?>"><img alt="uk-flag" class="l-img" src="<?= constant('BASEURL') ?>/images/uk.png"/></a>
			</div>
			<div id="clues" class="col-sm-12 col-md-6 col-lg-6">
				<h2 id="name">Βασίλης Ζαφειράκης</h2>
				<p id="prof">Κτηνίατρος Α.Π.Θ.</p>
				<img alt="veterinarian-logo" id="logo" src="<?= constant('BASEURL') ?>/images/logo.jpg" alt="vent logo"/>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 text-center">
				<div id="info">
					<p id="email"><span class="icon-paper-plane-o"></span>vas.zafeirakis@gmail.com</p>
					<p id="phone"><span class="icon-mobile"></span>6986798497</p>
				</div>
				<center id="slideshow" data-base-url="<?= constant('BASEURL') ?>"></center>
			</div>
			<div id="main-menu" class="hidden-xs hidden-sm col-md-12 col-lg-12">
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3 <?= (constant('ACTION') === 'homepage') ? 'active' : '' ?>">
					<a href="<?=constant('BASEURL')?>/gr/αρχική" title="Αρχική"><span>Αρχική</span></a>
				</div>
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3 <?= (constant('ACTION') === 'services') ? 'active' : '' ?>">
					<a href="<?=constant('BASEURL')?>/gr/υπηρεσίες" title="Υπηρεσίες"><span>Υπηρεσίες</span></a>
				</div>
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3 <?= (constant('ACTION') === 'articles') ? 'active' : '' ?>">
					<a href="<?=constant('BASEURL')?>/gr/άρθρα" title="Άρθρα"><span>Άρθρα</span></a>
				</div>
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3 <?= (constant('ACTION') === 'contact') ? 'active' : '' ?>">
					<a href="<?=constant('BASEURL')?>/gr/επικοινωνία" title="Επικοινωνία"><span>Επικοινωνία</span></a>
				</div>
			</div>
		</header>
