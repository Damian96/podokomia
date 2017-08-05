		<header class="col-sm-12 col-md-12 col-lg-12">
			<div id="lang-control">
				<?php if(LANG === 'el') { ?>
				<a href="index.php?action=<?=REVERSE_ACTION?>"><img alt="uk-flag" class="l-img" src="images/uk.png"/></a>
				<a href="index.php?action=<?=ACTION?>"><img alt="gr-flag" class="l-img" src="images/gr.jpg"/></a>
				<?php } else { ?>
				<a href="index.php?action=<?=ACTION?>"><img alt="uk-flag" class="l-img" src="images/uk.png"/></a>
				<a href="index.php?action=<?=REVERSE_ACTION?>"><img alt="gr-flag" class="l-img" src="images/gr.jpg"/></a>
				<?php } ?>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div id="clues">
					<h2 class="name">Βασίλης Ζαφειράκης</h2>
					<p class="prof">Κτηνίατρος Α.Π.Θ.</p>
					<img alt="veterinarian-logo" id="logo" src="images/logo.jpg" alt="vent logo"/>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 text-center">
				<div id="info">
					<p id="email"><span class="icon-paper-plane"></span>vas.zafeirakis[at]gmail.com</p>
					<p class="phone"><span class="icon-mobile"></span>6986798497</p>
				</div>
				<div id="slideshow">slideshow</div>
			</div>
			<div id="main-menu" class="col-sm-12 col-md-12 col-lg-12">
				<div class="col-sm-12 col-md-3 col-lg-3">
					<a href="index.php?action=αρχική" title="Αρχική"><span>Αρχική</span></a>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3">
					<a href="index.php?action=υπηρεσίες" title="Υπηρεσίες"><span>Υπηρεσίες</span></a>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3">
					<a href="index.php?action=άρθρα" title="Άρθρα"><span>Άρθρα</span></a>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3">
					<a href="index.php?action=επικοινωνία" title="Επικοινωνία"><span>Επικοινωνία</span></a>
				</div>
			</div>
		</header>
