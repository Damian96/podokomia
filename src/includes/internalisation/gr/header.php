			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu-collapsed" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo BASEURL . '/' . LANG . '/' . $functions->getLanguageHome(LANG) ?>"><img alt="veterinarian-logo" id="logo" src="<?php echo BASEURL ?>/images/logo.png"/></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="main-menu-collapsed">
						<ul class="nav navbar-nav">
							<li class="<?php echo (ACTION === 'homepage') ? 'active' : '' ?>">
								<a href="<?php echo BASEURL ?>/gr/αρχική">Αρχική</a>
							</li>
							<li class="<?php echo (ACTION === 'services') ? 'active' : '' ?>">
								<a href="<?php echo BASEURL ?>/gr/υπηρεσίες">Υπηρεσίες</a>
							</li>
							<li class="<?php echo (ACTION === 'articles') ? 'active' : '' ?>">
								<a href="<?php echo BASEURL ?>/gr/άρθρα">Άρθρα</a>
							</li>
							<li class="<?php echo (ACTION === 'contact') ? 'active' : '' ?>">
								<a href="<?php echo BASEURL ?>/gr/επικοινωνία">Επικοινωνία</a>
							</li>
						</ul>
						<?php require_once(BASEPATH . '/includes/language-selector.php'); ?>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>