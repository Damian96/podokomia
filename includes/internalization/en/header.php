		<header class="col-sm-12 col-md-12 col-lg-12">
			<div id="lang-control">
				<?php if(LANG === 'el') { ?>
				<a href="index.php?action=<?=ACTION?>"><img alt="gr-flag" class="l-img" src="images/gr.jpg"/></a>
				<a href="index.php?action=<?=REVERSE_ACTION?>"><img alt="uk-flag" class="l-img" src="images/uk.png"/></a>
				<?php } else { ?>
				<a href="index.php?action=<?=REVERSE_ACTION?>"><img alt="gr-flag" class="l-img" src="images/gr.jpg"/></a>
				<a href="index.php?action=<?=ACTION?>"><img alt="uk-flag" class="l-img" src="images/uk.png"/></a>
				<?php } ?>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div id="clues">
					<h2 class="name">Vasilis Zafeirakis</h2>
                        <p class="prof">Veterinarian</p>
					<img alt="veterinarian-logo" id="logo" src="images/logo.jpg" alt="vent logo"/>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 text-center">
				<div id="info">
					<p id="email"><span class="icon-paper-plane"></span>vas.zafeirakis[at]gmail.com</p>
					<p class="phone"><span class="icon-mobile"></span>+30 6986798497</p>
				</div>
				<div id="slideshow">slideshow</div>
			</div>
			<div id="main-menu" class="col-sm-12 col-md-12 col-lg-12">
				<div class="col-sm-12 col-md-3 col-lg-3">
					<a href="index.php?action=index" title="Home"><span>Home</span></a>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3">
					<a href="index.php?action=services" title="Services"><span>Services</span></a>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3">
					<a href="index.php?action=articles" title="Articles"><span>Articles</span></a>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3">
					<a href="index.php?action=contact" title="Contact"><span>Contact</span></a>
				</div>
			</div>
		</header>

