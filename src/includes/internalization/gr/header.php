		<header class="col-sm-12 col-md-12 col-lg-12">
<?php require_once(constant('BASEPATH') . '/includes/language-selector.php'); ?>
			<div id="clues" class="col-sm-12 col-md-6 col-lg-6">
				<h2 id="name">Βασίλης Ζαφειράκης</h2>
				<p id="prof">Κτηνίατρος Α.Π.Θ.</p>
				<img alt="veterinarian-logo" id="logo" src="<?php echo constant('BASEURL') ?>/images/logo.jpg"/>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 text-center">
				<div id="info">
					<p id="email"><span class="icon-paper-plane"></span>vas.zafeirakis@gmail.com</p>
					<p id="phone"><span class="icon-mobile"></span>6986798497</p>
				</div>
				<div id="slideshow" data-base-url="<?php echo constant('BASEURL') ?>"></div>
			</div>
			<div id="main-menu" class="hidden-xs hidden-sm col-md-12 col-lg-12">
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3 <?php echo (constant('ACTION') === 'homepage') ? 'active' : '' ?>">
					<a href="<?php echo constant('BASEURL')?>/gr/αρχική" title="Αρχική"><span>Αρχική</span></a>
				</div>
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3 <?php echo (constant('ACTION') === 'services') ? 'active' : '' ?>">
					<a href="<?php echo constant('BASEURL')?>/gr/υπηρεσίες" title="Υπηρεσίες"><span>Υπηρεσίες</span></a>
				</div>
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3 <?php echo (constant('ACTION') === 'articles') ? 'active' : '' ?>">
					<a href="<?php echo constant('BASEURL')?>/gr/άρθρα" title="Άρθρα"><span>Άρθρα</span></a>
				</div>
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3 <?php echo (constant('ACTION') === 'contact') ? 'active' : '' ?>">
					<a href="<?php echo constant('BASEURL')?>/gr/επικοινωνία" title="Επικοινωνία"><span>Επικοινωνία</span></a>
				</div>
			</div>
		</header>
