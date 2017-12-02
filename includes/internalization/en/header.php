		<header class="col-sm-12 col-md-12 col-lg-12">
			<div id="lang-control">
				<?php $links = $functions->getLanguageLinks(constant('ACTION')); ?>
				<a title="Greek" href="<?php echo constant('BASEURL') ?>/gr/<?php echo $links['gr'] ?>"><img alt="image of the Greek flag" class="l-img" src="<?php echo constant('BASEURL') ?>/images/gr.jpg"/></a>
				<a title="English (UK)" href="<?php echo constant('BASEURL') ?>/en/<?php echo $links['en'] ?>"><img alt="image of United Kingdom's flag" class="l-img" src="<?php echo constant('BASEURL') ?>/images/uk.png"/></a>
			</div>
			<div id="clues" class="col-sm-12 col-md-6 col-lg-6">
				<h2 id="name">Vasilis Zafeirakis</h2>
				<p id="prof">Veterinarian</p>
				<img alt="veterinarian-logo" id="logo" src="<?php echo constant('BASEURL') ?>/images/logo.jpg"/>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 text-center">
				<div id="info">
					<p id="email"><span class="icon-paper-plane-o"></span>vas.zafeirakis@gmail.com</p>
					<p id="phone"><span class="icon-mobile"></span>+30 6986798497</p>
				</div>
				<div id="slideshow" data-base-url="<?php echo constant('BASEURL') ?>">slideshow</div>
			</div>
			<div id="main-menu" class="col-sm-12 col-md-12 col-lg-12">
				<div class="col-sm-12 col-md-3 col-lg-3 <?php echo (constant('ACTION') === 'homepage') ? 'active' : '' ?>">
					<a href="<?php echo constant('BASEURL')?>/en/homepage" title="Home"><span>Home</span></a>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3 <?php echo (constant('ACTION') === 'services') ? 'active' : '' ?>">
					<a href="<?php echo constant('BASEURL')?>/en/services" title="Services"><span>Services</span></a>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3 <?php echo (constant('ACTION') === 'articles') ? 'active' : '' ?>">
					<a href="<?php echo constant('BASEURL')?>/en/articles" title="Articles"><span>Articles</span></a>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3 <?php echo (constant('ACTION') === 'contact') ? 'active' : '' ?>">
					<a href="<?php echo constant('BASEURL')?>/en/contact" title="Contact"><span>Contact</span></a>
				</div>
			</div>
		</header>

