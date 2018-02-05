		<ul id="language-control" class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<?php
					$link = $functions->getFlagActionLink(ACTION, LANG);
					if (LANG === 'gr'):
				?>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					<img alt="image of the Greek flag" src="<?php echo BASEURL ?>/images/gr.jpg"/>
					Γλώσσα
					<span class="caret"></span>
				</a>
				<?php elseif (LANG === 'en'): ?>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					<img alt="image of United Kingdom's flag" src="<?php echo BASEURL ?>/images/uk.png"/>
					Language
					<span class="caret"></span>
				</a>
				<?php endif ?>
				<ul class="dropdown-menu">
					<?php if (LANG === 'gr'): ?>
					<li>
						<a href="<?php echo BASEURL ?>/en/<?php echo $link ?>">
							English (UK) <img alt="image of United Kingdom's flag" src="<?php echo BASEURL ?>/images/uk.png"/>
						</a>
					</li>
					<?php elseif (LANG === 'en'): ?>
					<li>
						<a href="<?php echo BASEURL ?>/gr/<?php echo $link ?>">
							Ελληνικά <img alt="image of the Greek flag" src="<?php echo BASEURL ?>/images/gr.jpg"/>
						</a>
					</li>
					<?php endif ?>
				</ul>
			</li>
		</ul>